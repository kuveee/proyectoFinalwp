<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
  <?php wp_nav_menu( array ( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
<?php } ?> 

  <nav class="navbar">
    <span id="brand">
      <a href="index.html">VidaSana</a>
    </span>
      <ul id="menu">
        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
        <li><a href="page-nosotros.php">Nosotros</a></li>
        <li><a href="page-talleres.php">Talleres</a></li>
        <li><a href="page-nutricion.php">Nutrición</a></li>
        <li><a href="page-galeria.php">Galeria</a></li>
        <li><a href="page-contacto.php">Contacto</a></li>
      </ul>
    <div id="toggle">
      <div class="span" id="one"></div>
      <div class="span" id="two"></div>
      <div class="span" id="three"></div>
    </div>
  </nav>
  <div id="resize">
    <ul id="menu">
      <li><a href="index.html">Home</a></li>
        <li><a href="nosotros.html">Nosotros</a></li>
        <li><a href="talleres.html">Talleres</a></li>
        <li><a href="nutricion.html">Nutrición</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </div>
  <header class="header-vidasana">  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
      <div class="carousel-item active img__vidasana-1">
        <div class=" d-md-block">
            <h1 class="text-white text-center">Vida sana Quilicura</h1>
            <p class="text-center text-white font-weight-bold">Nuestro programa promueve el deporte y la actividad física, todo esto acompañado de una buena alimentación. El equipo está compuesto por un nutricionista, un sicólogo y un profesor de educación física, logrando un trabajo integral acorde a las necesidades de los participantes</p>
        </div>
      </div>
      <div class="carousel-item img__vidasana-2">
        <div class=" d-md-block">
            <h1 class="text-white text-center">Vida sana Quilicura</h1>
            <p class="text-center text-white font-weight-bold">Nuestro programa promueve el deporte y la actividad física, todo esto acompañado de una buena alimentación. El equipo está compuesto por un nutricionista, un sicólogo y un profesor de educación física, logrando un trabajo integral acorde a las necesidades de los participantes</p>
          </div>
      </div>
      <div class="carousel-item img__vidasana-3">
        <div class=" d-md-block">
            <h1 class="text-white text-center">Vida sana Quilicura</h1>
            <p class="text-center text-white font-weight-bold">Nuestro programa promueve el deporte y la actividad física, todo esto acompañado de una buena alimentación. El equipo está compuesto por un nutricionista, un sicólogo y un profesor de educación física, logrando un trabajo integral acorde a las necesidades de los participantes</p>
          </div>
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"  data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"  data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </header>