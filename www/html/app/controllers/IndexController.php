<?php
use \Phalcon\Tag;

class IndexController extends BaseController {
 public function initialize() {
  parent::initialize();
  Tag::setTitle('| Home');
 }
 public function indexAction() {
  $this->view->setVar("releases", Release::find([
   'order' => 'created_at ASC',
  ]));
 }
}
?>
