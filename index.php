<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css sendiri -->
    <link rel="stylesheet" type="text/css" href="style2.css">

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

<!--font awesome  -->
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- aos -->

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>AxoLath's footwear</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top bg-transparent">
	  <div class="container">
	    <a class="navbar-brand" href="#">AxoLath</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav mx-auto">
	        <a class="nav-link px-4" href="blog.php">Home</a>
	        <a class="nav-link px-4" href="#tandaproduct">Product</a>
	        <a class="nav-link px-4" href="#tandacontact">Contact</a>
	        <!-- <a class="nav-link" href="#">Disabled</a> -->
	      </div>
	    </div>
	  </div>
	</nav>


	<div class="jumbotron jumbotron-fluid bg-light jumbo">
	  <div class="container text-center">
	    <h1 class="display-4">AxoLath's Footwear</h1>
	    <p class="lead">The best place to get everything what your foot needs</p>
		<div class="wadah-arrow">
			<a href="#tandaproduct">
				<h6>Buy Now</h6>
				<i class="fa fa-long-arrow-down" aria-hidden="true" ></i>
			</a>
		</div>
	  </div>
	</div>

	<div class="container about">
		<div class="row">
			<div class="col-lg-6">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="image/custom.jpg" class="d-block w-100" >
				    </div>
				    <div class="carousel-item">
				      <img src="image/wash.jpg" class="d-block w-100" >
				    </div>
				    <div class="carousel-item">
				      <img src="image/repair.jpg" class="d-block w-100" >
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-6">
				<h2>About</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
		</div>
		
	</div>

	<div class="container mt-5 product">
		<div id="tandaproduct" class="tanda"></div>
		<h2 class="text-center " data-aos="flip-left">Product</h2>
		<div class="product-thumbs">
			<div class="row">
				<div class="col-lg-3">
					<div class="card mr-2 " data-aos="fade-up">
					  <img src="image/running.jpg" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title">Running</h5>
					  
					    <a href="#" class="btn btn-primary">Buy Now</a>
					  </div>
					</div>				
				</div>	
				<div class="col-lg-3">
					<div class="card mr-2" data-aos="fade-up">
					  <img src="image/sneakers.jpg" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title">Sneakers</h5>
					    
					    <a href="#" class="btn btn-primary">Buy Now</a>
					  </div>
					</div>				
				</div>		
				<div class="col-lg-3">
					<div class="card mr-2" data-aos="fade-up">
					  <img src="image/boots.jpg" class="card-img-top" alt="...">
					  <div class="card-body text-center">
					    <h5 class="card-title">Boots</h5>
					    
					    <a href="#" class="btn btn-primary">Buy Now</a>
					  </div>
					</div>				
				</div>	
				<div class="col-lg-3">
					<div class="card mr-2 text-center" data-aos="fade-up">
					  <img src="image/pantofel.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">Loafer</h5>
					    
					    <a href="#" class="btn btn-primary">Buy Now</a>
					  </div>
					</div>				
				</div>	
			</div>
			<div class="row custom" data-aos="fade-up">
			<div class="col-lg-4 mx-auto text-center">
				<img src="image/custom.jpg" class="w-100">
				<h3 class="text-center">Custom</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>
				<a href="#" class="text-center btn mx-auto ">Custom Now</a>
			</div>
		</div>
		</div>
	</div>

	<div class="container contact mt-5 mb-5">
		<div id="tandacontact" class="tanda"></div>
		<h2 class="text-center" data-aos="flip-left">Contact</h2>
		<div class="row">
			<div class="col-lg-4" data-aos="zoom-in">
				<ul class="list-group">
				  <li class="list-group-item"><h3>Address</h3></li>
				  <li class="list-group-item">JL Bromo Raya, No 12</li>
				  <li class="list-group-item">Mutiara Gading Timur, Mustika Jaya </li>
				  <li class="list-group-item">Kota Bekasi, Indonesia</li>
				  <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-map-marker" aria-hidden="true"></i> 
					Google Maps</a>
				  
				</ul>
			</div>
			<div class="col-lg-6 contactForm" data-aos="zoom-in">
				<h3>Get touch with us</h3>
				<form method="POST" action="index.php" id="contact-form">
				<div class="inputBox">
					<input type="text" name="name" required="required" class="form-control">
					<span>Full name</span>
				</div>
				<div class="inputBox">
					<input type="email" name="email" required="required" class="form-control">
					<span>E-mail</span> 
				</div>
				<div class="inputBox">
					<textarea required="required" name="message" class="form-control"></textarea>
					<span>Type your message</span>
				</div>
				<div class="inputBox">
					<input type="submit" name="submit" class="form-control" value="Send">

				</div>
				<!-- <span style="color: white; font-size: 12px;">*form tidak mengirim kemana pun</span> -->
			</form>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h4>About</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					</p>
				</div>
				<div class="col-lg-6">
					<h4 class="socmed">
						<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a> 
						<a href=""><i class="fa fa-facebook" aria-hidden="true"></i> </a>
						<a href=""><i class="fa fa-twitter" aria-hidden="true"></i> </a>
						<a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
						<a href=""><i class="fa  fa-shopping-cart" aria-hidden="true"></i></a>
					</h4>
				</div>
			</div>
			<hr>
			<p class="text-center">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2021 . Allrights reserved by AqsoLath's footwear company</p>
		</div>
	</footer>

	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script
	  src="https://code.jquery.com/jquery-3.6.0.js"
	  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	  crossorigin="anonymous">
	</script>


    <script>
		 $(window).scroll(function(){
		 $('nav').toggleClass('scrolled', $(this).scrollTop() > 280);
		 });
		</script>

	<!-- aos -->

 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

  </body>
</html>