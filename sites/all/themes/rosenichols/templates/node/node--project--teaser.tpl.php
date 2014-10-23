<article<?php print $attributes; ?>>

  <div<?php print $content_attributes; ?>>

    <?php print render($content['field_project_image']); ?>

    <h2<?php print $title_attributes; ?>><?php print $title ?></h2>

  </div>

  <?php print render($content['field_project_intro']); ?>
  
</article>