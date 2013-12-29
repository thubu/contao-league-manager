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
		<div class="contest"><span class="contestname">Liga : <?php echo $this->contest; ?></span></div>

<div><span class="startdate">Erster Spieltag : <?php echo $this->date_start; ?></span></div>


<div><span class="enddate">Letzter Speiltag : <?php echo $this->date_end; ?></span></div>
		<ul>
			<?php foreach($this->teams as $team): ?>
				<li class="team <?php echo $team['class']; ?>">
					<?php if(($this->showlogo == "1") && ($team['logo']!="")): ?><div class="teamlogo"><img src="./<?php echo $team['logo']; ?>" alt="<?php echo $team['name']; ?>/></div><?php endif; ?>
					<span class="teamname"><?php if($team['redirect']!=''): ?><a href="<?php echo($team['redirect']); ?>"><?php endif; ?><?php echo $team['name']; ?><?php if($team['redirect']!=''): ?></a><?php endif; ?></span>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>