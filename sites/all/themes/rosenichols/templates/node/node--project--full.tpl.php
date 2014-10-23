<article<?php print $attributes; ?>>

  <div<?php print $content_attributes; ?>>
  	<?php print render($content['body']); ?>
	  <?php // dpm($content); ?>
	  <?php print render($content['field_project_design']); ?>
	  <?php print render($content['field_project_development']); ?>
	  <?php print render($content['field_project_content']); ?>
	  <?php print render($content['field_project_ux']); ?>
	  <?php print render($content['field_project_outcomes']); ?>
	</div>

</article>