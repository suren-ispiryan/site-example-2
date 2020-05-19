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
		<!-- icon cdn -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<title> example 2 </title>
</head>
<body>



<div id="sliderTop"> </div>



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
	
	<a class="navbar-brand brand" href="#"> <i class="fas fa-sync">  </i> Transform </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav ul">
			<li class="nav-item">
 				<a class="nav-link dropdown-single dropdown" href="#"> 
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






			<!-- Section 1 -->








<section class="container-fluid cont-fluids">
	<div class="container">
		<div class="row">



	<!-- Section 1 coloumn 1 -->


			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<img src="assets/section-1-pictures/section-1-monitor-pic.jpg" class="img-fluid">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h2 class="sec-1-col-1-p-1">
							LOREM IPSUM DOLOR SIT AMET, CONSECT ETUR ADIPISICING.
						</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non feugiat odio dui in dui. Aenean ut facilisis dui. Etiam in rutrum nisi. Quisque porta scelerisque est, sit amet interdum nisi semper in.
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<button class="sec1-col-1-btn"> READ MORE >> </button>
					</div>
				</div>
			</div>



	<!-- Section 1 coloumn 2 -->


			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<h2 class="sec-1-col-2-p-1">
							THE TOP 3 REASONS
						</h2>
					</div>	
				</div>

				<div class="row">
					<div class="col-md-12">
						<p class="col-2-p-2">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non <a href="#" class="col-2-link"> feugiat odio dui in dui </a>. Aenean ut facilisis dui.
						</p>
					</div>	
				</div>


				<div class="row">
					<div class="col-md-2">
						<p class="col-1-numbers"> 1. </p>
					</div>	
					<div class="col-md-10">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris non feugiat.
						</p>
					</div>	
				</div>

				<hr>

				<div class="row pt-2">
					<div class="col-md-2">
						<p class="col-1-numbers"> 2. </p>
					</div>	
					<div class="col-md-10">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris non feugiat.
						</p>
					</div>
				</div>

				<hr>

				<div class="row pt-2">
					<div class="col-md-2">
						<p class="col-1-numbers"> 3. </p>
					</div>	
					<div class="col-md-10">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris non feugiat.
						</p>
					</div>
				</div>
			</div>



	<!-- Section 1 coloumn 3 -->


			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<h2 class="sec-1-col-2-p-1">
							FROM THE BLOG
						</h2>
					</div>	
				</div>

				<div class="row">
					<div class="col-md-6">
						<img src="assets/section-1-pictures/image1.jpg" class="img-fluid">
					</div>

					<div class="col-md-6">
						<div class="row">
							<div  class="col-md-12">
								<p>
									Lorem ipsum dolor sit amet, consectetur adi pisc ing elit vivamus…
								</p>		
							</div>
						</div>

						<div class="row">
							<div  class="col-md-12">
								<button class="sec1-col-1-btn"> READ MORE >> </button>
							</div>
						</div>
					</div>	
				</div>
				
				<hr>

				<div class="row  mt-5">
					<div class="col-md-6">
						<img src="assets/section-1-pictures/image2.jpg" class="img-fluid">
					</div>

					<div class="col-md-6">
						<div class="row">
							<div  class="col-md-12">
								<p>
									Lorem ipsum dolor sit amet, consectetur adi pisc ing elit vivamus…
								</p>		
							</div>
						</div>

						<div class="row">
							<div  class="col-md-12">
								<button class="sec1-col-1-btn"> READ MORE >> </button>
							</div>
						</div>
					</div>	
				</div>

				<hr>

				<div class="row  mt-5">
					<div class="col-md-6">
						<img src="assets/section-1-pictures/image3.jpg" class="img-fluid">
					</div>

					<div class="col-md-6">
						<div class="row">
							<div  class="col-md-12">
								<p>
									Lorem ipsum dolor sit amet, consectetur adi pisc ing elit vivamus…
								</p>		
							</div>
						</div>

						<div class="row">
							<div  class="col-md-12">
								<button class="sec1-col-1-btn"> READ MORE >> </button>
							</div>
						</div>
					</div>	
				</div>

			</div>
	
		</div>
	</div>	
</section>






			<!-- Section 2 -->







