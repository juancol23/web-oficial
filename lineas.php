<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Slider </title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Volkhov:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<!-- Place somewhere in the <head> of your document -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<?php include('menu.php'); ?>


<section id="lineas">
	<div class="container">
		<div class="row">
			<h1 class="tittle text-center">Metodologia de la  Construcccion</h1>
			<div class="col-xs-12 col-md-12">
				<div class="row text-center">
						<h3 class="lineas-tittle">Fully Responsive</h3>
						<p class="lineas-role">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, eveniet maiores beatae ipsum nemo minus quidem, harum cupiditate aliquam debitis, nulla, iusto quas. Eaque vel ipsam sapiente ad eum aut.</p>
					</div>
				<div class="col-xs-12 col-md-8">
					<div class="row">
						<h3 class="lineas-tittle">Fully Responsive</h3>
						<p class="lineas-role">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, eveniet maiores beatae ipsum nemo minus quidem, harum cupiditate aliquam debitis, nulla, iusto quas. Eaque vel ipsam sapiente ad eum aut.</p>
					</div>
					<div class="row">
						<h3 class="lineas-tittle">Font-Awesome 300+ Icons</h3>
						<p class="lineas-role">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cum tempora laboriosam autem eius aliquid eaque temporibus, iusto voluptatibus doloremque obcaecati quidem est provident veniam exercitationem iure id error maiores.</p>
					</div>
					<div class="row">
						<h3 class="lineas-tittle">Fully Responsive</h3>
						<p class="lineas-role">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, eveniet maiores beatae ipsum nemo minus quidem, harum cupiditate aliquam debitis, nulla, iusto quas. Eaque vel ipsam sapiente ad eum aut.</p>
					</div>
					 
				</div>
				
				<div class="col-xs-12 col-md-4 hidden-sm">
					 <figure class="text-center">
						<img src="images/team-3.jpg" class="img-responsive i-b" alt="">
					</figure>
				</div>

			</div>
		</div>
	</div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/jquery.js"></script> 
<script src="js/jquery.flexslider.js"></script>


	<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $('.flexslider').flexslider();
	  });
	</script>
 
	<script type="text/javascript" charset="utf-8">
		$(".handle").on("click", function(){
			$("nav ul").toggleClass("showing");
		});
	</script>
	 
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
			$('a[href^="#"]').on('click',function (e) {
			    e.preventDefault();

			    var target = this.hash;
			    $target = $(target);

			    $('html, body').stop().animate({
			        'scrollTop': $target.offset().top
			    }, 900, 'swing', function () {
			        window.location.hash = target;
			    });
			});
		});
	 </script>

	<!-- Syntax Highlighter -->
	<script type="text/javascript" src="js/shCore.js"></script>
	<script type="text/javascript" src="js/shBrushXml.js"></script>
	<script type="text/javascript" src="js/shBrushJScript.js"></script>

	<!-- Optional FlexSlider Additions -->
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
	<!--<script defer src="js/demo.js"></script>-->
</body>
</html>