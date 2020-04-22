{% extends 'templates/globals/usuario.php' %}

{% block content %}

<div class="row">
  <div class="col-sm-12 mx-auto">
    <div class="card rounded-0 shadow">
      <div class="card-body">
        <div class="row no-gutters">
          <div class="col-lg-4">
            <img class="card-img" src="{{ base_url() }}/img/logo/logo-sample.jpg">
          </div>
          <div class="col-lg-6 mx-auto">
            <form action="{{ base_url() }}/usuario/registrarse" method="post">

              <h6 class="card-title text-primary mt-2">Nombre Completo</h6>
              <div class="form-row">

                <div class="form-group col-lg-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-primary text-white">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                    <input class="form-control rounded-0" type="text" name="nombre" placeholder="Nombre(s)" required>
                  </div>
                </div>

                <div class="form-group col-lg-4">
                  <input class="form-control rounded-0" type="text" name="apellido_paterno" placeholder="A. Paterno" required>
                </div>

                <div class="form-group col-lg-4">
                  <input class="form-control rounded-0" type="text" name="apellido_materno" placeholder="A. Materno" required>
                </div>

              </div>

              <h6 class="card-subtitle text-primary mt-2">Email</h6>
              <div class="form-row">

                <div class="form-group col-lg-10">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-primary text-white">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                    <input class="form-control rounded-0" type="email" name="email" placeholder="E-Mail" required>
                  </div>
                </div>

              </div>

              <h6 class="card-subtitle text-primary mt-2">Password</h6>
              <div class="form-row">

                <div class="form-group col-lg-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-primary text-white">
                        <i class="fa fa-key"></i>
                      </div>
                    </div>
                    <input class="form-control rounded-0" type="password" name="password" placeholder="Password" required>
                  </div>                
                </div>

              </div>

              <h6 class="card-subtitle text-primary mt-2">Confirmar Password</h6>
              <div class="form-row">
                <div class="form-group col-lg-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-primary text-white">
                        <i class="fa fa-key"></i>
                      </div>
                    </div>
                    <input class="form-control rounded-0" type="password" name="password_confirm" placeholder="Confirmar Password" required>
                  </div>                
                </div>
              </div>

              <div class="form-row mt-2">
                <div class="col-lg-12 mx-auto">
                  <button class="btn btn-block btn-primary rounded-0 font-weight-bold" type="submit">REGISTRARSE</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}