<?php get_header(); ?>
<h1 class="text-center" id="recetas">Recetas Saludables</h1>
    <div class="container-fluid recetas__container">
    <div class="row recetas__container">
      <div class="offset-md-1"></div>
      <div class="col-sm-12 col-md-4">
<?php
  $arg = array(
    'post_type'    => 'recipes',
    'posts_per_page' => 10,
    'paged'      => $paged
  );

  $get_arg = new WP_Query( $arg );

  while ( $get_arg->have_posts() ) {
    $get_arg->the_post();
?>

        <h2 class="text-center">Galletas de navidad</h2>
        <div class="offset-md-5 recetas__container__border mb-4"></div>
        <ul class="float-left text-left mr-5">
          <li>2 tazas de harina de avena</li>
            <li>1/2 taza de harina integral</li>
            <li>1 cucharadita polvos de hornear </li>
            <li>2 cucharaditas de canela en polvo </li>
            <li>1 huevo </li>
            <li>¼ taza leche descremada. </li>
          </ul>
          <ul class="text-left">
            <li>3 cucharaditas de jengibre en polvo</li>
            <li>¼  cucharadita sal </li>
            <li>2 cucharadas de miel </li>
            <li>30 gotitas de stevia </li>
            <li>3 cucharadas de aceite</li>
          </ul>
          <p class="font-italic receta__p">Mezclar los ingredientes secos,después los húmedos y se juntan hasta obtener una masa moldeable. Harinamos una cubierta y con la ayuda de un uslero se estira la masa. Cortar con molde se galletas y llevar a horno precalentado a 160° por 15min. Para decorar puedes derretir un chocolate de buena calidad (alto en cacao y sin azúcar).</p>
        </div>
      <div class="col-sm-12 col-md-6">
        <img src="assets/img/recetas1.jpg" class="img_recetas" alt="">
        <img src="assets/img/recetas2.jpg" class="img_recetas" alt="">
      
  

  <?php } wp_reset_postdata();
  ?>
  </div>
    </div>
</div>

<h1 class="text-center" id="recetas">Recetas Saludables</h1>
	<div class="container-fluid recetas__container">
		<div class="row recetas__container">
			<div class="offset-md-1"></div>
			<div class="col-sm-12 col-md-4">
				<h2 class="text-center">Galletas de navidad</h2>
				<div class="offset-md-5 recetas__container__border mb-4"></div>
				<ul class="float-left text-left mr-5">
					<li>2 tazas de harina de avena</li>
	  				<li>1/2 taza de harina integral</li>
	  				<li>1 cucharadita polvos de hornear </li>
	  				<li>2 cucharaditas de canela en polvo </li>
	  				<li>1 huevo </li>
	  				<li>¼ taza leche descremada. </li>
	  			</ul>
	  			<ul class="text-left">
	  				<li>3 cucharaditas de jengibre en polvo</li>
	  				<li>¼  cucharadita sal </li>
	  				<li>2 cucharadas de miel </li>
	  				<li>30 gotitas de stevia </li>
	  				<li>3 cucharadas de aceite</li>
	  			</ul>
	  			<p class="font-italic receta__p">Mezclar los ingredientes secos,después los húmedos y se juntan hasta obtener una masa moldeable. Harinamos una cubierta y con la ayuda de un uslero se estira la masa. Cortar con molde se galletas y llevar a horno precalentado a 160° por 15min. Para decorar puedes derretir un chocolate de buena calidad (alto en cacao y sin azúcar).</p>
	  		</div>
			<div class="col-sm-12 col-md-6">
				<img src="assets/img/recetas1.jpg" class="img_recetas" alt="">
				<img src="assets/img/recetas2.jpg" class="img_recetas" alt="">
			</div>
		</div>
	</div>

			  			

  	<div class="container tips">
  		<h1 class="text-center mb-5" id="tips">Tips Saludables</h1>
  		<div class="row"> <!-- comienzo primera fila -->
  			<div class="offset-md-1 offset-lg-1"></div>
  			<div class="col-sm-12 col-md-3 col-lg-3 tips__img">
  				<div class="imgBox">
					<img src="assets/img/nutri1.jpg" alt="">
  				</div>
  				<div class="content">
  					<h2>¿Sabías que?</h2>
  					<p>Las lentejas estimulan el buen funcionamiento del sistema nervioso, combaten la retención de liquidos y ayudan a prevenir enfermedades como la anemia.</p>
  				</div>
  			</div>
  			<div class="col-sm-12 col-md-3 col-lg-3 tips__img">
  				<div class="imgBox">
					<img src="assets/img/nutri2.jpg" alt="">
  				</div>
  				<div class="content">
  					<h2>¿Sabías que?</h2>
  					<p>Beber limonada caliente con miel, puede calmar malestares de invierno</p>
  				</div>
  			</div>
  			<div class="col-sm-12 col-md-3 col-lg-3 tips__img">
  				<div class="imgBox">
					<img src="assets/img/nutri3.jpg" alt="">
  				</div>
  				<div class="content">
  					<h2>¿Sabías que?</h2>
  					<p>Es muy importante beber agua, ya que tiene muchos beneficios para nuestro cuerpo. Por ej. en invierno nos ayuda a evitar la retención de líquidos y a tener una buena circulación de la sangre.</p>
  				</div>
  			</div>
  		</div>  		
  		<div class="row"><!-- comienzo segunda fila -->
  			<div class="offset-md-1 offset-lg-1"></div>
  			<div class="col-sm-12 col-md-3 col-lg-3 tips__img">
  				<div class="imgBox">
					<img src="assets/img/nutri4.jpg" alt="">
  				</div>
  				<div class="content">
  					<h2>¿Sabías que?</h2>
  					<p>El consumo de productos que sean ricos en vitamina C, como los limones y naranjas, te ayudarán a prevenir enfermedades respiratorias en épocas de invierno</p>
  				</div>
  			</div>
  			<div class="col-sm-12 col-md-3 col-lg-3 tips__img">
  				<div class="imgBox">
					<img src="assets/img/nutri5.jpg" alt="">
  				</div>
  				<div class="content">
  					<h2>¿Sabías que?</h2>
  					<p>Los mariscos son una fuente de potasio, vitamina A, E, C y D, calcio y hierro. Además d Omea 3, que ayuda a disminuir el colesterol y, por lo tanto, las posibilidades de sufrir un ataque cardiaco, así como enfermedades cardiovasculares a medio y largo plazo.</p>
  				</div>
  			</div>
  			<div class="col-sm-12 col-md-3 col-lg-3 tips__img">
  				<div class="imgBox">
					<img src="assets/img/nutri6.jpg" alt="">
  				</div>
  				<div class="content">
  					<h2>¿Sabías que?</h2>
  					<p>La Chia tiene más calcio que la leche, nos aporta el triple de antioxidantes y contiene las mismas fibras que la avena y aporta 2 veces más potasio que el plátano</p>
  				</div>
  			</div>
  		</div><!-- Fin segunda fila-->
  	</div>
<?php get_footer(); ?>