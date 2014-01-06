<!-- indexer::stop --> 
<!-- 
 
	"Club reader - Basics" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?><?php if($this->club_found==0): ?> noclub<?php endif; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasClubid): ?>
		<?php if ($this->club_found==1): ?>
			<?php if($this->logo!=''): ?>
				<div class="clublogo">
				<img src="<?php echo($this->logo); ?>">
				</div>
			<?php endif; ?>
			
			<div class="club"<?php if($this->se_friendly==1): ?> itemscope itemtype="http://data-vocabulary.org/Organization"<?php endif; ?>
				
				<div class="name">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['name']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="name"<?php endif;?>><?php echo $this->name; ?></span>
				
				</div> 

				<div class="shortname">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['shortname']); ?></span>
					<span class="value"><?php echo $this->shortname; ?></span>
				</div>
			</div>
			
			<div class="adress"<?php if($this->se_friendly==1): ?> itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address"<?php endif; ?>>
				<?php if($this->street!=''): ?>
				<div class="street">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['street']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="street-address"<?php endif; ?>><?php echo $this->street; ?></span>
				</div> 
				<?php endif; ?>
				<?php if($this->zip!=''): ?>
				<div class="zip">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['zip']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="postal-code"<?php endif; ?>><?php echo $this->zip; ?></span>
				</div> 
				<?php endif; ?>
				<?php if($this->city!=''): ?>
				<div class="city">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['city']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="locality"<?php endif; ?>><?php echo $this->city; ?></span>
				</div> 
				<?php endif; ?>
				<?php if($this->country!=''): ?>
				<div class="country">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['country']); ?></span>
					<span class="value"<?php if($this->se_friendly==1): ?> itemprop="country"<?php endif; ?>><?php echo $this->country; ?></span>
				</div> 
				<?php endif; ?>
				<?php if($this->phone!=''): ?>
				<div class="phone">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['phone']); ?></span>
					<span class="value"><?php echo $this->phone; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->fax!=''): ?>
				<div class="fax">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['fax']); ?></span>
					<span class="value"><?php echo $this->fax; ?></span>
				</div>
				<?php endif; ?>
				<?php if($this->mail!=''): ?>
				<div class="mail">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['mail']); ?></span>
					<span class="value"><?php echo $this->mail; ?></span>
				</div>
				<?php endif; ?>
				
				<?php endif; ?>
			</div>
				<?php if($this->website!=''): ?>
				<div class="website">
					<span name="label"><?php echo($GLOBALS['TL_LANG']['league-manager']['clubreader_basic']['website']); ?></span>
					<span class="value"><a href="<?php echo $this->website; ?>"<?php if($this->se_friendly==1): ?> itemprop="url"<?php endif; ?>><?php echo $this->website; ?></a></span>
				</div>
				<?php endif; ?>
		<?php endif; ?>



