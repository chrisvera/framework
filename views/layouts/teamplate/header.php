<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>Framework Básico 
            <?php 
                if (!empty($title)) {
                    echo "»".$title;
                }
            ?>      
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo $layoutParams["route_css"]; ?>/normalize.min.css">
        <link rel="stylesheet" href="<?php echo $layoutParams["route_css"]; ?>/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $layoutParams["route_css"]; ?>/main.css">
       
        <script src="<?php echo $layoutParams["route_js"]; ?>/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      <div class="container">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Money</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo APP_URL; ?>/users">Home</a></li>
        <li class="dropdown">
          <a href="<?php echo APP_URL; ?>/users" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="sr-only"(current)></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Agregar usuario</a></li>
            <li><a href="#">Agregar tipo de usuario/a></li>
            <li><a href="#">Something else here</a></li> -->
            <li><a href="<?php echo APP_URL; ?>/users/add">Agregar Usuario </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo APP_URL; ?>/types/">Tipos de Usuario</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo APP_URL; ?>/types/add">Agregar tipo de usuario</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorías <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo APP_URL; ?>/categories">Lista de Categorías</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo APP_URL; ?>/categories/add">Agregar categoria</a></li>
<!--             <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
        </li>

        <li class="cluser"><a href="#">Transacciones<span class="cl"></span></a></li>
        <li><a href="#">Link</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#">Hola <?php echo $_SESSION["username"] ?> </a></li>
        <li><a href="<?php echo APP_URL."/users/logout"; ?>">Salir</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>