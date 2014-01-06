<!-- indexer::stop --> 
<!-- 
 
	"Team reader - Basics" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?><?php if($this->team_found==0): ?> noteam<?php endif; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasTeamid): ?>
		<?php if ($this->team_found==1): ?>
			<?php if($this->logo!=''): ?>
				<div class="teamlogo">
					<img src="<?php echo($this->logo); ?>" />
				</div>
			<?php endif; ?>
			
			<div class="team"<?php if($this->se_friendly==1): ?> itemscope itemtype="http://data-vocabulary.org/Organization"<?php endif; ?>
				<div class="name">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['name']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="name"<?php endif;?>><?php echo $this->name; ?></span>
				</div> 

				<div class="shortname">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['shortname']); ?></span>
					<span class="value"><?php echo $this->shortname; ?></span>
				</div>
			</div>
			<div class="location"<?php if($this->se_friendly==1): ?> itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address"<?php endif; ?>>
				<?php if($this->location!=''): ?>
				<div class="location">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['location']); ?></span>
					<span class="value"><?php echo $this->location; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->street!=''): ?>
				<div class="street">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['street']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="street-address"<?php endif; ?>><?php echo $this->street; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->zip!=''): ?>
				<div class="zip">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['zip']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="postal-code"<?php endif; ?>><?php echo $this->zip; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->city!=''): ?>
				<div class="city">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['city']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="locality"<?php endif; ?>><?php echo $this->city; ?></span>
				</div> 
				<?php endif; ?>
				<?php if($this->country!=''): ?>
					<div class="country">
						<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['country']); ?></span>
						<span class="value"<?php if($this->se_friendly==1): ?> itemprop="region"<?php endif; ?>><?php echo $this->country; ?></span>
					</div> 
				<?php endif; ?>
			</div>
			
			<div class="training"<?php if($this->se_friendly==1): ?> itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address"<?php endif; ?>>
				<?php if($this->locationtraining!=''): ?>
				<div class="locationtraining">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['locationtraining']); ?></span>
					<span class="value"><?php echo $this->locationtraining; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->streettraining!=''): ?>
				<div class="streettraining">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['streettraining']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="street-address"<?php endif; ?>><?php echo $this->streettraining; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->ziptraining!=''): ?>
				<div class="zip">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['ziptraining']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="postal-code"<?php endif; ?>><?php echo $this->ziptraining; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->citytraining!=''): ?>
				<div class="city">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['citytraining']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="locality"<?php endif; ?>><?php echo $this->citytraining; ?></span>
				</div> 
				<?php endif; ?>
				<?php if($this->countrytraining!=''): ?>
					<div class="country">
						<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['countrytraining']); ?></span>
						<span class="value"<?php if($this->se_friendly==1): ?> itemprop="region"<?php endif; ?>><?php echo $this->countrytraining; ?></span>
					</div> 
				<?php endif; ?>
			</div>			
			
			
			<?php if($this->website!=''): ?>
				<div class="website">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['teamreader_basic']['website']); ?></span>
					<span class="value"><a href="<?php echo $this->website; ?>"<?php if($this->se_friendly==1): ?> itemprop="url"<?php endif; ?>><?php echo $this->website; ?></a></span>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
