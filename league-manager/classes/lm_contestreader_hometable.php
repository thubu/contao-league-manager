<?php

/**
  * PHP version 5
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    leaguemanager
 * @license    LGPL
 * @filesource
 */


/**
 * Class lm_contestreader_table
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_hometable extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_hometable';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Contest reader - hometable<br />";
			if($this->lm_usefixedcontest=="1"){
				$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
				$return.="Fixed contest: " . $objContest->name;
			}
			else
			{
				$return.="Variable contest";
			}
			return $return;
		}
		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		//Get contest id from get variable or from content element settings
		if($this->lm_usefixedcontest=="1"){
			$contestid = $this->lm_contest;
		}
		else
		{
			$contestid = $this->Input->get('lm_contest');
		}

		if($contestid)
		{
			$arrTeams=array();
			$arrRounds=array();
			$objAllRounds = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($this->lm_contest);
			while($objAllRounds->next()){
				$arrRounds[]=array(
				'round_no'=>$objAllRounds->round_no,
				'name'=>$objAllRounds->name
				);
			}
			$objContest =$this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
			$objPenalties =$this->Database->prepare("SELECT team,sum(points) as penalty FROM tl_lm_contest_penalties WHERE pid=? GROUP BY team")->execute($this->lm_contest);
			$arrPenalties=array();
			while($objPenalties->next()){
				$arrPenalties[$objPenalties->team]=array(
				'team'=>$objPenalties->team,
				'penalty'=>$objPenalties->penalty
				);
			}
			$teams=$this->Database->prepare("SELECT * FROM tl_lm_team_to_contest WHERE contest=?")->execute($this->lm_contest);
			while($teams->next()){
				$objTeam = $this->Database->prepare("SELECT * FROM tl_lm_teams WHERE id=?")->execute($teams->team);

								if (!is_numeric($objTeam->logo))
								{
								    return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
								}
								$objFile = \FilesModel::findByPk($objTeam->logo);
								$objTeam->logo = $objFile->path;


				switch($this->lm_linktype_team)
					{
						case 'NOL':
							$redirect='';
							break;
						case 'INT':
							if(($objTeam->hasinternal_page==1)&&($this->internal_page!=0))
							{
								$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->internal_page);
								$redirect= $this->generateFrontendUrl($objTargetPage->row(),'/lm_team/' . $objTeam->id);
							}
							else
							{
								$redirect='';
							}
							break;
						case 'EXT':
							if($objTeam->website!='')
							{
								$redirect=$objTeam->website;
							}
							else
							{
								$redirect='';
							}
							break;
						case 'FIX':
							if($this->lm_redirectteam!=0)
							{
								$objTargetPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
														->limit(1)
														->execute($this->lm_redirectteam);
								$redirect= $this->generateFrontendUrl($objTargetPage->row(),'/lm_team/' . $objTeam->id);
							}
							else
							{
								$redirect='';
							}

							break;
						default:
							$redirect='';
					}
				$arrTeams[$teams->team]=array(
				'id'=>$objTeam->id,
				'teamname'=>$objTeam->name,
				'matches'=>0,
				'win'=>0,
				'draw'=>0,
				'lose'=>0,
				'resplus'=>0,
				'resminus'=>0,
				'resdiff'=>0,
				'pointsplus'=>0,
				'pointsminus'=>0,
				'pointsdiff'=>0,
				'pointstotal'=>0,
				'penalties'=>0,
				'haspenalties'=>false,
				'logo'=>$objTeam->logo,
				'ownteam'=>$objTeam->ownteam,
				'redirect'=>$redirect
				);
			}

			if($this->Input->get('lm_round_start') && $this->Input->get('lm_round_end')){
				//check if start and end are entered correctly. Otherwise switch them
				if($this->Input->get('lm_round_start') <= $this->Input->get('lm_round_end')){
					$objRounds = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? AND round_no>=? and round_no<=? ORDER BY round_no ASC")->execute($this->lm_contest,$this->Input->get('lm_round_start'),$this->Input->get('lm_round_end'));
				}
				else{
					$objRounds = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? AND round_no>=? and round_no<=? ORDER BY round_no ASC")->execute($this->lm_contest,$this->Input->get('lm_round_end'),$this->Input->get('lm_round_start'));
				}
			}
			else{
				$objRounds = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($this->lm_contest);
			}
			while($objRounds->next()){

				$objMatches = $this->Database->prepare("SELECT * FROM tl_lm_matches WHERE pid=?")->execute($objRounds->id);
				while($objMatches->next()){
					if($objMatches->score_home!="" || $objMatches->score_away!=""){ //Check if match has result(s)
						if(!$objMatches->score_home>=0){$score_home=0;} //set score to 0, when one part is missing
						if(!$objMatches->score_away>=0){$score_away=0;}
						$score_home=$objMatches->score_home;
						$score_away=$objMatches->score_away;

						//Increase match counter per team
						$arrTeams[$objMatches->team_home]['matches']+=1;
						/**$arrTeams[$objMatches->team_away]['matches']+=1;*/

						//update result+,result-
						$arrTeams[$objMatches->team_home]['resplus']+=$score_home;
						$arrTeams[$objMatches->team_home]['resminus']+=$score_away;
						/**$arrTeams[$objMatches->team_away]['resplus']+=$score_away;*/
						/**$arrTeams[$objMatches->team_away]['resminus']+=$score_home;*/

						//update Result diff
						$arrTeams[$objMatches->team_home]['resdiff']=$arrTeams[$objMatches->team_home]['resplus']-$arrTeams[$objMatches->team_home]['resminus'];
						/**$arrTeams[$objMatches->team_away]['resdiff']=$arrTeams[$objMatches->team_away]['resplus']-$arrTeams[$objMatches->team_away]['resminus'];*/

						//Update points
						if($score_home>$score_away){//home wins

							//Update win,draw,lose
							$arrTeams[$objMatches->team_home]['win']+=1;
							/**$arrTeams[$objMatches->team_away]['lose']+=1;*/

							if($objMatches->different_points==1){//Has this match a different point scheme than the contest?
								$arrTeams[$objMatches->team_home]['pointsplus']+=$objMatches->points_home;
								$arrTeams[$objMatches->team_home]['pointsminus']-=$objMatches->points_away;
							/**	$arrTeams[$objMatches->team_away]['pointsplus']+=$objMatches->points_away;*/
							/**	$arrTeams[$objMatches->team_away]['pointsminus']-=$objMatches->points_home;*/
							}
							else{
								$arrTeams[$objMatches->team_home]['pointsplus']+=$objContest->home_wins_points_home;
								$arrTeams[$objMatches->team_home]['pointsminus']-=$objContest->home_wins_points_away;
							/**	$arrTeams[$objMatches->team_away]['pointsplus']+=$objContest->home_wins_points_away;*/
							/**	$arrTeams[$objMatches->team_away]['pointsminus']-=$objContest->home_wins_points_home;*/
							}
						}
						elseif($score_home<$score_away){//away wins
							$arrTeams[$objMatches->team_home]['lose']+=1;
							/**$arrTeams[$objMatches->team_away]['win']+=1;*/
							if($objMatches->different_points==1){
								$arrTeams[$objMatches->team_home]['pointsplus']+=$objMatches->points_home;
								$arrTeams[$objMatches->team_home]['pointsminus']-=$objMatches->points_away;
							/**	$arrTeams[$objMatches->team_away]['pointsplus']+=$objMatches->points_away;*/
							/**	$arrTeams[$objMatches->team_away]['pointsminus']-=$objMatches->points_home;*/
							}
							else{
								$arrTeams[$objMatches->team_home]['pointsplus']+=$objContest->away_wins_points_home;
								$arrTeams[$objMatches->team_home]['pointsminus']-=$objContest->away_wins_points_away;
							/**	$arrTeams[$objMatches->team_away]['pointsplus']+=$objContest->away_wins_points_away;*/
							/**	$arrTeams[$objMatches->team_away]['pointsminus']-=$objContest->away_wins_points_home;*/
							}
						}

						else{//Draw
							$arrTeams[$objMatches->team_home]['draw']+=1;
							/**$arrTeams[$objMatches->team_away]['draw']+=1;*/
							if($objMatches->different_points==1){
								$arrTeams[$objMatches->team_home]['pointsplus']+=$objMatches->points_home;
								$arrTeams[$objMatches->team_home]['pointsminus']-=$objMatches->points_away;
							/**	$arrTeams[$objMatches->team_away]['pointsplus']+=$objMatches->points_away;*/
							/**	$arrTeams[$objMatches->team_away]['pointsminus']-=$objMatches->points_home;*/
							}
							else{
								$arrTeams[$objMatches->team_home]['pointsplus']+=$objContest->draw_points_home;
								$arrTeams[$objMatches->team_home]['pointsminus']-=$objContest->draw_points_away;
							/**	$arrTeams[$objMatches->team_away]['pointsplus']+=$objContest->draw_points_away;*/
							/**	$arrTeams[$objMatches->team_away]['pointsminus']-=$objContest->draw_points_home;*/
							}
						}

						//Update results differences
						$arrTeams[$objMatches->team_home]['pointsdiff']=$arrTeams[$objMatches->team_home]['pointsplus']+$arrTeams[$objMatches->team_home]['pointsminus'];
						/**$arrTeams[$objMatches->team_away]['pointsdiff']=$arrTeams[$objMatches->team_away]['pointsplus']+$arrTeams[$objMatches->team_away]['pointsminus'];*/
					}//end of if($objMatches->score_home || $objMatches->score_away)
				}//end of while($objMatches->next())
			}//end of while($objRounds->next())

			//Read penalties and adjust points
			foreach($arrTeams as $team)
			{
				if(isset($arrPenalties[$team['id']]))
				{
					$arrTeams[$team['id']]['haspenalties']=true;
					$arrTeams[$team['id']]['penalties']=$arrPenalties[$team['id']]['penalty'];
				}
				else
				{
					$arrTeams[$team['id']]['penalties']=0;
				}
				$arrTeams[$team['id']]['pointstotal']=$arrTeams[$team['id']]['pointsplus']+$arrPenalties[$team['id']]['penalty'];
			}


			//Generate table and sort entries
			$arrTable=array();
			$i=0;
			foreach($arrTeams as $team){
				$i++;
				$arrTable[$i]=$team;
			}
			for($i=1;$i<count($arrTable);$i++){
				for($j=$i+1;$j<=count($arrTable);$j++){
					if($arrTable[$j]['pointstotal']>$arrTable[$i]['pointstotal']){
						swap($arrTable,$j,$i);
					}
					elseif(($arrTable[$i]['pointstotal']==$arrTable[$j]['pointstotal'])&&($arrTable[$j]['resdiff']>$arrTable[$i]['resdiff'])){
						swap($arrTable,$j,$i);
					}
					elseif(($arrTable[$i]['pointstotal']==$arrTable[$j]['pointstotal'])&&($arrTable[$i]['resdiff']==$arrTable[$j]['resdiff'])&&($arrTable[$j]['resplus']>$arrTable[$i]['resplus'])){
						swap($arrTable,$j,$i);
					}
					elseif(($arrTable[$i]['pointstotal']==$arrTable[$j]['pointstotal'])&&($arrTable[$i]['resdiff']==$arrTable[$j]['resdiff'])&&($arrTable[$i]['resplus']==$arrTable[$j]['resplus'])&&($arrTable[$j]['name']<$arrTable[$i]['name'])){
						swap($arrTable,$j,$i);
					}
					else{
					}
				}
			}

			if($this->Input->get('lm_round_start')){
				$this->Template->round_start=$this->Input->get('lm_round_start');
			}
			else
			{
				$this->Template->round_start='';
			}

			if($this->Input->get('lm_round_end')){
				$this->Template->round_end=$this->Input->get('lm_round_end');
			}
			else
			{
				$this->Template->round_end='';
			}
			$this->Template->teams=$arrTable;
			$this->Template->rounds=$arrRounds;
			$this->Template->round_count=$objAllRounds->numRows;
			$this->Template->formurl=$this->Environment->url . $this->Environment->path . "/" . $this->Environment->request;

			$this->Template->fields=deserialize($this->lm_tablefields);
			$this->Template->penalties=$arrPenalties;
			$this->Template->hasContestid=$contestid;
		}//if($contestid)
	}
}
/**
function swap(&$arr,$a,$b){
	$temp=$arr[$a];
	$arr[$a]=$arr[$b];
	$arr[$b]=$temp;
}
*/
