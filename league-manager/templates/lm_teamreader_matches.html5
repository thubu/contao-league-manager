<!-- indexer::stop --> 
<!-- 
 
	"Team reader - Matches" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasTeamid): ?>
		<?php if($this->round_no>0): ?>
			<?php for($i=1;$i<=$this->round_no;$i++): ?>
				<div class="round">
					<div class="roundinfo">
						<span class="roundname"><?php echo($this->rounds[$i]['roundname']); ?></span>
						<span class="finalized"><?php if($this->rounds[$i]['dates_finalized']==1): ?>*<?php endif;?></span>
					</div>
					<div class="matches">
						<?php if(count($this->matches[$i])>0): ?>
							<?php foreach($this->matches[$i] as $match): ?>
								<div class="match<?php if($match['home_own']==1||$match['away_own']==1): ?> own<?php endif; ?>">
									<div class="datetime">
										<span class="startdate"><?php echo(date($GLOBALS['TL_CONFIG']['dateFormat'],$match['startdate'])); ?></span>
										<span class="starttime"><?php echo(date($GLOBALS['TL_CONFIG']['timeFormat'],$match['starttime'])); ?></span>
									</div>
									<div class="teams">
										<?php if($match['redirect']!=''): ?><a href="<?php echo($match['redirect']); ?>"><?php endif; ?>
										<span class="hometeam<?php if($match['home_own']==1): ?> own<?php endif; ?>"><?php echo $match['home']; ?></span>
										<span class="versus">:</span>
										<span class="awayteam<?php if($match['away_own']==1): ?> own<?php endif; ?>"><?php echo $match['away']; ?></span>
										<?php if($match['redirect']!=''): ?></a><?php endif; ?>
									</div>
									<div class="result">
										<span class="scorehome"><?php echo $match['homescore']; ?></span>
										<span class="versus">:</span>
										<span class="scoreaway"><?php echo $match['awayscore']; ?></span>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			<?php endfor; ?>
		<?php endif; ?>
	<?php endif; ?>
</div>