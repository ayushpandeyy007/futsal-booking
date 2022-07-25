<?php
    SESSION_start();
    if(isset($_SESSION['name'])){
        include_once "include/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Futsal Booking</title>
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/all.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="logo"><a href="#"><img src="images/lo.png" alt="Sports"></a></div>
				<nav id="nav">
					<div class="opener-holder">
						<a href="#" class="nav-opener"><span></span></a>
					</div>
					<div>
                        <p class="btn btn-primary rounded"><?php echo $_SESSION['name']?></p>  
                    </div> 
                    
					<div class="nav-drop">
						<ul>
							<li class="active visible-sm visible-xs"><a href="#">Home</a></li>
							<li><a href="#">HOME</a></li>
							<li><a href="about.php">About US</a></li>
							<li><a href="ground.php">Ground</a></li>
							<li><a href="contact.php">Contact US</a></li>
						</ul>
						
					</div>
				</nav>
			</div>
		</header>
	<section class="visual">
		<div class="container">
			<div class="text-block">
				<div class="heading-holder">
					<h1>Lets B00k and Play</h1>
				</div>
				<p class="tagline">A happier & healthier life is waiting for you!</p>
				<span class="info">Get motivated now</span>
			</div>
		</div>
		<img src="images/img-bg-02.jpg" alt="" class="bg-stretch">
	</section>

	
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.main.js"></script>
</body>
</html>
<?php
    }
    else{
        echo mysqli_error($conn);
    }
?>