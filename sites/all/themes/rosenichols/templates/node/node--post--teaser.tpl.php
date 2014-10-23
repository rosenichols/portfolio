<article<?php print $attributes; ?>>

  <?php print render($content['field_post_portrait_img']); ?>

  <div<?php print $content_attributes; ?>>

    <?php if (!$page && $title) { ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php } ?>
    
    <span class="post-author"><a href="/blog/author/<?php print $node->name; ?>"><?php print $node->name; ?></a></span>

    <?php print render($content['body']); ?>

    <?php if ($display_submitted) { ?>
      <span class="post-date"><?php print format_date($node->created, 'blog'); ?></span>

      <?php
      if (isset($node->field_post_tags['und'])) {

        echo '<span class="post-tags">';

        $tags = array();
        foreach ($node->field_post_tags['und'] as $key => $value) {
          $tags[] = $value['tid'];
        }

        $tag_nodes = taxonomy_term_load_multiple($tags);

        $tag_links = array();
        foreach ($tag_nodes as $key => $value) {
          print l($value->name,'blog/tags' . $value->tid);
        }

        echo '</span>';
      }
      ?>
      
    <?php } ?>

  </div>
  
</article>