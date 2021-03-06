<!doctype html>
<html lang="en">
	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<!-- custom CSS stylesheet -->
		<link rel="stylesheet" href="../css/style.css" type="text/css" />

		<!-- LINK YOUR CSS FILES DOWN HERE -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>



		<title>Dayn Augustsons website</title>
	</head>
	<body>

		<!-- This sets up my nav bar grabed this code from getbootstrap.com -->
		<header>
		<nav class="navbar navbar-expand-md navbar-primary color4">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<!--<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					<li class="nav-item">
						<a class="nav-link" href="#">Testimonials</a>
					<li class="nav-item">
						<a class="nav-link" href="#">Portfolio</a>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>-->
			</div>
		</nav>
		</header>

		<!--This is the Welcome to my page with a background picture -->
		<section>
			<div class = "container-fluid backsplashimg">
				<div class="row-fluid">
					<div class="column">
						<div class="container">
							<h1 class="display-3 text-center font-weight-bold">Dayn Augustson</h1>
							<p class ="text-center font-weight-bold">Fullstack Web Developer</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- This is the about me section -->
		<section class="py-4 color4">
			<div class="container">
				<div  class="row">
					<div class="col-sm-2">
						<img class="img-fluid rounded-circle width" src="../images/DaynHeadShot1.jpg" alt="responsive image">

					</div>
					<div class="col-sm-10">
						<h2 class="text-center front-weight-bold">About me</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores eveniet excepturi, facilis ipsum itaque quae repellat! Aliquid consequatur, deleniti ducimus est, facilis magnam minus nihil quia quidem, rerum similique? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores eveniet excepturi, facilis ipsum itaque quae repellat! Aliquid consequatur, deleniti ducimus est, facilis magnam minus nihil quia quidem, rerum similique?</p>
					</div>
				</div>
			</div>

		</section>


		<!-- This is the Testimonials-->
		<!--<section class="py-3 color2">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<h2 class="text-center front-weight-bold">Testimonials</h2>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="frist" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="second" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="third" alt="Third slide">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->

		<!--This is Profile section-->
				<section class="py-3 color1">
					<h2 class="text-left front-weight-bold">Profile</h2>

					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3">
								<div class="card border-primary">
								<div class="card "></div>
								<div class="card-header">
									<h5 class="text-center front-weight-bold">Capstone Project</h5>
								</div>
								<div class="card-body color2">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto debitis, deleniti dolor earum exercitationem hic laborum minus molestias nostrum, nulla odit omnis perspiciatis quaerat quasi, rerum sit unde veritatis vitae!
								</div>
								</div>

							</div>

							<div class="col-lg-3">
								<div class="card border-primary">
									<div class="card-header">
										<h5 class="text-center front-weight-bold">Coming Soon</h5>
									</div>
									<div class="card-body color2">
										<img class="img-fluid " src="../images/Work_In_Progress2.png" alt="responsive image">
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div class="card border-primary">
									<div class="card-header">
										<h5 class="text-center front-weight-bold">Coming Soon</h5>
									</div>
									<div class="card-body color2">
										<img class="img-fluid " src="../images/Work_In_Progress2.png" alt="responsive image">
									</div>
								</div>
							</div>


							<div class="col-lg-3">
								<div class="card border-primary">
									<div class="card-header">
										<h5 class="text-center front-weight-bold">Coming Soon</h5>
									</div>
									<div class="card-body color2">
										<img class="img-fluid " src="../images/Work_In_Progress2.png" alt="responsive image">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

		<!--This is contact section-->
<section>
	<form id="contact-form" action="php/mailer.php" method="post">
	<div class="container-fluid color1" id="contact-section" >
		<div class="container color4">
			<div class="row ml-1">
				<div class="column pt-5 mb-5 pb-5 col-12">
				<h2 class="text-center front-weight-bold">Contact Me</h2>

				<div class="form-group row pl-3 pr-3">
					<label for="name">Name</label>
					<div class="input-group">
					<input type="text" class="form-control" id="contactFormName" name="contactFormName" placeholder="Name">
				</div>
				</div>

				<div class="form-group row pl-3 pr-3">
					<label for="email">Email</label>
					<div class="input-group">
					<input type="email" class="form-control" id="contactFormEmail" name="contactFormEmail" placeholder="Email">
				</div>
				</div>

				<div class="form-group row pl-3 pr-3">
					<label for="subject">Subject</label>
					<div class="input-group">
					<input type="text" class="form-control" id="contactFormSubject" name="contactFormSubject" placeholder="Subject">
				</div>
				</div>

				<div class="form-group row pl-3 pr-3">
					<label for="message">Message</label>
					<div class="input-group">
					<textarea class="form-control" id="contactFormMessage" name="contactFormMessage" placeholder="Type message here!" rows="5"></textarea>
				</div>
				</div>

						<div class="g-recaptcha" data-sitekey="6LfttX0UAAAAAIDCeWE097oPmDTY9qGAVdbfKgoh"></div>

						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>
					<div id="output-area"></div>
					</div>
				</div>
		</div>
	</div>



</section>

		<footer class="py-3 color1">
			<div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-md-1">
						<a href="https://github.com/Daugustson" target="_blank"><i class="fab fa-github fa-2x"></i></a>
					</div>
					<div class="col-md-1">
						<a href="https://www.linkedin.com/in/dayn-augustson-389154142/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
					</div>
					<div class="col-md-1">
						<a href="https://bootcamp-coders.cnm.edu/~daugustson/pwp1-dayn/images/Dayn%20Augustson%20Resume%2011-15-2018.pdf" target="_blank">Resume</a>
					</div>
				</div>
			</div>

		</footer>


	</body>

</html>