<section class="container-fluid section-2-fluid">
	<div class="sec-2-opacity-div">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="row">

						<div class="col-md-4 sec-2-left-parent">
							<div class="sec-2-left-part">
								<i class="fa fa-random">  </i>
							</div>
						</div>

						<div class="col-md-8">
							<div class="row pb-3">
								<div class="col-md-12">
									<h3 class="right-p-1">
										LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT VIVAMUS.
									</h3>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div> 
										<i class="fa fa-arrow-right" aria-hidden="true"> </i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id pharetra.
									</div>
									
									<div> 
										<i class="fa fa-arrow-right" aria-hidden="true"> </i> Lorem ipsum dolor sit amet, consectetur.
									</div>

									<div> 
										<i class="fa fa-arrow-right" aria-hidden="true"> </i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									</div>

									<div> 
										<i class="fa fa-arrow-right" aria-hidden="true"> </i> Lorem ipsum dolor sit amet, consectetur Vivamus.
									</div>
								</div>
							</div>

							<div class="row pt-4">
								<span class="pl-3">
									<button class="sec2-col2-btn1"> Lorem Ipsum </button>
								</span>

								<span class="pl-3">
									<button class="sec2-col2-btn2"> Dolor Sit Amet </button>
								</span>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>







			<!-- section 3 -->






<section class="container-fluid">
	<div class="container sec-3-container">
		<div class="row">
			<div class="col-md-12">	

				<div class="row">
			<!-- section 3 left -->
					<div class="col-md-6">				
						<h4 class="pb-3 sec3-p1"> LOREM IPSUM DOLOR SIT AMET </h4>
						<p class="pb-2 sec3-p1"> 
							rem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris. 
						</p>

						<div class="row pt-4 pb-4">
							<div class="col-md-5">
								<img src="assets/section-3-pictures/img1.png" class="round img-fluid">	
							</div>
							<div class="col-md-7">
								<h4 class="name"> Jane Doe </h4>
								<p> Job Title Here </p>
								<p class="pt-2"> 
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris. 
								</p>
								<i class="fa fa-phone"> 1001000 1101001 </i>
							</div>					
						</div>

						<div class="row pt-5 pb-4">
							<div class="col-md-5">
								<img src="assets/section-3-pictures/img2.png" class="round img-fluid">	
							</div>
							<div class="col-md-7">
								<h4 class="name"> John Doe </h4>
								<p> Job Title Here </p>
								<p class="pt-2"> 
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris. 
								</p>
								<i class="fa fa-phone"> 1001000 1101001 </i>
							</div>					
						</div>
					</div>

			<!-- section 3 right -->
					<div class="col-md-6">
						<h4 class="pb-3 sec3-p1"> LOREM IPSUM DOLOR SIT AMET </h4>
						<p class="pb-2 sec3-p1"> 
							rem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris. 
						</p>


<!-- Mini text carousel -->
					

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="carousel-btns"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1" class="carousel-btns"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2" class="carousel-btns"></li>
	</ol>

	<div class="carousel-inner">
  		<div class="carousel-item active">
			<!-- text on slide 1 -->
			<div class="d-none d-md-block">
				<p class="textslider"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non feugiat odio dui in dui. Aenean ut facilisis dui. Etiam in rutrum nisi.
				<br> <br>
				Quisque porta scelerisque est, sit amet interdum nisi semper in. Etiam eu hendrerit nibh. Aenean porttitor molestie accumsan.
				<br> <br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non feugiat odio dui in dui. Aenean ut facilisis dui. Etiam in rutrum nisi. Quisque porta scelerisque est, sit ame. </p>
			</div>
		</div>
 
 		<div class="carousel-item">
			<!-- text on slide 2 -->
			<div class="d-none d-md-block">
				<p class="textslider"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris, non feugiat odio dui in dui. Aenean ut facilisis dui. Etiam in rutrum nisi.
				<br> <br>
				Quisque porta scelerisque est, sit amet interdum nisi semper in. Etiam eu hendrerit nibh. Aenean porttitor molestie accumsan. </p>
			</div>
		</div>
    
		<div class="carousel-item">
			<!-- text on slide 3 -->
			<div class="d-none d-md-block">
				<p class="textslider"> Phasellus felis metus, ornare nec consectetur a, placerat eu felis. Phasellus quis enim orci. Etiam vel dui nisi, sed semper urna. Ut mattis dignissim lacus, vitae pretium neque volutpat nec. </p>
			</div>
		</div>
	</div>
	
	<h6>Name Goes Here 
		<p class="sec-3-last-text">
			Company name
		</p>
	</h6>
	
</div>	
	
<!-- End of carousel -->		
			
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>








			<!-- section 4 -->





<section class="container-fluid">
	<div class="container sec-4-container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="row">
					<div class="col-md-12 arrow-parent">
						<hr class="hr">
						<a href="#sliderTop">
							<div class="arrow">
								<i class="fas fa-arrow-up"> </i>
							</div>
						</a>
					</div>
				</div>		

			</div>
		</div>
	</div>	
</section>








			<!-- section 5 -->







