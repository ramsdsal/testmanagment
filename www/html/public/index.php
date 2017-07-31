<?php

require '../app/config/Config.php';

use \Phalcon\DI\FactoryDefault;
use \Phalcon\Loader;
use \Phalcon\Mvc\Application;
use \Phalcon\Mvc\Router;
use \Phalcon\Mvc\View;
use \Phalcon\Session\Adapter\Files;

try
{
 //Create the Loader
 $loader = new Loader();
 $loader->registerDirs([
  '../app/controllers/',
  '../app/models/',
  '../app/config/',
 ]);

 $loader->register();

 //set the dependency injection
 $di = new FactoryDefault();

 //Return config
 $di->setShared('config', function () use ($config) {
  return $config;
 });

 //Path to the views
 $di->set('view', function () {
  $view = new View();
  $view->setViewsDir('../app/views');
  $view->registerEngines(['.volt' => 'Phalcon\Mvc\View\Engine\volt']);
  return $view;
 });

 //Router
 $di->set('router', function () {
  $router = new Router();
  $router->mount(new GlobalRoutes());
  return $router;
 });

 $di->set('db', function () use ($di) {
  $dbConfig = (array) $di->get('config')->get('db');
  $db = new Phalcon\Db\Adapter\Pdo\Mysql($dbConfig);
  return $db;
 });

 //Session
 $di->setShared('session', function () {
  $session = new Files();
  $session->start();
  return $session;
 });
 //Flash data (Temporary Data)
 $di->set('flash', function () {
  $flash = new Phalcon\Flash\Session([
   'error' => 'alert alert-danger',
   'success' => 'alert alert-success',
   'notice' => 'alert alert-info',
   'warning' => 'alert alert-warning',
  ]);
  return $flash;
 });

 //Deploy the application
 $app = new Application($di);
 echo $app->handle()->getContent();

} catch (\Phalcon\Exception $e) {
 echo $e->getMessage();
}
?>