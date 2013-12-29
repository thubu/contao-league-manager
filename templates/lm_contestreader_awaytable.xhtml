<!-- indexer::stop --> 
<!-- 
 
	"Contest reader - Table" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasContestid): ?>
		<form action="<?php echo($this->formurl); ?>" method="get">
			
			<span class="select_round"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_from']); ?>
			
			<?php $i=0; ?>
			<select name="lm_round_start">
				<?php foreach($this->rounds as $round): ?>
					<?php $i++; ?>
					<option value="<?php echo($round['round_no']); ?>"<?php if(($round['round_no']==$this->round_start) || ($this->round_start=="" && $i==1)): ?> selected="selected"<?php endif; ?>><?php echo($round['name']); ?></option>
				<?php endforeach; ?>
			</select>
			
			<?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_to']); ?>
			
			<?php $i=0; ?>
			<select name="lm_round_end">
				<?php foreach($this->rounds as $round): ?>
					<?php $i++; ?>
					<option value="<?php echo($round['round_no']); ?>"<?php if(($round['round_no']==$this->round_end) || ($this->round_end=="" && $i==$this->round_count)): ?> selected="selected"<?php endif; ?>><?php echo($round['name']); ?></option>
				<?php endforeach; ?>
			</select>
		
			<input type="submit" value="<?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['select_round_submit']); ?>">
			<input type="hidden" name="REQUEST_TOKEN" value="{{request_token}}">
			</span>
		</form>
		
		<table>
			<thead>
			<?php foreach($this->fields as $field): ?>
				<?php
					switch($field){
						case 'logo':
							?><th class="Logo"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Logo']); ?></th><?php
							break;
						case 'name':
							?><th class="Team"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Team']); ?></th><?php
							break;
						case 'matches':
							?><th class="Matches"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Matches']); ?></th><?php
							break;
						case 'w':
							?><th class="Win"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Win']); ?></th><?php
							break;
						case 'd':
							?><th class="Draw"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Draw']); ?></th><?php
							break;
						case 'l':
							?><th class="Lose"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Lose']); ?></th><?php
							break;
						case 'rp':
							?><th class="Resplus"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Resplus']); ?></th><?php
							break;
						case 'rm':
							?><th class="Resminus"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Resminus']); ?></th><?php
							break;
						case 'rd':
							?><th class="Resdiff"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Resdiff']); ?></th><?php
							break;
						case 'pp':
							?><th class="Pointsplus"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsplus']); ?></th><?php
							break;
						case 'pm':
							?><th class="Pointsminus"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsminus']); ?></th><?php
							break;
						case 'pd':
							?><th class="Pointsdiff"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointsdiff']); ?></th><?php
							break;
						case 'pt':
							?><th class="Pointstotal"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointstotal']); ?></th><?php
							break;
						case 'pen':
							?><th class="Pointspenalty"><?php echo($GLOBALS['TL_LANG']['league-manager']['resulttable']['Pointspenalty']); ?></th><?php
							break;
					}//switch($field) ?>
			<?php endforeach; ?>
			</thead>
			<?php $i=0; ?>
			<?php foreach($this->teams as $team): ?>
				<?php $i++; ?>
				<tr class="<?php if(($i%2)==1): ?>even<?php else: ?>odd<?php endif; ?><?php if($team['ownteam']==1): ?> own<?php endif; ?>">
				<?php foreach($this->fields as $field): ?>
				<?php
					switch($field){
						case 'logo':
							if (!$team['logo']==""){//add image tag if logo present only
								?><td class="teamlogo"><img src="<?php echo $team['logo']; ?>" /></td><?php
							}
							else{
								?><td>&nbsp;</td><?php
							}
							break;
						case 'name':
							?><td class="teamname"><?php if($team['redirect']!=''): ?><a href="<?php echo($team['redirect']); ?>"><?php endif; ?><?php echo $team['teamname']; ?><?php if($team['redirect']!=''): ?></a><?php endif; ?></td><?php
							break;
						case 'matches':
							?><td class="matches"><?php echo $team['matches']; ?></td><?php
							break;
						case 'w':
							?><td class="matcheswin"><?php echo $team['win']; ?></td><?php
							break;
						case 'd':
							?><td class="matchesdraw"><?php echo $team['draw']; ?></td><?php
							break;
						case 'l':	
							?><td class="matcheslose"><?php echo $team['lose']; ?></td><?php
							break;
						case 'rp':
							?><td class="resplus"><?php echo $team['resplus']; ?></td><?php
							break;
						case 'rm':
							?><td class="resminus"><?php echo $team['resminus']; ?></td><?php
							break;
						case 'rd':
							?><td class="resdiff"><?php echo $team['resdiff']; ?></td><?php
							break;
						case 'pp':
							?><td class="pointsplus"><?php echo $team['pointsplus']; ?></td><?php
							break;
						case 'pm':
							?><td class="pointsminus"><?php echo $team['pointsminus']; ?></td><?php
							break;
						case 'pd':
							?><td class="pointsdiff"><?php echo $team['pointsdiff']; ?></td><?php
							break;
						case 'pt':
							?><td class="pointstotal"><?php echo $team['pointstotal']; ?><?php if($team['haspenalties']==true): ?>*<?php endif; ?></td><?php
							break;
						case 'pen':
							?><td class="pointsdiff"><?php echo $team['pointsdiff']; ?></td><?php
							break;
					}//switch($field) ?>
				<?php endforeach; //foreach($this->fields as $field): ?>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; //if($this->hasContestid):?>
</div>