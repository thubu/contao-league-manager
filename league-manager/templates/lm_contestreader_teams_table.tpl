<!-- indexer::stop --> 
<!-- 
 
	"Contest reader - Teams" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasContestid): ?>
		<table class="contestinformation">
			<tr class="information"><th colspan="2"> <span class="contestname"><?php echo $this->contest; ?></span></th></tr>
			<tr colspan="2" >
				<td class="startdate"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['start']; ?> <?php echo $this->date_start; ?></td>
				<td class="enddate"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['end']; ?> <?php echo $this->date_end; ?></td>
			</tr>
		</table>
		<table class="teams">
			<?php foreach($this->teams as $team): ?>
				<tr class="<?php if(($i%2)==1): ?>even<?php else: ?>odd<?php endif; ?><?php if($team['ownteam']==1): ?> own<?php endif; ?>">
					<td class="logo">
								<td class="teamlogo"><img src="<?php echo $team['logo']; ?>" /></td>
							
					<td class="teamname">
						<?php if($team['redirect']!=''): ?><a href="<?php echo($team['redirect']); ?>"><?php endif; ?>
						<?php echo $team['name']; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>