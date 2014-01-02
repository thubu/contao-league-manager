<!-- indexer::stop --> 
<!-- 
 
	"Team reader - Last match" by Soeren Schroeder is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob and based on the "Next Match" by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?><?php if($this->match_found==0): ?> nomatch<?php endif; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasTeamid): ?>
		<table class="matches">
		<?php if ($this->match_found==1): ?>
			<tr class="round"><th colspan="12" class="info">

				<span class="date"><?php echo $this->date; ?></span>
				<span class="time"><?php echo $this->time; ?></span>
							
			</th></tr>
		</table>
	
	<table class="teams">		
		<tr class="match">
		<?php if ($this->show_logo==1 && $this->home_logo!=''): ?>
		<td>  		<img src="./<?php echo $this->home_logo; ?>" />
		</td><?php endif; ?>
		<td> 		<span class="home<?php if($this->home_own==1): ?> own<?php endif; ?>">
		<?php if($this->redirecthome!=''): ?><a href="<?php echo $this->redirecthome; ?>"><?php endif; ?>
		<span class="name"><?php echo $this->home_name; ?></span>
		<?php if($this->redirecthome!=''): ?></a><?php endif; ?></span>
		</td>
		<td class="versus">&nbsp:&nbsp</td>
		<?php if ($this->show_logo==1 && $this->away_logo!=''): ?>
		<td>		<img src="./<?php echo $this->away_logo; ?>" />
		</td><?php endif; ?>
		<td>  <span class="away<?php if($this->away_own==1): ?> own<?php endif; ?>">
		<?php if($this->redirectaway!=''): ?><a href="<?php echo $this->redirectaway; ?>"><?php endif; ?>
		<span class="name"><?php echo $this->away_name; ?></span>
		<?php if($this->redirectaway!=''): ?></a><?php endif; ?></span>
		</td>
		<td class="scorehome"><?php echo $this->home_score; ?>
		</td>
		<td class="versus">&nbsp:&nbsp</td>
		<td class="awayscore"><?php echo $this->away_score; ?></td>
		<td class="versus">(</td>
		<td class="halftimescorehome"><?php echo $this->home_halftimescore; ?></td>
		<td class="versus">&nbsp:&nbsp</td>
		<td class="halftimeawayscore"><?php echo $this->away_halftimescore; ?></td>
		<td class="versus">)</td>
	</tr>
		</table>
	
	
	<table class="place">
			<tr class="location">	
	<td colspan="3"><span class="location"><?php echo $this->location; ?></span>
						</td>
					</tr>
					<?php if($this->redirectmatch!=''): ?>
					<tr class="report">
					<td colspan="3"><span class="matchinfo"><a href="<?php echo $this->redirectmatch; ?>">
					<?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_nextmatch']['matchinfos']); ?></a>
					</tr><?php endif; ?>
		</table>
			<?php endif; ?>
			
		<?php endif; ?>

</div>