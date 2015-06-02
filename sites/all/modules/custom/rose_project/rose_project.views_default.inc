<?php
/**
 * @file
 * project.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function rose_project_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'projects';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Projects';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'field_project_time',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Entity Reference: Referenced Entity */
  $handler->display->display_options['relationships']['field_project_time_target_id']['id'] = 'field_project_time_target_id';
  $handler->display->display_options['relationships']['field_project_time_target_id']['table'] = 'field_data_field_project_time';
  $handler->display->display_options['relationships']['field_project_time_target_id']['field'] = 'field_project_time_target_id';
  /* Field: Taxonomy term: Subheading */
  $handler->display->display_options['fields']['field_time_subheading']['id'] = 'field_time_subheading';
  $handler->display->display_options['fields']['field_time_subheading']['table'] = 'field_data_field_time_subheading';
  $handler->display->display_options['fields']['field_time_subheading']['field'] = 'field_time_subheading';
  $handler->display->display_options['fields']['field_time_subheading']['relationship'] = 'field_project_time_target_id';
  $handler->display->display_options['fields']['field_time_subheading']['label'] = '';
  $handler->display->display_options['fields']['field_time_subheading']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_time_subheading']['alter']['text'] = '[field_time_subheading-value]';
  $handler->display->display_options['fields']['field_time_subheading']['element_label_colon'] = FALSE;
  /* Field: Content: Time */
  $handler->display->display_options['fields']['field_project_time']['id'] = 'field_project_time';
  $handler->display->display_options['fields']['field_project_time']['table'] = 'field_data_field_project_time';
  $handler->display->display_options['fields']['field_project_time']['field'] = 'field_project_time';
  $handler->display->display_options['fields']['field_project_time']['label'] = '';
  $handler->display->display_options['fields']['field_project_time']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_project_time']['alter']['text'] = '[field_project_time][field_time_subheading]';
  $handler->display->display_options['fields']['field_project_time']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_project_time']['type'] = 'entityreference_entity_id';
  $handler->display->display_options['fields']['field_project_time']['settings'] = array(
    'link' => 0,
  );
  /* Field: Content: Thumbnail */
  $handler->display->display_options['fields']['field_project_image']['id'] = 'field_project_image';
  $handler->display->display_options['fields']['field_project_image']['table'] = 'field_data_field_project_image';
  $handler->display->display_options['fields']['field_project_image']['field'] = 'field_project_image';
  $handler->display->display_options['fields']['field_project_image']['label'] = '';
  $handler->display->display_options['fields']['field_project_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_project_image']['alter']['text'] = '<div class="project-image-title-wrapper">[field_project_image]';
  $handler->display->display_options['fields']['field_project_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_project_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_project_image']['settings'] = array(
    'image_style' => '',
    'image_link' => 'content',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="project-image-title-wrapper">
<div class="views-field views-field-field-project-image>[field_project_image]</div>
<div class="views-field views-field-title">[title]</div>
</div>';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Field: Content: Brief intro */
  $handler->display->display_options['fields']['field_project_intro']['id'] = 'field_project_intro';
  $handler->display->display_options['fields']['field_project_intro']['table'] = 'field_data_field_project_intro';
  $handler->display->display_options['fields']['field_project_intro']['field'] = 'field_project_intro';
  $handler->display->display_options['fields']['field_project_intro']['label'] = '';
  $handler->display->display_options['fields']['field_project_intro']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'project' => 'project',
  );

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'projects');
  $export['projects'] = $view;

  return $export;
}
