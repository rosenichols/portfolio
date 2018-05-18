<?php

namespace Rose\Controller;

use Rose\Form\ContactForm;

/**
 * Contains contact form related functionality.
 */
class ContactController {

  use InjectableTrait;

  /**
   * Front page.
   */
  public function contactFormSubmit() {

    $form = new ContactForm($this->app['form.factory']);

    $form->build();
    $form->handleRequest($this->request);

    if ($form->isValid()) {

      // Store message.
      $data = $form->getData();

      $name = $data['name'];
      $subject = $data['subject'];
      $message = $data['message'];

      // @todo: send message.
    }

    return $this->app->redirect('/');
  }
}