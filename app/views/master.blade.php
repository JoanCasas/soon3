<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Oasis 4x4 nueva web</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('css/bootstrap.css')}}" rel="stylesheet">
    
    <!-- CSS propi -->
    <link href="{{ url('css/style.css')}}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="{{ url('images/Logolletres2.png')}}" alt="" class="logo">
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

              <!-- Aqui ha d'anar la seccio que inclou els botons del menu -->
              @yield('menu')
              
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container-content">

      <!-- Aqui ha d'anar la seccio que inclou el contingut de la pagina -->

      @yield('content')
      
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
  </body>
</html>
