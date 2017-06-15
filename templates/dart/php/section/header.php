<?php 
//Get Sercer URL
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];

 ?>
<!DOCTYPE HTML>
<?php include 'php/text.php';?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>
<?php include 'setting.php';?>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta charset="utf-8">
          <?php include 'php/section/cannonical.php';?>
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
          <link rel="shortcut icon" href="images/favicon.png">
          <?php include 'php/css_minified.php';?>
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
  </head>
<body>
  <div class="body-inner">
  <header id="header" class="navbar-fixed-top main-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="top-info">
            <ul class="pull-right">
              <?php if (!empty($Phone)) {?>
              <li><a href="tel:<?php echo $Phone;?>" class="btn btn-default b_green-2 t_white"><i class="fa fa-phone t_white"></i> Call Us: <?php echo $Phone;?></a></li>
              <?php } ?>
              <?php if (!empty($Phone2)) {?>
              <li><a href="tel:<?php echo $Phone2;?>" class="btn btn-default b_green-2 t_white"><i class="fa fa-phone t_white"></i> Call Us: <?php echo $Phone2;?></a></li>
               <?php } ?>
              <li><a href="mailto:<?php echo $Mail;?>" class="btn btn-default b_green-2 t_white"><i class="fa fa-envelope t_white"></i> <?php echo $Mail;?></a></li>
              <li class="social-icon">
                <a href="<?php echo $twitter;?>" title="Twitter" target="_blank" class="b_blue-1 padding-10">
                  <i class="fa fa-twitter t_white"></i>
                </a>
                <a href="<?php echo $facebook;?>" title="Facebook" target="_blank" class="b_blue-2 padding-10">
                  <i class="fa fa-facebook t_white"></i>
                </a>
                <a  href="<?php echo $googleplus;?>" rel="publisher" title="Google+" target="_blank" class="b_red-1 padding-10">
                  <i class="fa fa-google-plus t_white"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" style="background: none!important">
               <img class="img-responsive hidden-sm" src="images/logo.png" alt="logo"> 
               <img class="visible-sm" src="images/logo.png" alt="logo" width="50%"> 
              </a>                    
          </div>
          <nav class="collapse navbar-collapse clearfix " role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li itemprop="name" class="<?php echo ($page_name=='index.php')?'active':'';?>">
                 <a href="index.php" itemprop="url" title="Home" class="t_black uppercase">Home</a>
              </li>
              <li itemprop="name" class="<?php echo ($page_name=='about.php')?'active':'';?>">
                 <a href="about.php" itemprop="url" title="About Us" class="t_black uppercase">About Us</a>
              </li>
              <li itemprop="name" class="<?php echo ($page_name=='services.php')?'active':'';?>">
              <a href="services.php" itemprop="url" title="Services" class="t_black uppercase ">Services</a>
              <!-- <ul class="dropdown-menu">
                <li itemprop="name" class="<?php echo ($page_name=='tree-removal.php')?'active':'';?>"><a href="tree-removal.php" itemprop="url" title="Tree Removal " class="t_gray-3 uppercase">&nbsp;&nbsp;Tree Removal </a></li>
                <li itemprop="name" class="<?php echo ($page_name=='tree-trimming.php')?'active':'';?>"><a href="tree-trimming.php" itemprop="url" title="Tree Trimming " class="t_gray-3 uppercase">&nbsp;&nbsp;Tree Trimming </a></li>
                <li itemprop="name" class="<?php echo ($page_name=='tree-services.php')?'active':'';?>"><a href="tree-services.php" itemprop="url" title="Tree Services" class="t_gray-3 uppercase">&nbsp;&nbsp;Tree Services</a></li>
              </ul> -->
              <li itemprop="name" class="<?php echo ($page_name=='portfolio.php')?'active':'';?>" >
                    <a href="portfolio.php" itemprop="url" title="Portfolio" class="t_black uppercase">Portfolio</a>
                  </li>
             <!--  <li itemprop="name" class="<?php echo ($page_name=='testimonials.php')?'active':'';?>">
                    <a href="testimonials.php" itemprop="url" title="Testimonials" class="t_black uppercase">Testimonials</a>
                  </li>
              <li itemprop="name" class="<?php echo ($page_name=='blog.php')?'active':'';?>">
                    <a href="blog.php" itemprop="url" title="Blog" class="t_black uppercase">Blog</a>
                  </li> -->
              <li itemprop="name" class="<?php echo ($page_name=='contact.php')?'active':'';?>">
                   <a href="contact.php" itemprop="url" title="Contact Us" class="t_black uppercase">Contact Us</a>
              </li>
              <!-- <li itemprop="name" class="dropdown <?php echo ($page_name=='landing-page.php')?'active':'';?>">
                  <a href="#" itemprop="url" title="DropDown" data-toggle="dropdown" class="dropdown-toggle t_black uppercase">Dropdown<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li itemprop="name" class="<?php echo ($page_name=='landing-page.php')?'active':'';?>"><a href="landing-page.php" itemprop="url" title="Landing Page" class="t_gray-3 uppercase">Landing Page</a></li>
                    <li itemprop="name" class="<?php echo ($page_name=='404.php')?'active':'';?>"><a href="404.php" itemprop="url" title="Error404" class="t_gray-3 uppercase">Error404</a></li>
                  </ul>
              </li> -->
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
<?php if ($page_name!="index.php") {
  echo '<div id="inner-header"><img src="images/elements/banner-top.jpg" alt="top-banner" /></div>';
  }
  ;?>

  <?php if ($page_name!="index.php") {?>
    
    <section id="inner-title" class="negative-40 text-center">
     
        <div class="container">

          <div class="row">
            <div class="col-md-12">

              <div class="inner-title-content">
                 <?php include 'php/section/pagename.php';?>
            </div>
          </div>
        </div>
        </div>
     </section>
  <?php } ?>
  