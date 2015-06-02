<?php
/**
 * @file
 * Contains all the blocks for this site.
 */


/**
 * Implements hook_block_info().
 * @return type
 */
function rose_project_block_info() {

  $blocks['project_side_visit_site'] = array(
    'info' => t('Project sidebar: visit site'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_summary'] = array(
    'info' => t('Project side: summary'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_accreditation'] = array(
    'info' => t('Project side: accreditation'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_further_reading'] = array(
    'info' => t('Project side: further reading'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_contact'] = array(
    'info' => t('Project side: get in touch'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['projects'] = array(
    'info' => t('Project: Display project teasers'),
    'cache' => DRUPAL_NO_CACHE,
  );

  return $blocks;
}

/**
* Implements hook_block_view().
*/
function rose_project_block_view($delta = '') {

  $block = array();

  switch ($delta) {
    case 'project_side_visit_site':
      $block['subject'] = NULL;
      $block['content'] = rose_project_side_visit_site();
      break;
    case 'project_side_summary':
      $block['subject'] = NULL;
      $block['content'] = rose_project_side_summary();
      break;
    case 'project_side_accreditation':
      $block['subject'] = NULL;
      $block['content'] = rose_project_side_accreditation();
      break;
    case 'project_side_further_reading':
      $block['subject'] = NULL;
      $block['content'] = rose_project_side_further_reading();
      break;
    case 'project_side_contact':
      $block['subject'] = NULL;
      $block['content'] = rose_project_side_contact();
      break;
    case 'projects':
      $block['subject'] = NULL;
      $block['content'] = rose_project_generate_project_teasers();
      break;
  }

  return $block;
}

/**
* Block callback to generate project sidebar
*/
function rose_project_side_visit_site() {
  $nid = arg(1);
  $node = _rose_get_project_node($nid);

  if (!empty($node->field_project_visit_link['und'][0]['url'])) {
    // Prepare the URL.
    if (preg_match('#https?://#', $node->field_project_visit_link['und'][0]['url'])) {
      // It's a full URL.
      $url = $node->field_project_visit_link['und'][0]['url'];
    }
    else {
      // Probably internal.
      $url = '/' . $node->field_project_visit_link['und'][0]['url'];
    }

    return '<a href="' . $url . '" class="project-visit-site">' . $node->field_project_visit_link['und'][0]['title'] . '</a>';
  }

  return NULL;
}

/**
* Block callback to generate project sidebar
*/
function rose_project_side_summary() {
  $nid = arg(1);
  $node = _rose_get_project_node($nid);

  if (empty($node->field_project_intro)) {
    return NULL;
  }

  $render_array = array(
    'project_summary' => array(
      '#type' => 'container',
      '#attributes' => array(
        'class' => array(
          0 => 'project-sidebar',
          1 => 'summary'
        ),
      ),
      'heading' => array(
        '#prefix' => '<div class="heading">',
        '#markup' => '<h3>Summary</h3>',
        '#suffix' => '</div>'
      ),
      'content' => array(
        '#prefix' => '<div class="content">',
        '#markup' => $node->field_project_intro['und'][0]['safe_value'],
        '#suffix' => '</div>'
      ),
    ),
  );

  if (!empty($node->field_design_contrib)   ||
      !empty($node->field_frontend_contrib) ||
      !empty($node->field_backend_contrib)) {
    $contribs = array();
  }

  if (!empty($node->field_design_contrib)) {
    $contribs['design'] = array(
      'title' => 'Design',
      'field_value' => $node->field_design_contrib['und'][0]['value']
    );
  }

  if (!empty($node->field_frontend_contrib)) {
    $contribs['frontend'] = array(
      'title' => 'Front-end',
      'field_value' => $node->field_frontend_contrib['und'][0]['value']
    );
  }

  if (!empty($node->field_backend_contrib)) {
    $contribs['backend'] = array(
      'title' => 'Back-end',
      'field_value' => $node->field_backend_contrib['und'][0]['value']
    );
  }

  if (!empty($contribs)) {
    foreach ($contribs as $key => $value) {
      $info = _rose_project_get_contrib_info($value['field_value']);
      $render_array['project_summary'][$key . '_contrib'] = array(
        '#type' => 'container',
        '#attributes' => array(
          'class' => array(
            0 => 'contrib',
            1 => $info['class']
          ),
        ),
        'heading' => array(
          '#markup' => '<h4>' . $value['title'] . '</h4>',
        ),
        'content' => array(
          '#prefix' => '<div class="content">',
          '#markup' => $info['markup'],
          '#suffix' => '</div>'
        ),
      );
    }
  }

  return $render_array;
}

/**
* Block callback to generate project sidebar
*/
function rose_project_side_accreditation() {
  $nid = arg(1);
  $node = _rose_get_project_node($nid);

  if (empty($node->field_project_accreditation)) {
    return NULL;
  }

  $render_array = array(
    'project_reading' => array(
      '#type' => 'container',
      '#attributes' => array(
        'class' => array(
          0 => 'project-sidebar',
          1 => 'accreditation'
        ),
      ),
      'heading' => array(
        '#prefix' => '<div class="heading">',
        '#markup' => '<h3>Accreditation</h3>',
        '#suffix' => '</div>'
      ),
      'content' => array(
        '#prefix' => '<div class="content">',
        '#markup' => $node->field_project_accreditation['und'][0]['value'],
        '#suffix' => '</div>'
      ),
    ),
  );

  return $render_array;
}

/**
* Block callback to generate project sidebar
*/
function rose_project_side_further_reading() {
  $nid = arg(1);
  $node = _rose_get_project_node($nid);

  if (empty($node->field_project_reading)) {
    return NULL;
  }

  $render_array = array(
    'project_reading' => array(
      '#type' => 'container',
      '#attributes' => array(
        'class' => array(
          0 => 'project-sidebar',
          1 => 'further-reading'
        ),
      ),
      'heading' => array(
        '#prefix' => '<div class="heading">',
        '#markup' => '<h3>Further reading</h3>',
        '#suffix' => '</div>'
      ),
      'content' => array(
        '#prefix' => '<div class="content">',
        '#markup' => $node->field_project_reading['und'][0]['safe_value'],
        '#suffix' => '</div>'
      ),
    ),
  );

  return $render_array;
}

/**
* Block callback to generate project sidebar
*/
function rose_project_side_contact() {

  $nid = arg(1);
  $node = _rose_get_project_node($nid);

  if (empty($node)) {
    return NULL;
  }

  $render_array = _rose_build_project_side_markup('Get in touch', '<a href="/contact?sub=' . strtolower(drupal_clean_css_identifier($node->title)) . '">Contact me about this project</a>');

  return $render_array;
}

/**
* Block callback to generate project teasers.
*/
function rose_project_generate_project_teasers() {

  $render_array = array();

  $vocab = taxonomy_vocabulary_machine_name_load('projects');

  $terms = entity_load('taxonomy_term', FALSE, array('vid' => $vocab->vid));

  foreach ($terms as $key => $value) {
    // Get all project nodes with that term.

    $query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'project')
    ->fieldCondition('field_project_time', 'target_id', $value->tid);

    $result = $query->execute();
    if ($result) {
      $project_nids = array_keys($result['node']);

      $render_array[$value->tid] = array(
        '#type' => 'container',
        '#attributes' => array(
          'class' => array('tid-wrapper'),
        ),
      );
      $render_array[$value->tid]['group_header'] = array(
        '#prefix' => '<div class="portfolio-group-heading">',
        '#markup' => '<h3>' . $value->name . '</h3>' . $value->field_time_subheading['und'][0]['safe_value'],
        '#suffix' => '</div>'
      );

      $n = 0;
      $l = 0;
      foreach ($project_nids as $p_key => $p_nid) {
        if ($n == 0) {
          $render_array[$value->tid]['line_' . $l] = array(
            '#type' => 'container',
            '#attributes' => array(
              'class' => array(
                'line',
                'clearfix'
              ),
            )
          );
        }
        $render_array[$value->tid]['line_'. $l][] = node_view(node_load($p_nid), 'teaser');
        if ($n == 3) {
          $n = 0;
          $l++;
        }
        else {
          $n++;
        }
      }
    }
  }
  return array_reverse($render_array);
}


/**
 * Fetch and statically cache the project for use later, maybe.
 */
function _rose_get_project_node($nid) {
  static $project_node;

  if (!empty($project_node)) {
    return $project_node;
  }

  $project_node = node_load($nid);
  return $project_node;
}

/**
* Helper.
*/
function _rose_build_project_side_markup($title, $content) {
  $render_array = array(
    'project_reading' => array(
      '#type' => 'container',
      '#attributes' => array(
        'class' => array(
          0 => 'project-sidebar',
          1 => 'accreditation'
        ),
      ),
      'heading' => array(
        '#prefix' => '<div class="heading">',
        '#markup' => '<h3>' . $title . '</h3>',
        '#suffix' => '</div>'
      ),
      'content' => array(
        '#prefix' => '<div class="content">',
        '#markup' => $content,
        '#suffix' => '</div>'
      ),
    ),
  );

  return $render_array;
}

/**
* Helper.
*/
function _rose_project_get_contrib_info($value) {

  $info = array();

  if ($value == 'no') {
    $info['class'] = 'no-contrib';
    $info['markup'] = 'No contribution';
  }
  if ($value == 'yes') {
    $info['class'] = 'some-contrib';
    $info['markup'] = 'Joint contributor';
  }
  if ($value == 'main') {
    $info['class'] = 'main-contrib';
    $info['markup'] = 'Sole or main contributor';
  }

  return $info;
}

