<?php
use \Phalcon\Tag;

class TestbeherenController extends BaseController {
 public function initialize() {
  parent::initialize();
  Tag::setTitle('| Teste beheren');
 }
 public function indexAction() {

 }
}
?>