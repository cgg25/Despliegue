<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>WokExpress</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  	<!--Import Google Icon Font-->
  	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="footer.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</head>
<body>
	
		
 <header>
	<nav class="nav-extended  red darken-1">
	    <div class="nav-wrapper">
	      <a href="#" class="brand-logo"><img class="logo" src="palillos.png"><span id="logo">WokExpress</span></a>
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	      	<li><a href="index.html">Home</a></li>
	       <li><a href="#modal" class="waves-effect waves-light">Haz tu pedido</a></li>
	        <li><a href="contacto.html">Contacto</a></li>
	        <li><a href="entrar.html"> Entrar</a></li>
	        <li><a href="registrarse.html"> Registrarse</a></li>
	      	<li id="user">Bienvenido Invitado</li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	       	<li><a href="index.html">Home</a></li>
	        <li><a href="#modal" class="waves-effect waves-light">Haz tu pedido</a></li>
	        <li><a href="contacto.html">Contacto</a></li>
	        <li><a href="entrar.html"> Entrar</a></li>
	        <li><a href="registrarse.html"> Registrarse</a></li>
	      	<li id="user">Bienvenido Invitado</li>
	      </ul>
	    </div>
	</nav>
 	<!--Modal del boton haz tu pedido.-->
		<div id="modal" class="modal">
		    <div class="modal-content">
		      <h4>Registrate para poder hacer tu pedido!</h4>
		      <p>Si estas registrado, Entra para poder elegir tu Wok!</p>
		    </div>
		    <div class="modal-footer">
		      <a href="registrarse.html" class=" modal-action waves-effect waves-red btn-flat ">Registrate</a>
		      <a href="entrar.html" class=" modal-action  waves-effect waves-red btn-flat ">Entrar</a>
		    </div>
		</div>
	</header>
 	<main>
 		<!--Breadcrumb -migas de pan.-->
	 	<div class="row">
	 		<nav  class="red accent-2">
		 		<div class="nav-wrapper">
			      <div class="col s12">
			        <a href="index.html" class="breadcrumb colorBreadcrumb">Home</a>
			        
			        
			      </div>
			    </div>	
		    </nav>
	 	</div>
	 	<!--slider-->
 		<div class="row">
			<div class="col s12">
				<div class="slider">
					<ul class="slides">
						<li><img src="img/slider1.jpg" alt=""></li>
						<li><img src="img/slider2.jpg" alt=""></li>
						<li><img src="img/slider3.jpg" alt=""></li>
						<li><img src="img/slider4.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
		<!--Contenido de la web-->
		
		   
		
		    <div class="row container">
		      <div class="col s12">
		      	<h2 class="header">WokExpress</h2>
		      	<hr>
		      </div>
		      <div class="col s5 push-l2">
		      	<p class="grey-text text-darken-3 lighten-3">Los restaurantes WokExpress son espacios jóvenes, elegantes, modernos e informales, pensados para disfrutar de los sabores orientales. Uno de sus atractivos es la cocina a la vista, con una gran cristalera por la que los clientes ven en directo cómo se prepara su comida en los típicos woks. Cuentan también con servicio take-away.</p>
		      </div>
		      <div class="col s6 push-l2">
		      	<img id="imgRedondeado" src="img/imagen1.jpg" class="responsive-img">
		      </div>
		      
		      <!--http://www.thewok.es/carta/platos-principales/noodles
		      MARCARSE UN FER-->
		      <div class="col s12">
		      	<h2>Carta</h2>
		      	<hr>
		      </div>
		      <div class="col s6 m4 l3">
		      	<div class="card small">
					<!-- Card Content -->
					<span class="card-title align-center">Ajiru</span>
					<div class="card-image">
			          <img src="img/noodles/ajiru.jpg" >
			        </div>
			        <div class="card-content">
			          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
			        </div>
			  	</div>
			  </div>
			  <div class="col s6 m4 l3">
		      	<div class="card small">
					<!-- Card Content -->
					<div class="card-image">
			          <img src="img/noodles/ajiru.jpg" >
			          <span class="card-title">Card Title</span>
			          
					</div>
			        <div class="card-content">
			          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
			        </div>
			  	</div>
			  </div>
			  <div class="col s6 m4 l3">
		      	<div class="card small">
					<!-- Card Content -->
					<div class="card-image">
			          <img src="img/noodles/ajiru.jpg" >
			          <span class="card-title">Card Title</span>
			          
					</div>
			        <div class="card-content">
			          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
			        </div>
			  	</div>
			  </div>
			  <div class="col s6 m4 l3">
		      	<div class="card small">
					<!-- Card Content -->
					<div class="card-image">
			          <img src="img/noodles/ajiru.jpg" >
			          <span class="card-title"></span>
			          
					</div>
			        <div class="card-content">
			          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
			        </div>
			  	</div>
			  </div>
				
		      <div class="col s12">
		      	<h2>A domincilio</h2>
		      	<hr>
		      </div>
		      <div class="col s12">
		      	<p>Te ofrecemos tu comida favorita de THe WOK vía Deliveroo donde tú quieras.  Busca tu restaurante favorito y ¡pide tu comida para llevar!
				</p>
				 <a href="#modal" class="waves-effect waves-light btn red darker-1">¡Haz tu pedido!</a>
		      </div>
		    </div>
		

		<div class="parallax-container">
		  	<div class="parallax-container">
		    	<div class="parallax"><img src="img/portada.jpg"></div>
			</div>
			<div class="row">
				<div class="col s12">
					<h2>Nuestros wok</h2>
				</div>
			</div>
		</div>
 	</main>	
		
 	

 	<!--footer-->
   <footer class="footer-distributed">
		<div class="footer-left">
			<h3>WOK<span id="logoFooter">Express</span></h3>
				<p class="footer-links">
					<a href="index.html">Home</a>
					·
					<a href="#">Haz tu pedido</a>
					·
					<a href="contacto.html">Contacto</a>
				</p>

				<p class="footer-company-name">Company WokExpress &copy; 2017</p>
		</div>
		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>C/de la fábrica, 22</span>  Mallorca, Baleares</p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p>+34-678119613</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:wokexpress@gmail.com">wokexpress@gmail.com</a></p>
			</div>
		</div>
		<div class="footer-right">
			<p class="footer-company-about">
				<span>Acerca de wokExpress</span>
				Registrate y disfruta de nuestros maravillosos wok.
			</p>
			<div class="footer-icons">
				<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
				<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</footer>
            






  	 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
      <script type="text/javascript">
      	$(document).ready(function(){
      		$('.slider').slider({indicators:false,interval:3000});
      		$(".button-collapse").sideNav();
      		$("#modal").modal();
      		$('.parallax').parallax();
      		$('.collapsible').collapsible();
    	});
      </script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</body>
</html>