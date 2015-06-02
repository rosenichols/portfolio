<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function rosenichols_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  rosenichols_preprocess_html($variables, $hook);
  rosenichols_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function rosenichols_preprocess_page(&$variables, $hook) {

  // If we're on a node page...
  if (!empty($variables['node']) && $node = $variables['node']) {
    // If we're on a project node...
    if ($node->type == 'project') {
      // Add a page class of the project name.
      $variables['classes_array'][] = 'project';

      if ($node->title == '157 Group') {
        // Can't add it to the class array because it starts with a number.
        $title = 'Group 157';
      }
      else {
        $title = $node->title;
      }
      $variables['classes_array'][] = strtolower(drupal_clean_css_identifier($title));
    }
    if ($node->type == 'page') {
      if (!empty($node->field_promo)) {
        // Load up the node.
        $promo_node = node_load($node->field_promo['und'][0]['target_id']);
        $promo_colour = $promo_node->field_colour['und'][0]['value'];
        // Load up the view of the node.
        $promo_node_view = node_view($promo_node);
        // Pass the markup for the node to the promo region.
        $variables['page']['promo'] = array(
          '#markup' => drupal_render($promo_node_view),
          '#colour' => $promo_colour,
          '#region' => 'promo',
          '#theme_wrappers' => array(
            '0' => 'region'
          ),
          '#weight' => 0
        );

        $variables['classes_array'][] = 'has-promo';
        if (!empty($node->field_promo['und']['entity']->field_title_lines)) {
          $lines = $node->field_promo['und']['entity']->field_title_lines[LANGUAGE_NONE][0]['value'];
          if ($lines == '2') {
            $variables['classes_array'][] = 'two-line-promo';
          }
          else {
            $variables['classes_array'][] = 'plus-line-promo';
          }
        }
      }
      if (!empty($node->field_banner)) {
        $variables['classes_array'][] = 'has-banner';
      }
    }
    // If there's a banner image present...
    if (!empty($node->field_banner)) {
      // Load up the node.
      $banner_node = node_load($node->field_banner[LANGUAGE_NONE][0]['target_id']);
      // Load up the view of the node.
      $banner_node_view = node_view($banner_node);
      // Pass the markup for the node through.
      $variables['page']['banner']['banner'] = array(
        '#markup' => drupal_render($banner_node_view),
        '#weight' => 1
      );
      // If there's a secondary title present...
      if (!empty($node->field_title)) {

        $line_class = '';
        // Get the number of lines
        if (!empty($node->field_title_lines)) {
          if ($node->field_title_lines['und'][0]['value'] == '2') {
            $line_class = 'two-lines';
          }
        }

        $title_field = field_view_field('node', $node, 'field_title', $display = array(
          'label' => 'hidden',
          'view_mode' => 'full')
        );

        // Bump the weight to 2.
        $title_field['#weight'] = 2;

        // Add wrapper so the field isn't just floating around.
        $title_field['#prefix'] = '<div class="node-page-title ' . $line_class . '">';
        $title_field['#suffix'] = '</div>';
        $variables['page']['banner']['title'] = $title_field;
      }
    }
  }

  // Pass through either the link or nothing.
  $variables['contact_link'] = _rosenichols_generate_contact_link();
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function rosenichols_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // rosenichols_preprocess_node_page() or rosenichols_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */


/**
 * Implements hook_preprocess_node().
 *
 * @param array $variables
 * @param type $hook
 */
function rosenichols_preprocess_node(&$variables, $hook) {

  $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '__' . $variables['view_mode'];

  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }

  if ($variables['type'] == 'promo') {
    if (!empty($variables['field_title_lines'])) {
      $lines = $variables['field_title_lines'][0]['value'];
      if ($lines == '2') {
        $variables['classes_array'][] = 'two-lines';
      }
      elseif ($lines > '2') {
        $variables['classes_array'][] = 'plus-lines';
      }
    }
  }
}

/**
 * Implements hook_preprocess_node().
 *
 * @param array $variables
 * @param type $hook
 */
function rosenichols_preprocess_node_banner(&$variables, $hook) {

  if (!empty($variables['field_banner_title']) || !empty($variables['field_banner_subtitle'])) {
    $variables['classes_array'][] = 'has-banner-text';
  }
}


/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function rosenichols_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
function rosenichols_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == 'promo' && !empty($variables['elements']['#colour'])) {
    if ($colour = $variables['elements']['#colour']) {
      $variables['attributes_array']['style'][] = 'background-color: #' . $colour . ';';
    }
  }
}

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function rosenichols_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}

  // if (strpos($variables['block_html_id'], 'block-rose-social')) {



  // }
}


function rosenichols_form_element_label($variables) {

  $element = $variables ['element'];
  // This is also used in the installer, pre-database setup.
  $t = get_t();

  // If title and required marker are both empty, output no label.
  if ((!isset($element ['#title']) || $element ['#title'] === '') && empty($element ['#required'])) {
    return '';
  }

  // If the element is required, a required marker is appended to the label.
  $required = !empty($element ['#required']) ? theme('form_required_marker', array('element' => $element)) : '';

  $title = filter_xss_admin($element ['#title']);

  $attributes = array();
  // Style the label as class option to display inline with the element.
  if ($element ['#title_display'] == 'after') {
    $attributes ['class'] = 'option';
  }
  // Show label only to screen readers to avoid disruption in visual flows.
  elseif ($element ['#title_display'] == 'invisible') {
    $attributes ['class'] = 'element-invisible';
  }

  if (!empty($element ['#id'])) {
    $attributes ['for'] = $element ['#id'];
  }

  // Custom for Rose contact form.
  if ($variables['element']['#array_parents'][0] == 'name_wrapper') {
    return ' <label' . drupal_attributes($attributes) . '>' . $t('!title !required', array('!title' => $title, '!required' => $required)) . "<span class=\"extra\">Required so I know who you are</span></label>\n";
  }

  // Custom for Rose contact form.
  if ($variables['element']['#array_parents'][0] == 'email_wrapper') {
    return ' <label' . drupal_attributes($attributes) . '>' . $t('!title !required', array('!title' => $title, '!required' => $required)) . "<span class=\"extra\">Should you wish to provide it</span></label>\n";
  }

  // The leading whitespace helps visually separate fields from inline labels.
  return ' <label' . drupal_attributes($attributes) . '>' . $t('!title !required', array('!title' => $title, '!required' => $required)) . "</label>\n";
}


function _rosenichols_generate_contact_link() {
  // If the path is 'contact'.
  if (drupal_get_path_alias($_GET['q']) == 'contact') {
    return '';
  }
  else {
    return '<a href="/contact">Contact</a> |';
  }

}

