<?php get_header(); ?>
<main> <!-- comienzo main -->
  <section class="container-fluid"><!-- Comienzo container -->
    <div class="row"> <!-- comienzo row -->
      <div class="offset-md-1 offset-lg-1"></div>
      <div class="col-xs-12 col-md-5 col-lg-5 lessons"> <!-- Comienzo col -->
        <div class="row "> <!-- Comienzo row -->
          <div class="col-xs-12 col-md-8 lessons__inner rounded">
            <h2>Talleres</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, rerum. Fuga, recusandae, illo.</p>
            <a href="talleres.html#talleres""><button type="button" class="btn btn-light buttons buttons--position">Ver Más</button></a>
          </div>
          <div class="col-xs-12 col-md-4 lessons__img__left rounded-right">
              <!-- background img -->
          </div>
        </div> <!-- Fin row -->
      </div> <!-- Fin col -->
      <div class="col-xs-12 col-md-5 col-lg-5 lessons__secundary"> <!-- Comienzo col -->
        <div class="row"> <!-- Comienzo row -->
          <div class="col-xs-12 col-md-4 lessons__img__right rounded-left">
            <!-- background img -->
          </div>
          <div class="col-xs-12 col-md-8 lessons__inner rounded">
            <h2>Rutinas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, rerum. Fuga, recusandae, illo.</p>
            <a href="talleres.html#rutinas""><button type="button" class="btn btn-light buttons buttons--position">Ver Más</button></a>
          </div>
        </div> <!-- Fin row -->
      </div> <!-- Fin col -->
    </div><!-- Fin row -->
  </section> <!-- Fin sección -->

  <section class="container-fluid nutrition"> <!-- Comienzo nutricion -->
      <h1 class="text-center">Lorem ipsum dolor.</h1>
      <div class="row mt-5"> <!-- Comienzo row -->
        <div class="offset-md-1 offset-lg-1"></div>
          <div class="nutrition__inner col-xs-12 col-md-5 col-lg-5 rounded-left">
            <h2>Recetas</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, excepturi.</p>
            <a href="nutricion.html#recetas""><button type="button" class="btn btn-light buttons">Ver Más</button></a>
          </div>
        <div class="nutrition__inner nutrition__inner_img-right col-xs-12 col-md-5 col-lg-5 rounded-right"></div>
      </div> <!-- Fin row -->
      <div class="row">
        <div class="offset-md-1 offset-lg-1"></div>
      <div class="nutrition__inner nutrition__inner_img-left col-xs-12 col-md-5 col-lg-5 rounded-left"></div>
        <div class="nutrition__inner nutrition__inner--position nutrition__inner--padding col-xs-12 col-md-5 col-lg-5 rounded-right">
          <h2>Nutritips</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, excepturi.</p>
          <a href="nutricion.html#tips""><button type="button" class="btn btn-light buttons">Ver Más</button></a>
        </div>
      </div>
    </section> <!-- Fin nutricion -->

    <section class="container-fluid achievements"> <!-- Comienzo icon -->
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 achievements__inner mb-5">
          <div class="achievements__inner__mov">
              <div class="achievements__inner-icon">
                <i class="fas fa-basketball-ball svg-inline--fa svg-inline--fa-1"></i>
            </div>
              <p class="mt-4">Contamos con 3 deportes en los cuales participan nuestros vecinos</p>
            </div>
          </div>  
          <div class="col-lg-3 col-md-3 col-sm-12 achievements__inner mb-5">
            <div class="achievements__inner__mov">
              <div class="achievements__inner-icon">
               <i class="fas fa-dumbbell svg-inline--fa svg-inline--fa-2"></i>
          </div>
          <p class="mt-4">Muchas areas verdes y sedes repartidas por todo Quilicura para poder practicar a gusto</h3></p>
              </div>  
            </div>
          <div class="col-lg-3 col-md-3 col-sm-12 achievements__inner mb-5">
            <div class="achievements__inner__mov">
              <div class="achievements__inner-icon">
                <i class="fas fa-clipboard-list svg-inline--fa svg-inline--fa-3"></i>
            </div>
              <p class="mt-4">A la actualidad llevamos N° Inscritos...</p>
            </div>  
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 achievements__inner">
            <div class="achievements__inner__mov">
              <div class="achievements__inner-icon">
                <i class="fas fa-exchange-alt svg-inline--fa svg-inline--fa-4"></i>
            </div>
              <p class="mt-4">A la actualidad llevamos N° Inscritos...</p>
            </div>  
      </div>
      </div>
    </section><!-- Fin icon -->

    <section id=testimonials> <!-- comienzo carousel -->
    <div class="container text-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
              
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="rounded-circle " src="<?php echo get_template_directory_uri(); ?> /assets/img/celinda1.png" alt="First slide">
            <h5 class="pt-3 mb-2">Celinda Muñoz y su nieto Ángel Orrego</h5>
            <p class="">“Hay antecedentes en la familia de diabetes y el papá de mi nieto tenía sobrepeso, entonces decidí que él no fuera por el mismo camino, porque es mejor prevenir desde pequeño”.</p>
        </div>
          <div class="carousel-item">
            <img class=" rounded-circle " src="<?php echo get_template_directory_uri(); ?> /assets/img/maria2.png" alt="Second slide">
            <h5 class="pt-3 mb-2">María Rojas</h5>
            <p class="">“He bajado ya 10 kilos con el programa y me ha dado mucho más ánimo, ya que estuve con depresión. Mi ropa me queda buena y me hace feliz. Recomiendo a todos quienes quieran sentirse mejor que entren al programa”.</p>
        </div>
          <div class="carousel-item">
            <img class=" rounded-circle " src="<?php echo get_template_directory_uri(); ?> /assets/img/jose2.png" alt="Third slide">
            <h5 class="pt-3 mb-2">José Gatica </h5> 
            <p class="">“Lo más difícil fue dejar las papas fritas y los completos. Pero ya he bajado 11 kilos. Cambié harto y crecí. La gente me dice que estoy muy cambiado”.</p>
        </div>
      </div>
    </div>
</section> <!-- Fin carousel -->

</main> <!-- Fin main -->
<?php get_footer(); ?>