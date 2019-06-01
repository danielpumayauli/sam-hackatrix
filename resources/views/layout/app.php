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
  
  @yield('content')

  <!-- Scripts -->
  <script src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>

  <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/base.js') }}"></script>
</body>

</html>