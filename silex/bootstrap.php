<?php

require_once __DIR__ . '/vendor/autoload.php';

use Silex\Application;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Symfony\Bridge\Twig\Extension\TranslationExtension;
use Symfony\Component\Translation\Translator;

require __DIR__ . '/settings.php';

$app = new Application();

// Register form service:
$app->register(new FormServiceProvider());

$app->register(new TwigServiceProvider(), [
  'twig.path' => __DIR__ . '/templates',
  'twig.options' => [],
]);

// Register and start a session:
$app->register(new SessionServiceProvider());
$app['session']->start();

// Enable debug OR enable cache.
if ($settings['twig_debug']) {
  $twig_options['twig.options']['debug'] = TRUE;
  $app['twig']->addExtension(new Twig_Extension_Debug());
}
else {
  $twig_options['twig.options']['cache'] = __DIR__ . '/twig_cache';
}

// Passes cookie to backend to enable xdebug.
$app['xdebug_backend_requests'] = TRUE;

// Instantiate a timer.
// $app['timer'] = new Timer();

$app['twig']->addGlobal('current_url', trim($_SERVER['REQUEST_URI'],'/'));

$app['twig']->addExtension(
  new TranslationExtension(new Translator('en'))
);

// Debug mode on/off:
$app['debug'] = !empty($settings['silex_debug']);

// Show the timer:
$app['show_timer'] = !empty($settings['show_timer']);

