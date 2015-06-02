<?php
/**
 * @file
 * rose_project.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function rose_project_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_project_aspects|node|project|form';
  $field_group->group_name = 'group_project_aspects';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'project';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Aspects',
    'weight' => '6',
    'children' => array(
      0 => 'field_project_content',
      1 => 'field_project_design',
      2 => 'field_project_development',
      3 => 'field_project_outcomes',
      4 => 'field_project_ux',
      5 => 'field_project_trivia',
    ),
    'format_type' => 'tabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => 'group-project-aspects field-group-tabs',
      ),
    ),
  );
  $export['group_project_aspects|node|project|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_project_contribs|node|project|form';
  $field_group->group_name = 'group_project_contribs';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'project';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Contributions',
    'weight' => '8',
    'children' => array(
      0 => 'field_frontend_contrib',
      1 => 'field_backend_contrib',
      2 => 'field_design_contrib',
    ),
    'format_type' => 'tabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => 'group-project-contribs field-group-tabs',
      ),
    ),
  );
  $export['group_project_contribs|node|project|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_project_sidebar|node|project|form';
  $field_group->group_name = 'group_project_sidebar';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'project';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Sidebar',
    'weight' => '7',
    'children' => array(
      0 => 'field_project_accreditation',
      1 => 'field_project_reading',
      2 => 'field_project_visit_link',
    ),
    'format_type' => 'tabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => 'group-project-sidebar field-group-tabs',
      ),
    ),
  );
  $export['group_project_sidebar|node|project|form'] = $field_group;

  return $export;
}
