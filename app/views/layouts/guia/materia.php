{% extends 'templates/globals/main.php' %}

{% block breadcrumb %}
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white rounded-0 shadow">
        <li class="breadcrumb-item"><a href="{{ base_url() }}/">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Materias</li>
      </ol>
    </nav>
{% endblock %}

{% block content %}
    <div class="row">
      {% for materia in materias %}
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="card rounded-0 shadow">
          <img class="card-img rounded-0" src="{{ base_url() }}/img/materia/{{materia.img}}"></img>
          <div class="card-body rounded-0">
            <h5 class="card-title text-primary text-center my-0">{{materia.materia}}</h5>
          </div>
          <div class="card-footer p-0">
            <a href="{{ base_url() }}/guia/materia/{{materia.id}}/temario/1" class="btn btn-primary btn-block rounded-0 font-weight-bold">TEMARIO</a>
          </div>
        </div>
      </div>
      {% endfor %}
    </div>
{% endblock %}