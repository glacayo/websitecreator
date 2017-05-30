<!DOCTYPE HTML>
<?php include 'php/text.php' ?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>
<?php include 'setting.php' ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php 
		  if($page_name=='index.php'){echo "Home";}
		  elseif ($page_name=='about.php') {echo "About";}
		  elseif ($page_name=='services.php') {echo "Services";}
		  elseif ($page_name=='portfolio.php') {echo "Portfolio";}
		  elseif ($page_name=='testimonials.php') {echo "Testimonials";}
		  elseif ($page_name=='blog.php') {echo "Blog";}
		  elseif ($page_name=='blog-page.php') {echo "Blog Page";}
		  elseif ($page_name=='landing-page.php') {echo "Landing Page";}
		  elseif ($page_name=='contact.php') {echo "Contact Us";}?> - <?php echo "$Company"; 
		?>
	</title>
	<meta name="description" content="company_description">
	<meta name="author" content="http://www.eliteonlinemedia.com/">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

	<?php include 'php/section/cannonical.php' ?>
	<script src="js/jquery-3.1.0.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
	<link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" />
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">

    <link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/animate.min.css">

	<link rel="stylesheet" href="css/skins/red.css">
	
	<link rel="stylesheet" href="css/fonts/mainfont/stylesheet.css">
	<link rel="stylesheet" href="css/custom.css">

	<script src="vendor/modernizr.js"></script>


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="vendor/respond.min.js"></script>
	<![endif]-->

	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<link rel="shortcut icon" href="images/favicon.ico">
	<?php include 'php/seo_home.php';?>
	
</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>

	<div class="site-wrapper">
		<header class="header header-top-colored menu-colored">
			<div class="header-top b_red-4 t_white">
				<div class="container">
					<div class="header-top-left">
						<ul class="header-top-nav">
							<li><a href="services.php" title="Address" class="t_white"><i class="fa fa-home t_white"></i> <?php echo "$Address";?></a></li>
							<li><a href="services.php" title="Covering" class="t_white"><i class="fa fa-map-marker t_white"></i> <?php echo "$Cover";?></a></li>
						</ul>
					</div>
					<div class="header-top-right">
						<span class="info-item"><a href="<?php echo "$MailRef";?>" title="Mail" class="t_white"><i class="fa fa-envelope t_white"></i> <?php echo "$Mail";?></a></span>
						<span class="info-item"><a href="<?php echo "$PhoneRef";?>" title="Phone" class="t_white"><i class="fa fa-phone t_white"></i> <?php echo "$Phone";?></a></span>
					</div>
				</div>
			</div>
			<div class="header-main">
				<div class="container">
					<nav class="navbar navbar-default fhmm" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
								<i class="fa fa-bars"></i>
							</button>
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" alt="<?php echo "$Company" ?>"></a>
							</div>
						</div>

						<div id="main-nav" class="navbar-collapse collapse" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<div class="container">
							<ul class="nav navbar-nav">
								<li itemprop="name" class="<?php echo ($page_name=='index.php')?'active':'';?>">
								   <a itemprop="url" href="index.php" title="Home" class="uppercase">Home</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='about.php')?'active':'';?>">
									   <a itemprop="url" href="about.php" title="About Us" class="uppercase">About Us</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='services.php')?'active':'';?>" >
									   <a itemprop="url" href="services.php" title="Services" class="uppercase">Services</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='portfolio.php')?'active':'';?>" >
									   <a itemprop="url" href="portfolio.php" title="Portfolio" class="uppercase">Portfolio</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='testimonials.php')?'active':'';?>">
									   <a itemprop="url" href="testimonials.php" title="Testimonials" class="uppercase">Testimonials</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='blog.php')?'active':'';?>">
									   <a itemprop="url" href="blog.php" title="Blog" class="uppercase">Blog</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='contact.php')?'active':'';?>">
									   <a itemprop="url" href="contact.php" title="Contact Us" class="uppercase">Contact Us</a>
								</li>
								<li itemprop="name" class="dropdown <?php echo ($page_name=='landing-page.php')?'active':'';?>">
									<a itemprop="url" href="#" title="DropDown" data-toggle="dropdown" class="dropdown-toggle uppercase">Dropdown<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li itemprop="name" class="<?php echo ($page_name=='landing-page.php')?'active':'';?>"><a itemprop="url" href="landing-page.php" title="Landing Page" class="uppercase">Landing Page</a></li>
										<li itemprop="name" class="<?php echo ($page_name=='404.php')?'active':'';?>"><a itemprop="url" href="404.php" title="Error404" class="uppercase">Error404</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					</nav>
				</div>
			</div>
		</header>
		<div class="main" role="main">