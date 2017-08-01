<?php
use \Phalcon\Mvc\Router\Group;

class GlobalRoutes extends Group {
 public function initialize() {

  $this->add('index', [
   'controller' => 'index',
   'action' => 'index',
  ]);

  $this->add('testbeheren', [
   'controller' => 'testbeheren',
   'action' => 'index',
  ]);

  $this->add('release', [
   'controller' => 'release',
   'action' => 'index',
  ]);

  $this->add('release/edit/:id', [
   'controller' => 'release',
   'action' => 'edit',
   'params' => 3,
  ]);

  $this->add('update/:id', [
   'controller' => 'release',
   'action' => 'update',
   'params' => 3,
  ]);

 }
}