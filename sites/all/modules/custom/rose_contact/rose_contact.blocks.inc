<?php
/**
 * @file
 * Contains all the blocks for this site.
 */


/**
 * Implements hook_block_info().
 * @return type
 */
function rose_contact_block_info() {
  $blocks['contact_form'] = array(
    'info' => t('Contact form for this site'),
    'cache' => DRUPAL_NO_CACHE,
  );

  return $blocks;
}

/**
* Implements hook_block_view().
*/
function rose_contact_block_view($delta = '') {

  $block = array();

  switch ($delta) {
    case 'contact_form':
      $block['subject'] = NULL;
      $form = drupal_get_form('rose_contact_message_form');
      $block['content'] = drupal_render($form);
      break;
  }

  return $block;
}
