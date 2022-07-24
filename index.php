<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>techsolutions-bd</title>
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="top-manu-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 col-xs-9 col-xs-offset-3">
					<div class="top-nav-social-icon">
						<div class="row">
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="support-section">
									<ul>
										<li><a href="#">Support</a></li>
										<li><a href="#">Upload CV</a></li>
										<li><a href="#">live chat</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="top-social-icon">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-skype"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- /.top-manu-section -->
	<div class="main-manu-section">
		<div class="container">
			<nav class="navbar navbar-default">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">
			      	<img src="images/logo/logo.png" alt="">
			      	<!-- <h2>Logo</h2> -->
			      </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse nav-open-close" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Home</a></li>
			        <li><a href="#">Projects</a></li>
			        <li><a href="#">Courses</a></li>
			        <li><a href="#">Team member</a></li>
			        <li><a href="#">Contact</a></li>
			        <li><a href="#">Login</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
		</div><!-- /.container -->
	</div><!-- /.main-manu-section -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.navbar-toggle').click(function(){
				$(this).toggleClass('close');
				$('.nav-open-close').toggleClass('show');
			});
		});
	</script>
</body>
</html>