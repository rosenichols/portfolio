<?php

/**
 * @file
 * Routing.
 */

use Rose\Controller\PageController;
use Rose\Controller\ContactController;

include '../bootstrap.php';

/*
 * Set up controllers as lightweight services. This lets us use DI with them.
 * See: http://silex.sensiolabs.org/doc/providers/service_controller.html
 */

$app['controller.page'] = function($app) {
  return PageController::create($app);
};

$app['controller.contact'] = function($app) {
  return ContactController::create($app);
};

$app->get('/', function () use ($app) {
  return $app['controller.page']->viewFrontPage($app['form.factory']);
});

$app->post('/contact', function () use ($app) {
  return $app['controller.contact']->contactFormSubmit();
});

// Admin.
$app->get('/admin', function () use ($app) {
  return $app['controller.page']->viewLoginPage();
});

$app->get('/admin/messages', function () use ($app) {
  return $app['controller.page']->viewMessagesPage();
});

// Styleguide.
$app->get('/app/styleguide', function () use ($app) {
  return $app['controller.page']->viewStyleguide();
});

// Catch errors:
$app->error(function (\Exception $e, $code) use ($app) {

  // @todo: Check for Symfony\Component\HttpKernel\Exception\HttpException with 404
  // and display the 404 page for that case.

  error_log($e->getMessage());
  $trace = error_log(print_r($e->getTrace(), TRUE));

  $message = 'An error occured: ' . get_class($e) . ' ' . $e->getMessage();

  return $app['twig']->render('page/page-error.twig', array(
    'title' => 'Error',
    'content' => $message . $trace,
  ));
});

$app->run();
