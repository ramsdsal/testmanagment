<!doctype html>
<html lang="en">
  <head>
    {{ get_title() }}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ assets.outputCss('style') }}
    {{ assets.outputJs('js') }}
    {% block head %}
    {% endblock %}
  </head>
  <body>
    <div class="container">
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <h3><a href="{{ url('index') }}">TEST MANGER STATUS</a></h3>
          <span class="pull-right">{{ date('d-M-Y') }}</span>
        </div>
        <div class="col-md-3">&nbsp;</div>
      </div>
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          <p class="pull-right"><a href="{{ url('testbeheren') }}"><< Testen beheren</a></p>
        </div>
        <div class="col-md-3">&nbsp;</div>
      </div>
      <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
          {% block content %}
          {% endblock %}
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