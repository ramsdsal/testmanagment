{% extends "templates/base.volt" %}
{% block content %}
<p>{{ flash.output() }}</p>
<div class="row">
	<div class="col-xs-6">
		<button class="btn btn-success  pull-left" type="button" data-toggle="collapse" data-target="#createRelease" aria-expanded="false" aria-controls="createRelease">
		+ Creer een nieuwe release
		</button>
	</div>
	<div class="col-xs-6">
		<input type="text" class="form-control pull-right" name="search" placeholder="Zoek een release ..." id="search" onkeyup="searchTableRelease()">
	</div>
</div>
<p>&nbsp;</p>
<div class="row">
	<div class="col-xs-12">
		<div class="collapse" id="createRelease">
			<form method="post" data-toggle="validator" role="form" class="form-inline" action="release/create">
				<div class="form-group  has-feedback">
					<input type="text" class="form-control" name="name" placeholder="Release naam" required minlength="3" data-error="Minimaal 3 karakters">
				</div>
				<div class="form-group">
					<div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-autoclose="true">
						<input type="text" class="form-control" name="date" placeholder="Release datum" readonly required>
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary form-control">Creeren</button>					
			</form>
		</div>
	</div>
</div>
<p>&nbsp;</p>
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
				<td>{{ release.getVersion() }}</td>
				<td>{{ release.getDate() }}</td>
				<td>
					<a href="" type="button" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="top" title="Tests toevoegen">
					  <span class="glyphicon glyphicon-tasks"></span>&nbsp;
					</a>
					<a  href="{{ url("release/edit/" ~  release.getId() ) }}" type="button" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="top" title="Release aanpassen">
					  <span class="glyphicon glyphicon-pencil"></span>&nbsp;
					</a>
					<a href="{{ url("release/delete/" ~  release.getId() ) }}" type="button" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Verwijderen">
					  <span class="glyphicon glyphicon-trash"></span>&nbsp;
					</a>
				</td>
			</tr>
		{% else %}
			<tr>
				<td colspan="3">Er zijn nog geen release. </td>
			</tr>
		{% endfor %}
	</tbody>
</table>
{% endblock %}