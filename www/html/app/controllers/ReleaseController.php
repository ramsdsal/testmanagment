<?php
use \Phalcon\Tag;

class ReleaseController extends BaseController {
 public function initialize() {
  parent::initialize();
  Tag::setTitle('| Release');
 }
 public function indexAction() {
  $this->view->setVar("releases", Release::find([
   'order' => 'created_at ASC',
  ]));
 }
 public function createAction() {

  $this->view->disable();
  $name = $this->request->getPost('name');
  $date = $this->request->getPost('date');

  if ($name == NULL || $date == NULL) {
   $this->flash->error("Alle velden zijn verplichten!");
   $this->response->redirect("release");
   return;
  }

  $r = new Release();
  $r->setName($name);
  //$r->setDate($date);
  $r->setDate('2017-07-29');

  if (!$r->create()) {
   print_r($r->getMessages());
   exit;
   $this->flash->error("Er is iets mis gegaan met creeren van een realese, probeer het later!");
   $this->response->redirect("release");
   return;
  }

  $this->flash->success("Release is grecreerd!");
  $this->response->redirect("release");
  return;
 }
}
?>