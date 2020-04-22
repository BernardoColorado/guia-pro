  <nav class="navbar fixed-top navbar-expand-lg bg-white navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand text-dark font-weight-bold" href="index.html">Fundación FIES</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-4">
            <a class="nav-link text-dark" href="{{ base_url() }}/guia/materia">Guía</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item text-dark" href="#"><i class="fa fa-cog mr-2"></i>Configuración</a>
              <a class="dropdown-item text-dark" href="{{ base_url() }}/usuario/salir"><i class="fa fa-sign-out-alt mr-2"></i>Salir</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
