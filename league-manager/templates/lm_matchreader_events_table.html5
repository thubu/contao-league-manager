<!-- indexer::stop --> 
<!-- 
 
	"Match reader - Events" is part of the Contao League Manager extension Copyright (C) 2011 by Andreas Koob
	Visit http://contao-league-manager.com or http://contao-league-manager.de for more information.
	
--> 
<!-- indexer::continue -->
<div class="<?php echo $this->class; ?>"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
	<?php if ($this->headline): ?>
		<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
	<?php endif; ?>
	<?php if($this->hasMatchid): ?>
		<table>
		<?php if(count($this->events)>0): ?>
			<?php foreach ($this->events as $event):?>
				<tr class="event">
					<td class="masterimage"><?php if($event['master_picture']): ?><img src="<?php echo($event['master_picture']) ?>" /><?php else: ?>&nbsp;<?php endif; ?></td>
					<td class="text">
						<span class="eventtext"><?php echo($event['text']); ?></span><br />
						<span class="addtext"><?php echo($event['add_text']); ?></span>
					</td>
					<td class="image"><?php if($event['picture']): ?><img src="<?php echo($event['picture']) ?>" /><?php else: ?>&nbsp;<?php endif; ?></td>
					</tr>
			<?php endforeach; ?>
		<?php endif; ?>
		</table>
	<?php endif; ?>

</div>
