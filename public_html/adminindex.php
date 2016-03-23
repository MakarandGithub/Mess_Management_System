<?php
require 'ses.php';

//$_SESSION['fromindex'] = "admin";
if($_SESSION['fromlogin'] != "admin")
{
   //send them back
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title><?php echo $user_data['name']; ?></title>
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/all.css" />
	<link rel="stylesheet" href="css/screen.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div class="wrapper-holder">
			<header id="header">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a class="active" href="adminindex.php">Home</a></li>
							<!--li><a href="myskills.html">My skills</a></li-->
							<li><a href="adminportfolio.php">Options</a></li>
							<li><a href="logout.php">Log Out</a></li>
						</ul>
					</nav>
				<h1 class="logo"><?php echo $user_data['name']; ?></h1>
				<h2 class="slogan">welcome to<br>mess management system</h2>
			</header>
		</div>
		
		<footer id="footer">
			<div class="footer-content">
				<ul class="social">
					<li class="email"><a href="#">Email</a></li>
					<li class="facebook"><a href="#">Facebook</a></li>
					<li class="google"><a href="#">Google+</a></li>
					<li class="twitter"><a href="#">Twitter</a></li>
					<li class="pinterest"><a href="#">Pinterest</a></li>
				</ul>
				<!--p class="copy">Copyright 2016 IIT Jodhpur. All rights reserved.</p-->
			</div>
		</footer>	
	</div>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/cells-by-row.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>