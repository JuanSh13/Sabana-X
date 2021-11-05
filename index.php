<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sabana X</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="./views/client-site/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="./views/client-site/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="./views/client-site/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="./views/client-site/plugins/slick/slick.css" rel="stylesheet">
  <link href="./views/client-site/plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="./views/client-site/css/style.css" rel="stylesheet">


  <!-- FAVICON -->
  <link href="./views/client-site/images/favicon.png" rel="shortcut icon">

</head>
<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="index.php">
        <img src="./views/client-site/images/logo.png" alt="logo" class="logo1">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto" style="align-items:center;">
	  	<li class="nav-item">
          	<a class="nav-link" href="index.php" >Inicio<span>/</span></a>
        </li>
		<li class="nav-item">
          	<a class="nav-link" href="./views/client-site/categorias.php">Categorias<span>/</span></a>
        </li>
        <li class="nav-item">
          	<a class="nav-link" href="./views/client-site/tienda.php">Tienda<span>/</span></a>
        </li>
		<li class="nav-item">
			<a class="nav-link" href="./views/client-site/calendario.php">Calendario<span>/</span></a>
		</li>
		<li class="nav-item">
          <a class="nav-link" href="./views/client-site/artistas.php">Artistas<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./views/client-site/nosotros.php">Nosotros</a>
        </li>
		<li class="nav-item search">
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0 lupa" type="submit">
				<i class="fa fa-search bntlupa"></i>
			</button>
		  </form>
		</li>
		

		  <li class="nav-item dropdown dropdown-slide icon">
		  <a  class="ticket">
		  
			<i class="fa fa-user-circle" style="color: white;"> 
				
			</i>
			</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
					<button class="dropdown-item" type="button">
						<a href="views\extras\register.php">Registrarme</a>	
					</button>
    				<button class="dropdown-item" type="button">
						<a href="views\extras\login.php">Iniciar Sesión</a>	
					</button>
  				</div>
		  </li>
      </ul>
	  
		 
		
	  
      
	  
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->



<!--============================
=            Banner            =
=============================-->
<div class="container streams">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="./views/client-site/images/gallery/1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5>Stream 1</h5>
			  <p>Some representative placeholder content for the first slide.</p>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="./views/client-site/images/gallery/1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5>Stream 2</h5>
			  <p>Some representative placeholder content for the second slide.</p>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="./views/client-site/images/gallery/1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5>Stream 3</h5>
			  <p>Some representative placeholder content for the third slide.</p>
			</div>
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div>

	
</div>

<div class="container categorias">
	<div class="row cont-carousel-items">
		
				
		<div class="col-md-4">
			<div class="card item">
				<div class="card-body arquitectura">
					<h5 class="card-title"> Arquitectura</h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body cine">
				<h5 class="card-title"> Cine  </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">	
				<div class="card-body comedia">
				<h5 class="card-title"> Comedia </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body danza">
				<h5 class="card-title"> Danza  </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body deportes">
				<h5 class="card-title"> Deportes </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body dibujo">
				<h5 class="card-title"> Dibujo </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body escultura">
				<h5 class="card-title"> Escultura </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body graficos">
				<h5 class="card-title"> Graficos </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body literatura">
				<h5 class="card-title"> Literatura </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body musica">
				<h5 class="card-title"> Musica </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body cultura">
				<h5 class="card-title"> Cultura </b> </h5>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card item">
				<div class="card-body teatro">
				<h5 class="card-title">Teatro</h5>
				</div>
			</div>
		</div>
	</div>

</div>
<!--====  End of Banner  ====-->

