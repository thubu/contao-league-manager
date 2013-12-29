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
 * Class lm_contestreader_rounds
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class lm_contestreader_rounds extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'lm_contestreader_rounds';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Contest reader - rounds<br />";
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
		if($this->lm_usefixedcontest=="1"){
			$contestid = $this->lm_contest;
		}
		else
		{
			$contestid = $this->Input->get('lm_contest');
		}
		if($contestid)
		{
			$arrRet = array();
			$objRounds = $this->Database->prepare("SELECT * FROM tl_lm_rounds WHERE pid=? ORDER BY round_no ASC")->execute($contestid);
			$objContest = $this->Database->prepare("SELECT * FROM tl_lm_contests WHERE id=?")->execute($this->lm_contest);
			$this->Template->contest = $objContest->name;
			$i=0;
			while($objRounds->next()){
				$i=$i+1;
				$arrRet[]=array(
				'id'=>$objRounds->id,
				'name'=>$objRounds->name,
				'mode'=>$objRounds->mode,
				'class'=>(($i == 1) ? 'first ' : '') . (($i == $objRounds->numRows) ? 'last ' : '') . ((($i % 2) == 0) ? 'even' : 'odd')
				);
			}
			$this->Template->rounds = $arrRet;
			$this->Template->hasContestid=$contestid;
		}
	}
}
