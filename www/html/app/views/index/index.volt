{% extends "templates/base.volt" %}
{% block content %}
<div class="bs-example">
    <div class="list-group">
        {% for release in releases %}
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">{{ release.getVersion() }}</h4>
                <p class="list-group-item-text">Alle systemen rapporteren op 100%</p>
            </a> 
        {% endfor %}       
    </div>
</div>
{% endblock %}