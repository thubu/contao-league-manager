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
			<tr><th colspan="2" class="contestname"><class="name"><?php echo $this->contest; ?></th></tr>
			<tr colspan="2" >
				<td class="startdate"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['start']; ?> <?php echo $this->date_start; ?></td>
				<td class="enddate"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['end']; ?> <?php echo $this->date_end; ?></td>
			</tr>
		</table>
		<table class="teams">
			<?php foreach($this->teams as $team): ?>
				<tr class="team <?php echo $team['class']; ?>
					<td><class="logo"><?php if(($this->showlogo == 1) && ($team['logo']!='')): ?><div class="logo"><img src="./<?php echo $team['logo']; ?>" alt="<?php echo $team['name']; ?>/><?php endif; ?></td>
					<td class="teamname">
						<?php if($team['redirect']!=''): ?><a href="<?php echo($team['redirect']); ?>"><?php endif; ?>
						<?php echo $team['name']; ?>
						<?php if($team['redirect']!=''): ?></a><?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>