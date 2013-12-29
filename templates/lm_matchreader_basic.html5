<!-- indexer::stop --> 
<!-- 
 
	"Match reader - Basics" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasMatchid): ?>
		<div class="game"<?php if($this->se_friendly_tags==1): ?> itemscope itemtype="http://data-vocabulary.org/Event"<?php endif; ?>>
			<div class="summary"<?php if($this->se_friendly_tags==1): ?> itemprop="summary"<?php endif;?>>
				<span class="home<?php if($this->arrMatch['home_own']==1): ?> own<?php endif; ?>"><?php echo($this->arrMatch['team_home']); ?></span> 
				: 
				<span class="away<?php if($this->arrMatch['away_own']==1): ?> own<?php endif; ?>"><?php echo($this->arrMatch['team_away']); ?></span></div>
			<div class="result">
				<?php echo($this->arrMatch['score_home']); ?> : <?php echo($this->arrMatch['score_away']); ?>
				<?php if($this->arrMatch['result_confirmed']==1): ?><span class="confirmed"> * </span><?php endif; ?>
				<?php if($this->arrMatch['different_points']==1): ?><span class="differentpoints"> ! </span><?php endif; ?>
			</div>
		</div>
		
		<?php if($this->arrMatch['picture']!='') : ?><div class="picture"><img<?php if($this->se_friendly_tags==1): ?> itemprop="photo"<?php endif; ?> src="<?php echo($this->arrMatch['picture']); ?>" /></div><?php endif; ?>
		
		<div class="dates">
			<div class="date_start">
				<div class="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['startdate']); ?></div>
				<div class="value"<?php if($this->se_friendly_tags==1): ?> itemprop="startDate" datetime="<?php echo($this->arrMatch['formated_start']); ?>"<?php endif; ?>><?php echo(date($GLOBALS['TL_CONFIG']['dateFormat'],$this->arrMatch['date_start'])); ?> <?php echo(date($GLOBALS['TL_CONFIG']['timeFormat'],$this->arrMatch['time_start'])); ?></div>				
			</div>
			<div class="date_end">
				<div class="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['enddate']); ?></div>
				<div class="value"<?php if($this->se_friendly_tags==1): ?> itemprop="endDate" datetime="<?php echo($this->arrMatch['formated_end']); ?>"<?php endif; ?>><?php echo(date($GLOBALS['TL_CONFIG']['dateFormat'],$this->arrMatch['date_end'])); ?> <?php echo(date($GLOBALS['TL_CONFIG']['timeFormat'],$this->arrMatch['time_end'])); ?></div>				
			</div>
		</div>
		
		<div class="location"<?php if($this->se_friendly_tags==1): ?>itemprop="location" itemscope itemtype="http://data-vocabulary.org/Organization"<?php endif; ?>>
			
			<div class="name">
				<div class="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['location']); ?></div>
				<div class="value"<?php if($this->se_friendly_tags==1): ?> itemprop="name"<?php endif; ?>><?php echo($this->arrMatch['location']); ?></div>				
			</div>
			<div class="address"<?php if($this->se_friendly_tags==1): ?> itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address"<?php endif; ?>>
				<div class="street">
					<div class="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['street']); ?></div>
					<div class="value"<?php if($this->se_friendly_tags==1): ?> itemprop="street-address"<?php endif; ?>><?php echo($this->arrMatch['street']); ?></div>				
				</div>
				<div class="zip">
					<div class="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['zip']); ?></div>
					<div class="value"><?php echo($this->arrMatch['zip']); ?></div>				
				</div>
				<div class="city">
					<div class="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['city']); ?></div>
					<div class="value"<?php if($this->se_friendly_tags=="1"): ?> itemprop="locality"<?php endif; ?>><?php echo($this->arrMatch['city']); ?></div>				
				</div>
				<?php if($this->arrMatch['region']!=""): ?>
					<div class="region">
						<div class="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['region']); ?></div>
						<div class="value"<?php if($this->se_friendly_tags==1): ?> itemprop="region"<?php endif; ?>><?php echo($this->arrMatch['region']); ?></div>				
					</div>
				<?php endif; ?>
			</div>
			<?php if($this->arrMatch['website']!=""): ?>
				<div class="website">
					<a href="<?php echo($this->arrMatch['website']); ?>"><?php echo($GLOBALS['TL_LANG']['league-manager']['matchreader_basic']['website']); ?></a>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>
