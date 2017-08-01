<?php
use Phalcon\Validation;

class Release extends BaseModel {

 private $id;
 private $version;
 private $date;
 private $created_at;
 private $updated_at;

 public function initialize() {

 }
 public function getId() {
  return $this->id;
 }
 public function getVersion() {
  return $this->version;
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
 public function setVersion($name) {
  $this->version = $name;
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
   'version',
   new Validation\Validator\StringLength([
    "max" => 15,
    "min" => 3,
    "messageMaximum" => "Version name must be under 15 characters",
    "messageMinimum" => "Version name must be atleast 3 characters",
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