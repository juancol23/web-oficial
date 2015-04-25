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





<header id="header">
	<div class="container">
		<div class="row text-center">
			<br><br><br><br><br><br><br>
			<div class="col-xs-12 col-md-12 fondo-black-tranparente white roboto ">

				 <h2 class="tittle ">Our Work</h2>
				<p class="subtitle ">A wonderful serenity has taken possession of my entire soul, like these sweet <br> mornings of spring which I enjoy with my whole heart.</p>
			</div>
		</div>
	</div>
</header>

<section id="work ">
	<div class="container">
		<div class="row ">
	     	<div class="col-xs-12 col-md-12 text-center ">
		     	 <h2 class="tittle">Our Work</h2>
		     	 <p class="subtitle m-small">We believe our work speaks for itself. Browse our most recent projects below</p>			     	
 	     	 </div>  
			<div class="col-xs-12 col-md-12 text-center">
				<div class="col-xs-6 col-md-4">
					<figure>
						<img src="images/3.jpg" class="img-responsive" alt="">
						<caption>
							<div class="team-name">
								Juan Valdemar
							</div>
						</caption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-4">
					<figure>
						<img src="images/3.jpg" class="img-responsive" alt="">
						<caption>
							<div class="team-name">
								Juan Valdemar
							</div>
						</caption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-4">
					<figure>
						<img src="images/3.jpg" class="img-responsive" alt="">
						<caption>
							<div class="team-name">
								Juan Valdemar
							</div>
						</caption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-4">
					<figure>
						<img src="images/3.jpg" class="img-responsive" alt="">
						<caption>
							<div class="team-name">
								Juan Valdemar
							</div>
						</caption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-4">
					<figure>
						<img src="images/3.jpg" class="img-responsive" alt="">
						<caption>
							<div class="team-name">
								Juan Valdemar
							</div>
						</caption>
					</figure>
				</div>
				<div class="col-xs-6 col-md-4">
					<figure>
						<img src="images/3.jpg" class="img-responsive" alt="">
						<caption>
							<div class="team-name">
								Juan Valdemar
							</div>
						</caption>
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>




<section id="testimonios">
	<div class="container">
		<div class="row">

			<!-- <div class="col-xs-12 col-md 12 text-center">
				<h2 class="tittle">TRABAJOS REALIZADOS</h2>
				<p class="subtitle">A wonderful serenity has taken possession of my entire soul, like these sweet <br> mornings of spring which I enjoy with my whole heart.</p>
			</div> -->

			<br><br>

				<div class="col-xs-12 col-md-9">
					<!-- Place somewhere in the <body> of your page -->
					<div class="flexslider text-center">
					  <ul class="slides">
					    <li>				      				       
					     	<!--  <iframe id="player_1" src="http://player.vimeo.com/video/39683393?api=1&player_id=player_1" width="100%" height="400px" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>		 -->
					     	<div class="col-xs-12 col-md-12">
						     	 <h2 class="tittle">Testimonios</h2>
						     	 <p class="subtitle">A wonderful serenity has taken possession of my entire soul, like these sweet <br> mornings of spring which I enjoy with my whole heart.</p>	
						     	 
					     	 </div>    
					    </li>
					    <li>									      
					   		<div class="col-xs-12 col-md-12">
						     	 <h2 class="tittle">Testimonios</h2>
						     	 <p class="subtitle">A wonderful serenity has taken possession of my entire soul, like these sweet <br> mornings of spring which I enjoy with my whole heart.</p>		
					     	 </div>    					      
					    </li>			
					     <li>									      
					   		<div class="col-xs-12 col-md-12">
						     	 <h2 class="tittle">Testimonios</h2>
						     	 <p class="subtitle">A wonderful serenity has taken possession of my entire soul, like these sweet <br> mornings of spring which I enjoy with my whole heart.</p>		
					     	 </div>    					      
					    </li>	
					     <li>									      
					   		<div class="col-xs-12 col-md-12">
						     	 <h2 class="tittle">Testimonios</h2>
						     	 <p class="subtitle">A wonderful serenity has taken possession of my entire soul, like these sweet <br> mornings of spring which I enjoy with my whole heart.</p>		
					     	 </div>    					      
					    </li>		    
					  </ul>
					</div>

				</div>		
				<div class="col-xs-12 col-md-3">	
					<figure class="text-center">
						<img src="images/6.jpg" class="img-responsive i-b" alt="">
					</figure>
				</div>	 
		</div>
	</div>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/jquery.js"></script> 
<script src="js/jquery.flexslider.js"></script>
<script src="js/bootstrap.js"></script>


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
 
</body>
</html>