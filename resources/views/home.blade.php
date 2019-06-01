<!DOCTYPE html>
<html {{ str_replace('_', '-', app()->getLocale()) }}>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Hackatrix Lima">
  <meta name="author" content="Yo soy Root">
  <title>SAM</title>
  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('assets/lib/nucleo/css/nucleo.css') }}" rel="stylesheet">
  
  <link href="{{ asset('assets/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets/css/base.css') }}" rel="stylesheet">
</head>

<body>
  <style type="text/css">
    .link__header{
      padding: 5px 20px;
      background-color: red;
    }

    @media only screen and (max-width: 768px){
      .container__web__links{
        display: none;
      }
    }
  </style>
  <!-- Navegacion -->
  <nav class="navbar navbar-vertical fixed-left  navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler Responsive opcion de quitar-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="index.html">
        <img src="assets/img/logo.jpeg" class="navbar-brand-img" alt="...">
      </a>
      <div class="container__web__links">
        <a href="" class="link__header">Quiénes Somos</a>
        <a href="" class="link__header">Nuestros aliados</a>
        <a href="" class="link__header">Quiero publicar</a>
        <a href="" class="link__header">Registrate</a>
        <a href="" class="link__header">Ingresa</a>
      </div>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Quiénes somos</a>
            <a class="dropdown-item" href="#">Nuestros aliados</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Quiero publicar</a>
            <a class="dropdown-item" href="#">Registrate</a>
            <a class="dropdown-item" href="#">Ingresa</a>
          </div>
        </li>
      </ul>
      
    </div>
  </nav>
  <!-- Scripts -->
  <script src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>

  <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/base.js') }}"></script>
</body>

</html>