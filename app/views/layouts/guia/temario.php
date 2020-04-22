{% extends 'templates/globals/main.php' %}

{% block breadcrumb %}
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-white rounded-0 shadow">
        <li class="breadcrumb-item"><a href="{{ base_url() }}/">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ base_url() }}/guia/materia">Materias</a></li>
        <li class="breadcrumb-item active" aria-current="page">Biologia</li>
      </ol>
    </nav>
{% endblock %}

{% block content %}

<div class="row">

<div class="col-sm-12 col-md-5 col-lg-3 mb-3">
  <div class="card-header bg-white text-center rounded-0">
    <h5 class="text-primary">{{materia.materia}} {{materia.indice}}</h5>
  </div>
  <div class="card rounded-0 shadow">
    <img class="card-img rounded-0" src="{{ base_url() }}/img/materia/{{ materia.img }}"></img>
    <div class="card-body rounded-0 p-0">
      <ul class="list-group list-group-flush m-0">
        {% for tema in temas %}
        <li class="list-group-item text-dark"><a href="{{ base_url() }}/guia/materia/{{ materia.id }}/temario/{{ tema.id }}">{{tema.tema}}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
</div>

<div class="col-sm-12 col-md-7 col-lg-9 mb-3">
  <div class="card rounded-0 shadow">
    <div class="card-header bg-white rounded-0 text-center">
      <h4 class="text-primary font-weight-bold">Capitulo</h4>
    </div>
    <div class="card-body rounded-0 p-0">
      <table class="table table-hover m-0">
        <tbody>
          {% for capitulo in capitulos %}
          <tr>
            <td class="text-center bg-primary px-0">
              <h4 class="text-white mx-0">{{ materia.indice }}.{{ tema.indice }}.1</h4>
            </td>
            <td class="text-dark">{{ capitulo.capitulo }}</td>
            <td class="text-right">
              <a class="btn btn-primary rounded-circle" href="{{ base_url() }}/">
                <i class="fas fa-book-open"></i>
              </a>
            </td>
          </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
{% endblock %}