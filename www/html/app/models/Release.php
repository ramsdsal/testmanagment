<?php
use Phalcon\Validation;

class Release extends BaseModel {

 private $id;
 private $name;
 private $date;
 private $created_at;
 private $updated_at;

 public function initialize() {

 }
 public function getId() {
  return $this->id;
 }
 public function getName() {
  return $this->name;
 }
 public function getDate() {
  return $this->date;
 }
 public function getcreatedAt() {
  return $this->created_at;
 }
 public function getupdatedAt() {
  return $this->updated_at;
 }
 public function setId($id) {
  $this->id = $id;
 }
 public function setName($name) {
  $this->name = $name;
 }
 public function setDate($date) {
  $this->date = $date;
 }
 public function setcreatedAt($created_at) {
  $this->created_at = $created_at;
 }
 public function setupdatedAt($updated_at) {
  $this->updated_at = $updated_at;
 }
 public function validation() {

  $validator = new Validation();

  $validator->add(
   'name',
   new Validation\Validator\StringLength([
    "max" => 15,
    "min" => 3,
    "messageMaximum" => "Your password must be under 15 characters",
    "messageMinimum" => "Your password must be atleast 3 characters",
   ])
  );

  $validator->add(
   'date',
   new Validation\Validator\Date([
    "format" => "Y-m-d",
    "message" => "The date is invalid",
   ])
  );

  return $this->validate($validator);
 }
 public function beforeCreate() {
  $this->created_at = date("Y-m-d H:i:s");
 }

 public function beforeUpdate() {
  $this->updated_at = date("Y-m-d H:i:s");
 }

}