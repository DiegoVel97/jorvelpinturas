<html>
<head>
  <title>
    Jorvel Pinturas y Acabados SAS
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="<?php echo addLib('web/template/librerias/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="<?php echo addLib('web/template/librerias/css/flexslider.css'); ?>" type="text/css" media="screen" property="" />
  <link href="<?php echo addLib('web/template/librerias/css/style.css'); ?>" rel='stylesheet' type='text/css' />
  <link href="<?php echo addLib('web/template/librerias/css/simpleLightbox.css'); ?>" rel='stylesheet' type='text/css' />
  <link href="<?php echo addLib('web/template/librerias/css/fontawesome-all.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



</head>
<header>
  <div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo text-left">
        <h1>
          <a class="navbar-brand" href="index.html">
          <img src="<?php echo addLib('web/template/images/logoJorvel.png')?>" width="250px;"></a>
          </h1>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">

          </span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-lg-auto text-right">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">¿Quienes somos?</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link tooltip-blog" href="blog.html">Blog <span>New</span></a>
            </li>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Proyectos
                <i class="fas fa-angle-down"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Realizados</a>
                <a class="dropdown-item" href="#" title="">Imagenes</a>


              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactanos</a>
            </li>

          </ul>
          <!--
          <form action="#" method="post" class="form-inline my-2 my-lg-0 search">
            <input class="form-control mr-sm-1" type="search" placeholder="" name="Search" required="">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>-->
        </div>

      </nav>

    </div>
  </header>
  <!--//header-->


  <!--/banner-->
  <div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"  style="background-image: url('<?php echo addLib('web/template/images/imgUno.jpg'); ?>'); background-size: cover;">
          <div class="carousel-caption" style="background:rgba(0,0,0,0.3);">
            <h3>Somos más que una empresa de acabados</h3>

          </div>
        </div>
        <div class="carousel-item item2"  style="background-image: url('<?php echo addLib('web/template/images/imgDOs.jpg'); ?>'); background-size: cover;">
          <div class="carousel-caption" style="background:rgba(0,0,0,0.3);">
            <h3>Convirtiendo grandes ideas en grandes productos.</h3>
          </div>
        </div>
        <div class="carousel-item item3" style="background-image: url('<?php echo addLib('web/template/images/imgTres.jpg'); ?>'); background-size: cover;">
          <div class="carousel-caption" style="background:rgba(0,0,0,0.3);">
            <h3>Si puedes soñarlo, podemos hacerlo</h3>
          </div>
        </div>
        <div class="carousel-item item4" style="background-image: url('<?php echo addLib('web/template/images/ingresso.jpg'); ?>'); background-size: cover;">
          <div class="carousel-caption" style="background:rgba(0,0,0,0.3);">
            <h3>La mejor forma de predecir el futuro es creándolo</h3>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!--/model-->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body video">
          <iframe src="https://player.vimeo.com/video/13618190" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!--//model-->
  <!--//banner-->
