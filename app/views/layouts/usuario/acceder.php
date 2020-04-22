{% extends 'templates/globals/usuario.php' %}

    {% block content %}
    <div class="row">

      <div class="col-lg-12 mx-auto">
        <div class="card rounded-0 shadow">
          <div class="row no-gutters">
            <div class="col-sm-12 col-md-6 col-lg-4">
              <img class="card-img rounded-0" src="{{ base_url() }}/img/logo/logo-sample.jpg">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-5 mx-auto">
              <div class="card-body">
                <h3 class="card-title text-center text-primary">Inicio de Sesion</h3>
                <form class="mx-5" action="{{ base_url() }}/usuario/acceder" method="post">
                  <div class="form-group mt-3">
                    <label class="text-secondary">User</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text text-white bg-primary">
                          <i class="fa fa-user"></i>
                        </div>
                      </div>
                      <input class="form-control rounded-0" type="email" name="email" required>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label class="text-secondary">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text text-white bg-primary">
                          <i class="fa fa-key"></i>
                        </div>
                      </div>
                      <input class="form-control rounded-0" type="password" name="password" required>
                    </div>
                  </div>
                  <div class="form-group mt-4">
                    <button class="btn btn-primary btn-block rounded-0" type="submit">ACCEDER</button>
                  </div>
                  <div class="form-group">
                    <a href="{{ base_url() }}/usuario/registrarse">REGISTRARSE</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    {% endblock %}