<section class="container-fluid pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="row">

						<!-- col 1 -->
					<div class="col-md-3 sec5cols">
						<div class="row">
							<div class="col-md-12">
								<p class="sec5-col1-p"> Lorem Ipsum Dolor </p>
								<div class="progress">
 									<div class="progress-bar progress" style="width:20%"></div>
								</div>
							</div>

							<ul class="pt-3 sec5-ul">
								<li class="li"> 
									<a href="#" class="a"> Home Page </a>
								</li>

								<li class="li"> 
									<a href="#" class="a"> Our Services </a>
								</li>

								<li class="li"> 
									<a href="#" class="a"> Meet The Team</a>
								</li>

								<li class="li"> 
									<a href="#" class="a"> Our Blog </a>
								</li>

								<li class="li"> 
									<a href="#" class="a"> Contact Us </a>
								</li>
							</ul>
						</div>
					</div>
				
						<!-- col 2 -->
					
					<div class="col-md-3 sec5cols">
						<div class="row">
							<div class="col-md-12">
								<p class="sec5-col1-p"> Lorem Ipsum Dolor </p>
								<div class="progress">
 									<div class="progress-bar progress" style="width:20%"></div>
								</div>
							</div>

							<div class="row pt-4">
								<div class="col-md-12">
									<p class="sec5-col2-p1">
										To sign-up for our newsletter simply enter your email below
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<form action="#" method="POST">
										<input type="email" name="mail" placeholder="Email Here" id="input">
										<input type="submit" name="btn" id="form-Btn">
									</form>
								</div>
							</div>

							<div class="row pt-4">
								<div class="col-md-12">
									<p> Follow us in the social networks </p>
									<i class="icons fab fa-facebook-f"> </i>
									<i class="icons fab fa-pinterest"> </i>
									<i class="icons fab fa-twitter"> </i>
									<i class="icons fas fa-basketball-ball"> </i>
									<i class="icons fab fa-linkedin-in"> </i>
									<i class="icons fab fa-google-plus-g"> </i>
								</div>
							</div>

						</div>
					</div>
						<!-- col 3 -->
					
					<div class="col-md-3 sec5cols">
						<div class="row">
							<div class="col-md-12">
								<p class="sec5-col1-p"> Lorem Ipsum Dolor </p>
								<div class="progress">
 									<div class="progress-bar progress" style="width:20%"></div>
								</div>
 	
 									<ul class="pt-3 sec5-ul">
										<li class="li"> 
											<i class="fa fa-arrow-right" aria-hidden="true"> </i>
											<a href="#" class="a"> Quisque porta scelerisque </a>
										</li>

										<li class="li"> 
											<i class="fa fa-arrow-right" aria-hidden="true"> </i>
											<a href="#" class="a"> Sit amet interdum nisi semper </a>
										</li>
	
										<li class="li">
											<i class="fa fa-arrow-right" aria-hidden="true"> </i> 
											<a href="#" class="a"> Etiam eu hendrerit nibh </a>
										</li>

										<li class="li">
											<i class="fa fa-arrow-right" aria-hidden="true"> </i> 
											<a href="#" class="a"> Aenean porttitor molestie </a>
										</li>

										<li class="li"> 
											<i class="fa fa-arrow-right" aria-hidden="true"> </i>
											<a href="#" class="a"> Consectetur adipiscing elit </a>
										</li>
									</ul>


							</div>
						</div>
					</div>

						<!-- col 4 -->
					<div class="col-md-3 sec5cols">
						<div class="row">
							<div class="col-md-12">
								<p class="sec5-col1-p"> Lorem Ipsum Dolor </p>
								<div class="progress">
 									<div class="progress-bar progress" style="width:20%"></div>
								</div>

								<p class="pt-3">
									Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet pulvinar dapibus, dui leo.
								</p>

								<p>
									Street Name & Number Town
									<br>
									Postcode/Zip
								</p>
							
								<p>
									<i class="far fa-stopwatch"> </i> Mon. - Fri. 9:00am - 7:00pm
								</p>

								<p>
									<i class="fas fa-phone"> </i>  1001000 1101001
								</p>
							</div>
						</div>
					</div>

				</div>
				


			</div>
		</div>
	</div>
</section>







			<!-- section 6 -->





<section class="container-fluid sec6-cont">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sec6-parrent">
				
				<hr>
				<button class="sec6-btn"> <i class="fas fa-sync xx">  </i> Transform  </button>

			</div>
		</div>
	</div>
</section>






			<!-- footer 7 -->





<footer class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="row footer-parent">
					<div class="col-md-12 footer-child">
						<p class="footer-p">
							Copyright © 2009 - 2020. All Rights Reserved | 
						</p>
						<a href="#" class="footer-a"> Link1 / </a>
						<a href="#" class="footer-a"> Link2 / </a>
						<a href="#" class="footer-a"> Link3 / </a>
						<a href="#" class="footer-a"> Link4 / </a>
						<a href="#" class="footer-a"> Link5 </a>
					</div> 
					
					
				</div>

			</div>
		</div>
	</div>
</footer>






</body>
</html>