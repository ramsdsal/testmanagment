<?php

use \Phalcon\Assets\Filters\Cssmin;
use \Phalcon\Assets\Filters\Jsmin;
use \Phalcon\Mvc\Controller;
use \Phalcon\Tag;

class BaseController extends Controller {

 public function initialize() {

  Tag::prependTitle('Test manager ');
  //Set css style settings
  $this->assets
   ->collection('style')
   ->addCss('third-party/css/bootstrap.min.css', false, false)
   ->addCss('third-party/css/style.css')
   ->addCss('third-party/css/datepicker.css')
   ->setTargetPath('third-party/css/production.css')
   ->setTargetUri('third-party/css/production.css')
   ->join(true)
   ->addFilter(new Cssmin());

  //Set Js files settings
  $this->assets
   ->collection('js')
   ->addJs('third-party/js/jquery.min.js', false, false)
   ->addJs('third-party/js/bootstrap.min.js', false, false)
   ->addJs('third-party/js/validator.js')
   ->addJs('third-party/js/datepicker.js')
   ->addJs('third-party/js/func.js')
   ->setTargetPath('third-party/js/production.js')
   ->setTargetUri('third-party/js/production.js')
   ->join(true)
   ->addFilter(new Jsmin());

 }
}