<!--==============================
=            Speakers            =
===============================-->
<section class="section speakers  overlay-lighter ">
	<div class="container recomendados eventosAleatorios">
		<div class="section-title white">
			<h3> <span class="alternate">Eventos</span></h3>
			<!-- <p>Mejores streamers del momento </p> -->
		</div>
		<div class="tarjetas">
  
			<div class="cols">
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							  <div class="front" style="background-image: url(https://unsplash.it/500/500/)">
								  <div class="titulos-cards">
									  <p>Evento1</p>
						<span>Tocancipá</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							<div class="front" style="background-image: url(https://unsplash.it/501/501/)">
								  <div class="titulos-cards">
									  <p>Evento2</p>
						<span>Zipaquirá</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							  <div class="front" style="background-image: url(https://unsplash.it/502/502/)">
								  <div class="titulos-cards">
									  <p>Evento3</p>
						<span>Cajica</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							  <div class="front" style="background-image: url(https://unsplash.it/503/503/)">
								  <div class="titulos-cards">
									  <p>Evento4</p>
						<span>Sopó</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							  <div class="front" style="background-image: url(https://unsplash.it/504/504/">
								  <div class="titulos-cards">
									  <p>Evento5</p>
						<span>Gachancipá</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							  <div class="front" style="background-image: url(https://unsplash.it/505/505/)">
								  <div class="titulos-cards">
									  <p>Evento6</p>
						<span>Briceño</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							  <div class="front" style="background-image: url(https://unsplash.it/506/506/)">
								  <div class="titulos-cards">
									  <p>Evento7</p>
						<span>Chia</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
					  <div class="col-cards" ontouchstart="this.classList.toggle('hover');">
						  <div class="container cards">
							  <div class="front" style="background-image: url(https://unsplash.it/508/508/)">
								  <div class="titulos-cards">
									  <p>Evento8</p>
						<span>Funza</span>
								  </div>
							  </div>
							  <div class="back">
								  <div class="titulos-cards">
									<p class="pback">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>
		   </div>
	</div>
	<!-- <div class="cta-ticket bg-ticket overlay-dark">
		<div class="image-block"><img src="./views/client-site/images/logo2.png" alt="" class="img-fluid"></div>
	</div> -->
</section>


<section class="section   overlay-lighter">
	<div class="container recomendados">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3> <span class="alternate">Envivos</span></h3>
					<!-- <p>Mejores streamers del momento </p> -->
				</div>
			</div>
		</div>
		
		<!-- ENVIVOS -->
		<div class="cards-list">
  
			<div class="card-envivos 1">
			  <div class="card_image"> <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" /> </div>
			  <div class="card_title title-white">
				<p>Card Title</p>
			  </div>
			</div>
			
			  <div class="card-envivos 2">
			  <div class="card_image">
				<img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
				</div>
			  <div class="card_title title-white">
				<p>Card Title</p>
			  </div>
			</div>
			
			<div class="card-envivos 3">
			  <div class="card_image">
				<img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
			  </div>
			  <div class="card_title">
				<p>Card Title</p>
			  </div>
			</div>
			  
			<div class="card-envivos 4">
			  <div class="card_image">
				<img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
				</div>
			  <div class="card_title title-black">
				<p>Card Title</p>
			  </div>
			</div>

			<div class="card-envivos 3">
				<div class="card_image">
				  <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
				</div>
				<div class="card_title">
				  <p>Card Title</p>
				</div>
			  </div>


			  <div class="card-envivos 4">
				<div class="card_image">
				  <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
				  </div>
				<div class="card_title title-black">
				  <p>Card Title</p>
				</div>
			  </div>
			
		</div>	                                        
		<!-- FIN ENVIVOS -->
	</div>
	<!-- <div class="cta-ticket bg-ticket overlay-dark">
		
	</div> -->
</section>




<footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <div class="footer-logo">
              <img src="./views/client-site/images/logo.png" alt="logo" class="img-fluid">
            </div>
            <ul class="social-links-footer list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-rss"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="#">Sabana X</a> &#169; 2021 All Right Reserved</p>
        </div>
      </div>
      <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="./views/client-site/plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="./views/client-site/plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./views/client-site/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="./views/client-site/plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="./views/client-site/plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="./views/client-site/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="./views/client-site/plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="./views/client-site/plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script> -->
  <!-- <script type="text/javascript" src="./views/client-site/plugins/google-map/gmap.js"></script> -->
  <!-- Custom Script -->
  <script src="./views/client-site/js/custom.js"></script>
</body>

</html>



