<!doctype html>
<html lang="en">
  <head>
    <?= $this->tag->getTitle() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->assets->outputCss('style') ?>
    <?= $this->assets->outputJs('js') ?>
    
    
  </head>
  <body>
    <div class="container">
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <h3><a href="<?= $this->url->get('index') ?>">TEST MANGER STATUS</a></h3>
          <span class="pull-right"><?= date('d-M-Y') ?></span>
        </div>
        <div class="col-md-3">&nbsp;</div>
      </div>
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <p class="pull-right"><a href="<?= $this->url->get('testbeheren') ?>"><< Testen beheren</a></p>
        </div>
        <div class="col-md-3">&nbsp;</div>
      </div>
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          
<a type="button" class="btn btn-default btn-lg btn-block" href="<?= $this->url->get('release') ?>">Release managment</a>
<a type="button" class="btn btn-default btn-lg btn-block" href="#">Test managment</a>

        </div>
        <div class="col-md-3">&nbsp;</div>
      </div>
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <p class="pull-right">Footer @2017</p>
        </div>
        <div class="col-md-3">&nbsp;</div>
      </div>
    </div>
  </body>
</html>