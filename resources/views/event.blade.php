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
      background-color: #005854;
      color: white !important;
    }
    .bg-gradient-default {
      background: linear-gradient(87deg, rgba(48,181,173,0.5) 0%, rgba(48,181,173,0.5) 99%, rgba(48,181,173,0.36) 100%) !important;
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
      
      <a class="navbar-brand pt-0" href="/">
        <img src="{{ asset('assets/img/logo.jpeg') }}" class="navbar-brand-img" alt="...">
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

  <!-- Main content -->
  <div id="main-content" class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/fotos/1.jpeg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid align-items-center">
        <div class="row">
          <div class="col-md-12 text-center" style="">
            <h1 class="display-2 text-white">SOY UN EVENTO {{$code}}</span></h1>
            <p class="text-white mt-0 " style="font-weight: 800;">Encuentra el evento ideal para ti. </p>
            <!-- Busqueda -->
            <div class="navbar-search navbar-search-dark form-inline  d-none d-md-flex ml-lg-auto" ">
              <div class="form-group mb-0" style="margin: 0 auto">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input id="busqueda" name="busqueda" class="form-control" placeholder="Buscar" type="text" onkeypress="return findEvent(event)">
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>



    <!-- Page content -->
    

    <div class="container-fluid mt--7" >
      <div class="row">
        <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0" >
          <div class="card card-profile shadow">
            
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4" style="background: #005854">Novedades</a>
              </div>
            </div>
            <div id="contenedorEventos" class="card-body pt-0 pt-md-4" style="background-color:">
              <!-- Novedades eventos -->
              <div class="row" style="background-color: ;">
                
               
              </div>
            </div>
            
          </div>
        </div>
      </div> 


      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">SAM</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Quiénes Somos</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Nuestros aliados</a>
              </li>
              
            </ul>
          </div>
        </div>
      </footer>
    </div> 
  </div>
  <!-- Scripts -->
  <script src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>

  <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/base.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script>
  
  


  
  </script>
</body>

</html>