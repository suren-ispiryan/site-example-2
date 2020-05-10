<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<!--  css connection link  -->
	<link rel="stylesheet" type="text/css" href="style.css">
		<!--  bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!--  jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<!--  bootstrap cdn for js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

	<title> example 2 </title>
</head>
<body>





			<!-- Carousel -->






<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="carousel-btns"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1" class="carousel-btns"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2" class="carousel-btns"></li>
	</ol>

	<div class="carousel-inner">
  		<div class="carousel-item active">
			<img class="d-block w-100 opacity-div-parent" src="assets/carousel-pictures/1.jpg" alt="First slide">		
			<div class="opacity-div"> </div>
			<!-- text on slide 1 -->
			<div class="carousel-caption d-none d-md-block">
				<p class="first-p">TRANSFORM</p>
				<p class="second-p">YOUR BUSINESS INTO A <br>SUCCESSFUL BUSINESS</p>
				<button class="btn-p"> WITH OUR HELP >> </button>
			</div>
		</div>
 

 		<div class="carousel-item">
			<img class="d-block w-100 opacity-div-parent" src="assets/carousel-pictures/2.jpg" alt="Second slide">
			<div class="opacity-div"> </div>
			<!-- text on slide 2 -->
			<div class="carousel-caption d-none d-md-block">
				<p class="first-p">VIVAMUS</p>
				<p class="second-p">SED SEM TRISTIQUE <br> NON ELEIFEN</p>
				<button class="btn-p"> READ MORE >> </button>
			</div>
		</div>
    

		<div class="carousel-item">
			<img class="d-block w-100 opacity-div-parent" src="assets/carousel-pictures/3.jpg" alt="Third slide">
			<div class="opacity-div"> </div>
			<!-- text on slide 3 -->
			<div class="carousel-caption d-none d-md-block">
				<p class="first-p">MAURIS</p>
				<p class="second-p">SED SEM TRISTIQUE <br> NON ELEIFEN</p>
				<button class="btn-p"> READ MORE >> </button>
			</div>
		</div>
	</div>
</div>	






			<!-- navbar section -->






<nav class="navbar navbar-expand-lg navbar-light navbar-prop">
	
	<a class="navbar-brand brand" href="#"> Navbar </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav ul">
			<li class="nav-item">
 				<a class="nav-link dropdown-single" href="#"> 
 					HOME
 				</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					PAGES
				</a>
				
				<div class="dropdown-menu dr" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item dropdown" href="#"> About Us </a>
					<a class="dropdown-item dropdown" href="#"> Contact </a>
					<a class="dropdown-item dropdown" href="#"> Services </a>
					<a class="dropdown-item dropdown" href="#"> Clients </a>
					<a class="dropdown-item dropdown" href="#"> FAQ </a>
					<a class="dropdown-item dropdown" href="#"> Archives </a>
					<a class="dropdown-item dropdown" href="#"> 404 </a>
					<a class="dropdown-item dropdown" href="#"> Sidebar Left </a>
					<a class="dropdown-item dropdown" href="#"> Sidebar Right </a>
					<a class="dropdown-item dropdown" href="#"> Sidebar Left & Right </a>
					<a class="dropdown-item dropdown" href="#"> Full Width Content </a>
					<a class="dropdown-item dropdown" href="#"> HTML Sidemap </a>
				</div>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					ELEMENTS
				</a>
				
				<div class="dropdown-menu dr" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item dropdown" href="#"> Buttons </a>
					<a class="dropdown-item dropdown" href="#"> Alert Messages </a>
					<a class="dropdown-item dropdown" href="#"> Font Icons </a>
					<a class="dropdown-item dropdown" href="#"> Social Icons </a>
					<a class="dropdown-item dropdown" href="#"> Call To Actions </a>
					<a class="dropdown-item dropdown" href="#"> Columns </a>
					<a class="dropdown-item dropdown" href="#"> Font - No Gutter </a>
					<a class="dropdown-item dropdown" href="#"> List </a>
					<a class="dropdown-item dropdown" href="#"> Accordeons Toggles & Tabs </a> 
					<a class="dropdown-item dropdown" href="#"> Priceing Tables </a>
					<a class="dropdown-item dropdown" href="#"> Misc. Typography </a>
					<a class="dropdown-item dropdown" href="#"> Sliders  Lightbox </a>
					<a class="dropdown-item dropdown" href="#"> Media </a>
					<a class="dropdown-item dropdown" href="#"> Tables </a>
					<a class="dropdown-item dropdown" href="#"> Testimonials </a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					BLOG
				</a>
				
				<div class="dropdown-menu dr" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item dropdown" href="#"> Blog Overview </a>
					<a class="dropdown-item dropdown" href="#"> Blog Post </a>
				</div>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					GALLERY
				</a>

				<div class="dropdown-menu dr" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item dropdown" href="#"> Full Width </a>
					<a class="dropdown-item dropdown" href="#"> 2 Col Grid </a>
					<a class="dropdown-item dropdown" href="#"> 3 Col Grid </a>
					<a class="dropdown-item dropdown" href="#"> 4 Col Grid </a>
					<a class="dropdown-item dropdown" href="#"> 5 Col Grid </a>
				</div>
			</li>

		</ul>
	</div>

</nav>

















</body>
</html>