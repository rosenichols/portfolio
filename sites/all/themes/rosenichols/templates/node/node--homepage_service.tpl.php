<article<?php print $attributes; ?>>

  <?php //dpm($content); ?>

  <div<?php print $content_attributes; ?>>
  <?php print render($content['field_home_service_image']); ?>
    <span<?php print $title_attributes; ?>><?php print $title ?></span>
    <?php print render($content['body']); ?>
    <?php print render($content['field_home_service_cta']); ?>
  </div>
  
</article>