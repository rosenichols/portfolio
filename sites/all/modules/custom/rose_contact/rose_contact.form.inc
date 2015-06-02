<?php
/**
 * @file
 * Contains all the form stuff for this site.
 */

/**
 * Implements hook_form_alter().
 * @param array $form
 * @param array $form_state
 * @param string $form_id
 */
function rose_conatct_form_alter(&$form, &$form_state, $form_id) {

	if ($form_id == 'rose_contact_message_form') {

		honeypot_add_form_protection($form, $form_state, array('honeypot', 'time_restriction'));

    //$form['name_wrapper']['name']['#attributes']['placeholder'] =  array('placeholder' => '. . .');
    //$form['submitted']['email_address']['#attributes']['placeholder'] =  array('placeholder' => 'Your email address');
    //$form['message_wrapper']['message']['#attributes']['placeholder'] =  array('placeholder' => '. . .');

	}

}
