<?php
	$param = isset($_GET["id"]) ? ucfirst($_GET["id"]) : "";
	if($param == "") {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <title>Timor Leste News</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/bootstrap-social.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/docs/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
		<link href="bootstrap/jquery.capty.css" rel="stylesheet">
		<link rel="stylesheet" href="owl/owl.carousel.css">		

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>		
		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
		
		<style>
			body
			{
				background-color: #f5f5f5;
			}
		</style>
  </head>

  <body style="padding-top:0px">
		<div class="col-lg-12">
    <!-- Fixed navbar -->
    <?php include "menu-header.php"; ?>

		</div>
		
		
		<section 
			<?php 
			
				if($param == "News")
				{
					echo "class='section-news'"; 
				}
				else if($param == "Finance")
				{
					echo "class='section-finance'"; 
				}
				else if($param == "Sport")
				{
					echo "class='section-sport'"; 
				}
				else if($param == "Health")
				{
					echo "class='section-health'"; 
				}
				else if($param == "Tech")
				{
					echo "class='section-tech'"; 
				}
				else if($param == "Automotive")
				{
					echo "class='section-automotive'"; 
				}
			?>>
			<div class="row">
					<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="col-lg-12">
									<div class="col-lg-12">
										<h1><?php echo $param; ?></h1>
									</div>
									<div class="col-lg-4">
										<h4>Today top story</h4>
										<img src="images/news/1.jpg" width="100%"/>
										<h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy .</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										<p>
											<small style="color:#888"><i class="fa fa-clock-o"></i> 6 days ago</small>
										</p>
									</div>
									
									<div class="col-lg-4" style="border-right:1px solid #e5e5e5; border-left:1px solid #e5e5e5">
										<h4>Popular this week</h4>
										<div class="col-lg-4">
											<img src="images/7.png" width="100%"/>
										</div>
										
										<div class="col-lg-8">
											<p>
												<a href="#" style="color:white">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</a>
											</p>
											<p>
												<small style="font-size:10px;"><i class="fa fa-clock-o"></i> 2 days ago</small>
											</p>
										</div>
										<div class="col-lg-12">
											<hr>
										</div>										
										
										<div class="col-lg-4">
											<img src="images/6.png" width="100%"/>
										</div>
										
										<div class="col-lg-8">
											<p>
												<a href="#" style="color:white">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</a>
											</p>
											<p>
												<small style="font-size:10px;"><i class="fa fa-clock-o"></i> 2 days ago</small>
											</p>
										</div>
										<div class="col-lg-12">
											<hr>
										</div>
										
										<div class="col-lg-4">
											<img src="images/8.png" width="100%"/>
										</div>
										
										<div class="col-lg-8">
											<p>
												<a href="#" style="color:white">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</a>
											</p>
											<p>
												<small style="font-size:10px;"><i class="fa fa-clock-o"></i> 2 days ago</small>
											</p>
										</div>
										<div class="col-lg-12">
											<hr>
										</div>
										
										<div class="col-lg-4">
											<img src="images/6.png" width="100%"/>
										</div>
										
										<div class="col-lg-8">
											<p>
												<a href="#" style="color:white">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</a>
											</p>
											<p>
												<small style="font-size:10px;"><i class="fa fa-clock-o"></i> 2 days ago</small>
											</p>
										</div>
										<div class="col-lg-12">
											<br><br>
										</div>
										
									</div>
									
									<div class="col-lg-4">
										<h4>Video</h4>
										<img src="images/vid.png" width="100%"/>
										
									</div>
									
								</div>
							</div>
					</div>
				</div>
		</section>
		
    <div class="col-lg-12">

			
						
						
					
			
			<div class="col-lg-12">
								
				<div class="col-lg-12">
						<br><br><br>
						<div class="row subcontent" style="padding-bottom:10px">
							<div class="col-lg-4">
								<img width="100%" src="images/news/1.jpg"/>
								
								<p class="caption-header">
									Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. 
								</p>
								
								<p>
									 congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus...
								</p>
								
								<small class="news-time"><i class="fa fa-clock-o"></i> 4 min ago</small>
							</div>
							<div class="col-lg-4">
								<img width="100%" src="images/news/2.jpg"/>
								
								<p class="caption-header">
									Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. 
								</p>
								
								<p>
									 congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus...
								</p>
								
								<small class="news-time"><i class="fa fa-clock-o"></i> 4 min ago</small>
							</div>
							<div class="col-lg-4">
								<img width="100%" src="images/news/3.jpg"/>
								
								<p class="caption-header">
									Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. 
								</p>
								
								<p>
									 congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus...
								</p>
								
								<small class="news-time"><i class="fa fa-clock-o"></i> 4 min ago</small>
							</div>
							<div class="col-lg-4">
								<img width="100%" src="images/news/5.png"/>
								
								<p class="caption-header">
									Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. 
								</p>
								
								<p>
									 congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus...
								</p>
								
								<small class="news-time"><i class="fa fa-clock-o"></i> 4 min ago</small>
							</div>
							<div class="col-lg-4">
								<img width="100%" src="images/news/6.jpg"/>
								
								<p class="caption-header">
									Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. 
								</p>
								
								<p>
									 congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus...
								</p>
								
								<small class="news-time"><i class="fa fa-clock-o"></i> 4 min ago</small>
							</div>
							<div class="col-lg-4">
								<img width="100%" src="images/news/7.jpg"/>
								
								<p class="caption-header">
									Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. 
								</p>
								
								<p>
									 congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus...
								</p>
								
								<small class="news-time"><i class="fa fa-clock-o"></i> 4 min ago</small>
							</div>
						</div>
				</div>
				
				
				<!--End Sport-->
				
				<div class="col-lg-12" >
					<br><br>
					<div class="col-lg-12" style="background-color:black;color:white;padding-bottom:30px;border-bottom:2px solid #dc241f">
						<div class="col-lg-6">
							<h1 style="font-family: 'Oswald', sans-serif;">TIMOR LESTE</h1>
							<br>
							<i class="fa fa-twitter fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-facebook fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-youtube fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-instagram fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-rss fa-2x"></i> 
							<br>
							<br>
							<p>"Quote of the day about Timor Leste" - <small style="color:#888"><i>quote source</i></small></p>
							<a class="btn btn-social btn-twitter" width="150px">
								<i class="fa fa-twitter"></i> Sign in with Twitter
							</a>
						</div>
						<div class="col-lg-6" align="right">
							
							<div style="word-spacing:15px;margin-top:20px">
								ABOUT JOB TEAM ADVERTISE PRIVACY TERMS FEEDBACK
							</div>
							<br>
							<br>
							<img src="images/timorleste.png" width="200px"/>
						</div>
						<div class="col-lg-12">
							<hr>
							<small style="color:#888">&copy; 2015 Timor Leste. All right reserved.</small>
						</div>
					</div>
				</div>
				
			</div>

    </div> <!-- /container -->
		

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.capty.min.js"></script>
		<script src="owl/owl.carousel.min.js"></script>
		<script src="js/search.js"></script>
		
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
		
		<script>
			$(document).ready(function(){
				$(".owl-carousel").owlCarousel({
				
					loop:true,
					margin:10,
					items: 3,					
					responsiveClass:true,
					responsive:{
							0:{
									items:1,
									nav:false
							},
							600:{
									items:3,
									nav:false
							},
							1000:{
									items:3,
									nav:false,
									loop:false
							}
					}
					
				});
			});
		</script>
  </body>
</html>
