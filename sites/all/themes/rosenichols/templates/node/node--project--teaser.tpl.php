<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>

      <a href="<?php print drupal_get_path_alias('node/' . $node->nid); ?>" class="project-teaser-img-wrap">
        <?php print render($content['field_project_image']); ?>
        <span class="project-teaser-title">
          <?php print $title; ?>
        </span>
      </a>
  <?php endif; ?>

  <?php print render($content['field_project_intro']); ?>
</article>
