<?php
    //echo json_encode($_POST);

    //cria arquivo
    $my_file = 'file.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = 'username: '.$_POST['username'].' plan: '.$_POST['plan'].''."\n";
    fwrite($handle, $data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Host Jacinto</title>
	<meta name="description" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/flaticon.css" rel="stylesheet">
	<link href="css/fopen-sans.css" rel="stylesheet">
	<link href="css/raleway-webfont.css" rel="stylesheet">
	<link href="css/lato.css" rel="stylesheet">
	<link href="css/idangerous.swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="img/favicon.ico" rel="shortcut icon">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
</head>
<body>

	<div class="wpc-menu-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 no-padding">
					<a href="index.php"><img src="img/logo.png" alt="logo" class="logo-menu"></a>
				</div>
			</div>
		</div>
	</div>

	
	<!-- 
	*******************
		TOP BANNER
	****************** 
-->

<div class="wpc-top-header overlay img-bg">
	<img src="img/top-banner.jpg" alt="banner" class="hidden">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="wrapper">
					<div class="heading">Jacinto Host</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- 
	*******************
		HOSTING PLANS
	*******************
-->

<div class="wpc-hosting-plans wpc-pricing classic">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading-section">
					Solicitação enviada com Sucesso!
				</div>
				<p>Aguarde o email de confirmação!</p>
			</div>
		</div>
	</div>
</div>

	<!-- 
	*******************
		FOOTER
	****************** 
-->

<footer class="wpc-footer">
	<div class="container no-padding-sm">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<a href="/projects/hostguru/whmcs/index.php"><img src="img/logo-light.png" alt="logo"></a>
				<div class="footer-info">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					Officiis at, voluptatem similique tempora voluptate quia in ea minima earum.
				</div>
				<p class="contact"><i class="flaticon-location"></i> 2901 Some Road, City, Country</p> 
				<p class="contact"><a href="mailto:info@hostguru.com"><i class="flaticon-letter"></i>info@hostguru.com</a></p> 
				<p class="contact"><a href="tel:+1234567890"><i class="flaticon-technology-1"></i>1 -234 -456 -7890 </a></p>
			</div>
		</div>          
	</div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/jquery.viewportchecker.min.js"></script>
<script src="js/jquery.circliful.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>