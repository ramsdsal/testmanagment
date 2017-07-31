{% extends "templates/base.volt" %}
{% block content %}
	<p>{{ flash.output() }}</p>
	<div class="row">
		<div class="col-xs-6">			
			<button class="btn btn-success  pull-left" type="button" data-toggle="collapse" data-target="#createRelease" aria-expanded="false" aria-controls="createRelease">
  				+ Creer een nieuwe release
			</button>			
		</div>
		<div class="col-xs-6"><input type="text" class="form-control pull-right" name="search" placeholder="Zoek een release ..." id="search" onkeyup="searchTableRelease()"></div>
	</div>
	<p>&nbsp;</p>
	<div class="row">
		<div class="col-xl-12">
			<div class="collapse" id="createRelease">
			  <div class="well">			  
			    <form method="post" data-toggle="validator" role="form" class="form-inline" action="release/create">
					<div class="form-group  has-feedback">
						<input type="text" class="form-control" name="name" placeholder="Release naam" required>
					</div>
					<div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true">
						<input type="text" class="form-control" name="date" placeholder="Release datum" readonly required>
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Creer</button>
					</div>
				</form>
			  </div>
			</div>
			
		</div>
	</div>
	<table class="table table-hover" id="table">
		<thead>
			<tr>
				<th>Release</th>
				<th>Datum</th>
				<th>Optie</th>
			</tr>
		</thead>
		<tbody>
			{% for release in releases %}
				<tr>
					<td>{{ release.name}}</td>
					<td>{{ release.date}}</td>
					<td>
					</td>
				</tr>
			{% endfor %}
		</tbody>
	</table>
{% endblock %}