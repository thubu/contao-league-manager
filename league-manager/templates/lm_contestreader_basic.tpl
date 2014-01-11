<!-- indexer::stop --> 
<!-- 
 
	"Contest reader - Basics" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue --> 
<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasContestid): ?>
		<div class="contest">
			<div class="contestname"><?php echo $this->contest; ?></div>
			<div class="mode"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['modus']; ?> <?php echo $this->mode; ?></div>
			<div class="startdate"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['start']; ?> <?php echo $this->date_start; ?></div>
			<div class="enddate"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['end']; ?> <?php echo $this->date_end; ?></div>
			
			<?php if ($this->place_ascent_comment): ?>
			<div class="info"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['info']; ?></div>
			<?php endif; ?>
			<?php if ($this->place_ascent_comment): ?>
			<div class="comment"> <?php echo $this->place_ascent_comment; ?></div>
			<?php endif; ?>
			<?php if ($this->place_ascentrelegation_comment): ?>
			<div class="comment"> <?php echo $this->place_ascentrelegation_comment; ?></div>
			<?php endif; ?>			
			<?php if ($this->place_decentrelegation_comment): ?>
			<div class="comment"> <?php echo $this->place_decentrelegation_comment; ?></div>
			<?php endif; ?>			
			<?php if ($this->place_decent_comment): ?>
			<div class="dcomment"> <?php echo $this->place_decent_comment; ?></div>
			<?php endif; ?>
			<?php if ($this->place_specialplace_comment): ?>
			<div class="comment"> <?php echo $this->place_specialplace_comment; ?></div>
			<?php endif; ?>
			<?php if ($this->playingtime): ?>
			<div class="playingtime"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['playingtime']; ?> <?php echo $this->playingtime; ?></div>
			<?php endif; ?>
			<?php if ($this->playingperiods): ?>
			<div class="playingperiods"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['playingperiods']; ?> <?php echo $this->playingperiods; ?></div>
			<?php endif; ?>
			<?php if ($this->halftimebreak): ?>
			<div class="halftimebreak"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['halftimebreak']; ?> <?php echo $this->halftimebreak; ?></div>
			<?php endif; ?>
			<?php if ($this->overtime): ?>
			<div class="overtime"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['overtime']; ?></div>
			<?php endif; ?>
			<?php if ($this->overtime_time): ?>
			<div class="overtime_time"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['overtime_time']; ?> <?php echo $this->overtime_time; ?></div>
			<?php endif; ?>
			<?php if ($this->overtime_periods): ?>
			<div class="overtime_periods"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['overtime_periods']; ?> <?php echo $this->overtime_periods; ?></div>
			<?php endif; ?>
			<?php if ($this->overtime_break): ?>
			<div class="overtime_break"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['overtime_break']; ?> <?php echo $this->overtime_break; ?></div>
			<?php endif; ?>
			<?php if ($this->overtime_comment): ?>
			<div class="overtime_comment"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['overtime_comment']; ?> <?php echo $this->overtime_comment; ?></div>
			<?php endif; ?>
			<?php if ($this->penalty_shootout): ?>
			<div class="penalty"><?php echo $GLOBALS['TL_LANG']['league-manager']['contestreader_basic']['penalty_shootout']; ?></div>
			<?php endif; ?>

		</div>
	<?php endif; ?>
</div>