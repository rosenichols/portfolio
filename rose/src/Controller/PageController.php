<?php

namespace Rose\Controller;

use Rose\Form\ContactForm;
use Rose\Form\LoginForm;
use Doctrine\DBAL\Connection;

/**
 * Contains page related functionality.
 */
class PageController {

  use InjectableTrait;

  /**
   * Front page.
   */
  public function viewFrontPage() {

    $form = new ContactForm($this->formFactory);
    $form->build();

    $contact_form = $this->twig->render('form/contact-form.twig', [
      'form' => $form->createView(),
    ]);

    return $this->twig->render('page/page-front.twig', [
      'menu' => $this->menu(),
      'contact_form' => $contact_form
    ]);
  }

  /**
   * Front page.
   */
  public function menu() {

    $menu = [
      'About' => '#about',
      'Contact' => '#contact'
    ];

    return $menu;
  }

  /**
   * Styleguide.
   */
  public function viewStyleguide() {
    return $this->twig->render('page/page-styleguide.twig');
  }
}
