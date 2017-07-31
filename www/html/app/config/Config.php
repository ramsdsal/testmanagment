<?php
date_default_timezone_set('utc');

$config = new \Phalcon\Config([
 'db' => [
  'host' => '192.168.3.3',
  'username' => 'root',
  'password' => 'root',
  'dbname' => 'test_manager',
 ],
 'environment' => 'staging',
]);
?>