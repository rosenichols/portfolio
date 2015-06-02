<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<?php hide($content['field_include_contact']); ?>
<?php hide($content['field_promo_title']); ?>
<?php hide($content['field_title_lines']); ?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($content['field_promo_title']): ?>
    <header>
      <?php print render($content['field_promo_title']); ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_colour']);
    print render($content);
    print render($contact_form);
  ?>


</article>
