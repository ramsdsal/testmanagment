<?php
use \Phalcon\Tag;

class ReleaseController extends BaseController {
 public function initialize() {
  parent::initialize();
  Tag::setTitle('| Release');
 }
 public function indexAction() {
  $this->view->setVar("releases", Release::find([
   'order' => 'created_at DESC',
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
  $r->setVersion($name);
  $r->setDate($date);

  if (!$r->create()) {
   $this->flash->error("Er is iets mis gegaan met creeren van een realese, probeer het later!");
   $this->response->redirect("release");
   return;
  }

  $this->flash->success("Release is grecreerd!");
  $this->response->redirect("release");
  return;
 }
 public function editAction($id) {
  $r = Release::findFirstById($id);
  $this->view->setVar("release", $r);
 }

 public function updateAction($id) {

  $this->view->disable();
  $name = $this->request->getPost('name');
  $date = $this->request->getPost('date');

  $r = Release::findFirstById($id);
  $r->setVersion($name);
  $r->setDate($date);

  if (!$r->update()) {
   $this->flash->error("Er is iets mis gegaan met het aanpassen van een realese, probeer het later!");
   $this->response->redirect("release");
   return;
  }

  $this->flash->success("Release is aangepast!");
  $this->response->redirect("release");
  return;
 }

 public function deleteAction($id) {
  $r = Release::findFirstById($id);
  if (!$r) {
   $this->flash->error("Er is iets mis gegaan met het deleten van een realese, probeer het later!");
   $this->response->redirect("release");
  }

  $r->delete();
  $this->flash->success("Release is verwijderd!");
  $this->response->redirect("release");
  return;
 }
}
?>