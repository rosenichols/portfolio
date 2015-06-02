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

  <?php print render($content['field_banner_image']); ?>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header class="banner-header">
      <div>
        <div class="content">
          <?php print render($content['field_banner_title']); ?>
          <?php print render($content['field_banner_subtitle']); ?>
        </div>
      </div>
    </header>
  <?php endif; ?>

</article>
