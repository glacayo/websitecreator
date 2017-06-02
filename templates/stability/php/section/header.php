<!DOCTYPE HTML>
<?php include 'php/text.php';?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>

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
	<meta name="description" content="<?php echo $ExDescription;?>">
	<meta name="author" content="http://www.eliteonlinemedia.com/">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<?php include 'php/css_minified.php' ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="vendor/respond.min.js"></script>
	<![endif]-->

	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	<link rel="icon" type="image/png" href="images/favicon.png"/>
	<?php include 'php/seo_home.php';?>
	<script type="text/javascript">
	   onload=function() {
	   document.getElementById('dir').value = location.href;
	   }
	</script>

	
</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>

	<div class="site-wrapper">
		<header class="header header-centered header-menu-fullw header-top-clean">
			<div class="header-main">
				<nav class="navbar navbar-default fhmm">
					<div class="navbar-header">
						<div class="container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
								<i class="fa fa-bars"></i>
							</button>
							<div class="logo visible-xs visible-sm">
								<a href="index.php" title="logo"><img src="images/logo.png" alt="<?php echo "$Company";?>" class="logo-responsive"></a>
							</div>
							<div class="row visible-md visible-lg">
								<div class="col-md-6">
									<div class="logo">
										<a href="index.php" title="logo"><img src="images/logo.png" alt="<?php echo "$Company";?>" class="logo-responsive"></a>
									</div>
								</div>	
								<div class="col-md-6 bars text-right needhelp">
									<h3>Need Help? <span class="phoneshow"><a href="<?php echo $PhoneRef;?>" class="t_orange-4"><?php echo $Phone;?></a></span></h3>
									<h4 class="t_gray-5"><?php echo $Schedule;?></h4>
								</div>
							</div>
						</div>
					</div>
					<div id="main-nav" class="navbar-collapse collapse b_orange-4 bottom-shadow" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<div class="container">
							<ul class="nav navbar-nav">
								<li itemprop="name" class="<?php echo ($page_name=='index.php')?'active':'';?>">
								   <a itemprop="url" href="index.php" title="Home" class="t_white uppercase">Home</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='about.php')?'active':'';?>">
									   <a itemprop="url" href="about.php" title="About Us" class="t_white uppercase">About Us</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='services.php')?'active':'';?>" >
									   <a itemprop="url" href="services.php" title="Services" class="t_white uppercase">Services</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='portfolio.php')?'active':'';?>" >
									   <a itemprop="url" href="portfolio.php" title="Portfolio" class="t_white uppercase">Portfolio</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='contact.php')?'active':'';?>">
									   <a itemprop="url" href="contact.php" title="Contact Us" class="t_white uppercase">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<div class="main" role="main">