{% extends "templates/base.volt" %}
{% block content %}
<p><h2 class="pull-right">Wijzig release gegevens: <b>{{ release.getVersion() }}</b></h2></p>
<div class="row">
	<div class="col-xs-12">		
			<form method="post" data-toggle="validator" role="form"  action="{{ url('../release/update/' ~ release.getId()) }}">
				<div class="form-group  has-feedback">
					<label class="control-label">Release versie</label>
					<input type="text" class="form-control" name="name" placeholder="Release naam" required minlength="3" data-error="Minimaal 3 karakters" value="{{ release.getVersion() }}">
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label class="control-label">Release datum</label>
					<div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true">
						<input type="text" class="form-control" name="date" placeholder="Release datum" readonly required value="{{ release.getDate() }}">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-default pull-right">Aanpassen</button>
				<a href="{{url('release')}}"><<< Ga terug</a>					
			</form>		
	</div>
</div>
<p>&nbsp;</p>
{% endblock %}