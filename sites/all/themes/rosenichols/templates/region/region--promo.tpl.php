<?php
/**
 * @file
 * Returns HTML for a region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728112
 */
?>
<?php if ($content): ?>
  <section class="<?php print $classes; ?>" <?php print $attributes; ?>>
  	<div>
	    <?php print $content; ?>
	  </div>
  </section>
<?php endif; ?>
