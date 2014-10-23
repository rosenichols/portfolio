<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php
if (is_numeric($title)) {
	$term = taxonomy_term_load($title);
	$title = $term->name;
}
?>

<?php if (!empty($title)): ?>
	<div class="group-heading">
	  <h3><?php print $title; ?></h3>
	  <?php if (!empty($term->field_time_subheading['und'][0]['safe_value'])) { ?>
	  	<span><?php print $term->field_time_subheading['und'][0]['safe_value']; ?></span>
	  <?php } ?>
	  <div class="bar-end left"><span class="element-invisible">Bar end left image</span></div>
	  <div class="bar-end right"><span class="element-invisible">Bar end right image</span></div>
  </div>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
