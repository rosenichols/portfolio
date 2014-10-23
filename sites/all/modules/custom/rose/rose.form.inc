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
function rose_form_alter(&$form, &$form_state, $form_id) {

	if ($form_id == 'rose_message_form') {
		
		honeypot_add_form_protection($form, $form_state, array('honeypot', 'time_restriction'));

		if (isset($_GET['sub']) && $_GET['sub'] == 'references') {
			$form['message_wrapper']['message_intro']['#markup'] = '<span class="message-intro">Could I perchance</span>';
			$form['message_wrapper']['message']['#value'] = 'enquire about your references please. Email me back on . . .';
			$form['message_wrapper']['message']['#attributes']['style'][] = 'text-indent: 8.125em;';
		}
		elseif (isset($_GET['sub']) && $_GET['sub'] == 'nice-chat') {
			$form['message_wrapper']['message_intro']['#markup'] = '<span class="message-intro">Let\'s have a lovely chat about</span>';
			$form['message_wrapper']['message']['#attributes']['style'][] = '	text-indent: 13.25em;';
		}

    $form['name_wrapper']['name']['#attributes']['placeholder'] =  array('placeholder' => '. . .');
    //$form['submitted']['email_address']['#attributes']['placeholder'] =  array('placeholder' => 'Your email address');
    $form['message_wrapper']['message']['#attributes']['placeholder'] =  array('placeholder' => '. . .');

    //dpm($form);
	}

}