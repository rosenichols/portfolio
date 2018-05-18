<?php

namespace Rose\Form;

use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormInterface;

/**
 * @method createView()
 * @method handleRequest(\Symfony\Component\HttpFoundation\Request $request)
 * @method isValid()
 * @method getData()
 * @method get(string $name)
 * @method getErrors(boolean $deep = false, boolean $flatten = true)
 */
class Form {

  /** @var FormFactory $formFactory */
  protected $formFactory;

  /** @var FormInterface $form */
  protected $form;

  public function __construct($formFactory) {
    $this->formFactory = $formFactory;
  }

  /**
   * Pass any other method call onto the form object we're wrapping.
   */
  public function __call($name, $args) {
    return call_user_func_array([$this->form, $name], $args);
  }
}
