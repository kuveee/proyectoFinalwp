$("#toggle").click(function() {

      $(this).toggleClass('on');
      $("#resize").toggleClass("active");

});

$(document).ready(function() {
    $(".contacto__datos ul li:nth-child(1)").prepend('<span class="icons"><i class="far fa-clock"></i></span>')
	$(".contacto__datos ul li:nth-child(2)").prepend('<span class="icons"><i class="far fa-envelope"></i></span>')
	$(".contacto__datos ul li:nth-child(3)").prepend('<span class="icons"><i class="fas fa-mobile-alt"></i></span>')
	$(".contacto__datos ul li:nth-child(4)").prepend('<span class="icons"><i class="fas fa-fax"></i></span>')
	$(".icons").addClass("contacto__icons");
	$(".portfolio div h3:nth-child(1)").append('<p class="portfolio_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices accumsan ornare. Phasellus tristique ullamcorper luctus.</p>')
	$(".portfolio_p").addClass("portfolio__inner__p")
});	
		

	
	








