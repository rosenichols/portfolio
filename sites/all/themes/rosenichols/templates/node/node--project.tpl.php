<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<?php
  hide($content['comments']);
  hide($content['links']);
  hide($content['field_project_visit_link']);
  hide($content['field_project_accreditation']);
  hide($content['field_project_reading']);
  hide($content['field_company_info']);
  hide($content['field_project_banner']);
  hide($content['field_project_intro']);

  hide($content['field_design_contrib']);
  hide($content['field_frontend_contrib']);
  hide($content['field_backend_contrib']);
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php print render($content['field_project_banner']); ?>
  <?php print render($content['field_company_info']); ?>

  <?php print render($content); ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
