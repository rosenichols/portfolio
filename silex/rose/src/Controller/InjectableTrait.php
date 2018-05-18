<?php

namespace Rose\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Twig_Environment;

trait InjectableTrait {

  /** @var Application */
  protected $app;

  /** @var Request */
  protected $request;

  /** @var SessionInterface */
  protected $session;

  /** @var FlashBag */
  protected $flashMessage;

  /** @var Twig_Environment */
  protected $twig;

  protected $formFactory;

  /**
   * @param Application $app
   * @return static;
   */
  public static function create(Application $app) {

    $controller = new static();

    $controller->setApp($app);
    $controller->setRequest($app['request_stack']->getCurrentRequest());
    $controller->setSession($app['session']);
    $controller->setTwig($app['twig']);
    $controller->setFormFactory($app['form.factory']);

    return $controller;
  }

  public function setApp($app) {
    $this->app = $app;
  }

  public function setRequest($request) {
    $this->request = $request;
    $this->post = $request->request;
    $this->get = $request->query;
    $this->files = $request->files;
  }

  public function setSession($session) {
    $this->session = $session;
    $this->flashMessage = $session->getFlashBag();
  }

  public function setTwig($twig) {
    $this->twig = $twig;
  }

  public function setFormFactory($form_factory) {
    $this->formFactory = $form_factory;
  }
}