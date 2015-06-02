<?php


/**
 * Callback for contact
 */
function rose_contact_message_form($form, &$form_state) {

  // build the contact form here

  $form_state['rebuild'] = FALSE;

  $form['name_wrapper'] = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => array(
        'name-wrapper'
      ),
    )
  );

  $form['name_wrapper']['name'] = array(
    '#type' => 'textfield',
    '#title' => t('Your name'),
    '#default_value' => isset($values['name']) ? $values['name'] : NULL,
    '#required' => TRUE,
  );

  $form['email_wrapper'] = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => array(
        'email-wrapper'
      ),
    )
  );

  $form['email_wrapper']['email'] = array(
    '#type' => 'textfield',
    '#title' => t('Return email'),
    '#default_value' => isset($values['email']) ? $values['email'] : NULL,
    '#required' => FALSE,
  );

  $form['message_wrapper'] = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => array(
        'message-wrapper'
      ),
    )
  );

  $form['message_wrapper']['message'] = array(
    '#type' => 'textarea',
    '#title' => t('Message'),
    '#default_value' => isset($values['message']) ? $values['message'] : NULL,
    '#rows' => '2',
    '#required' => TRUE,
  );



  $form['submit_wrapper'] = array(
    '#type' => 'container',
    '#attributes' => array(
      'class' => array(
        'submit-wrapper'
      ),
    )
  );

  // Submit
  $form['submit_wrapper']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Send message'),
  );

  return $form;

}


/**
 * @TODO - write some validation
 */
function rose_contact_message_form_validate($form, &$form_state) {

  // validate the input here

  // if ($form_state['values']['screen_prompt'] == '0' && $form_state['values']['send_email'] == '0') {
  //   form_set_error('', t('You must select at least one method for this message'));
  // }

}


function rose_contact_message_form_submit($form, &$form_state) {

  // create a new message
  $form_state['rebuild'] = FALSE;

  //dpm($form_state);

  global $user;

  $node = new stdClass();
  $node->type = 'message';
  node_object_prepare($node);
  $node->title = 'Message from ' . $form_state['values']['name'];
  $node->uid = $user->uid;
  $node->language = LANGUAGE_NONE;
  $node->field_message_from['und'][0]['value'] = $form_state['values']['name'];

  $node->body['und'][0]['value'] = $form_state['values']['message'];
  $node->status = 1;

  $node = node_submit($node);
  node_save($node);

  drupal_set_message("Thanks for your message!");

  drupal_mail('rose_contact', 'contact_form', 'rose@rosenichols.co.uk', language_default(), array('body' => $form_state['values']['message'], 'subject' => 'Contact form message from ' . $form_state['values']['name']), NULL, TRUE);

}
