<?php if ($page_name!="contact.php") {?>
<section class="b_blue-6 t_white">
<div class="container bars">
	<div class="row">
		<div class="col-md-4">
			<p><img src="images/logo.png" alt="logo" class="img-responsive"/></p>
			<?php echo $Ex2About;?>
			<a href="about.php" class="btn btn-md uppercase b_blue-1 t_white"><i class="fa fa-user"></i> more about us</a> 
			<a href="contact.php" class="btn btn-md uppercase b_blue-3 t_white"><i class="fa fa-envelope"></i> let us a message</a>
		</div>
		<div class="col-md-4">
			<h4 class="uppercase">get in touch</h4> <hr>
			<p><i class="fa fa-home"></i> <?php echo "$Address" ?></p>
			<p><i class="fa fa-phone"></i> <a href="<?php echo "$PhoneRef";?>" title="<?php echo "$Phone";?>"><?php echo "$Phone";?></a></p>
			<p><i class="fa fa-envelope"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>"><?php echo "$Mail";?></a></p>
			<p><i class="fa fa-clock-o"></i> <?php echo "$Schedule";?></p>
			<p><i class="fa fa-map-marker"></i> <?php echo "$Cover";?></p>
			<p><i class="fa fa-money"></i> <?php echo "$Payment";?></p>
			<img src="images/cards.png" itemprop="image" class="img-responsive" alt="credit-debit-cards">
			
		</div>
		<div class="col-md-4">
			<h4 class="uppercase">our services</h4> <hr>
			<a href="services.php" title="<?php echo $SN1;?>" class="t_white"><?php echo $SN1;?></a>&nbsp;/&nbsp;
			<a href="services.php" title="<?php echo $SN2;?>" class="t_white"><?php echo $SN2;?></a>&nbsp;/&nbsp;
			<a href="services.php" title="<?php echo $SN3;?>" class="t_white"><?php echo $SN3;?></a>&nbsp;/&nbsp;
			<a href="services.php" title="<?php echo $SN4;?>" class="t_white"><?php echo $SN4;?></a>&nbsp;/&nbsp;
			<a href="services.php" title="<?php echo $SN5;?>" class="t_white"><?php echo $SN5;?></a>&nbsp;/&nbsp;
			<a href="services.php" title="<?php echo $SN6;?>" class="t_white"><?php echo $SN6;?></a>
			<h4 class="uppercase">also find us</h4> <hr>
			<div class="row">
				<div class="col-md-4 col-sm-2 col-xs-12">
					<a href="<?php echo $homeadvisor;?>" target="_blank" title="homeadvisor"><img src="images/elements/homeadvisor.jpg" alt="homeadvisor" class="img-responsive"/></a>
				</div>
				<div class="col-md-4 col-sm-2 col-xs-12">
					<a href="<?php echo $houzz;?>" target="_blank" title="houzz"><img src="images/elements/houzz.jpg" alt="houzz" class="img-responsive"/></a>
				</div>
				<div class="col-md-4 col-sm-2 col-xs-12">
					<a href="<?php echo $buildzoom;?>" target="_blank" title="buildzoom"><img src="images/elements/buildzoom.jpg" alt="buildzoom" class="img-responsive"/></a>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-offset-2 col-md-4 col-sm-2 col-xs-12">
					<a href="<?php echo $yelp;?>" target="_blank" title="yelp"><img src="images/elements/yelp.jpg" alt="yelp" class="img-responsive"/></a>
				</div>
				<div class="col-md-4 col-sm-2 col-xs-12">
					<a href="<?php echo $yellowpages;?>" target="_blank" title="yellowpages"><img src="images/elements/yellowpages.jpg" alt="yellowpages" class="img-responsive"/></a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php echo $GoogleMap;?>
<?php } ?>


<section class="b_blue-7 t_white">
<div class="container bars2">
	<div class="col-md-6 text-center">© <span><?php echo date('Y');?></span> <span><?php echo $Company;?></span>  Copy Rights Reserved </div>
	<div class="col-md-6 text-center">
		<a href="<?php echo $twitter;?>" target="_blank" class="btn-sm btn b_blue-1" title="twitter"><i class="fa fa-twitter t_white"></i></a>&nbsp;
		<a href="<?php echo $facebook;?>" target="_blank" class="btn-sm btn b_blue-2" title="facebook"><i class="fa fa-facebook t_white"></i></a>&nbsp;
		<a href="<?php echo $googleplus;?>" target="_blank" class="btn-sm btn b_red-2" title="googleplus"><i class="fa fa-google-plus t_white"></i></a>
	</div>
</div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js" async></script>
	<script type="text/javascript" src="js/owl.carousel.js"  async></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"  async></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"  async></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js" async></script>
	<script type="text/javascript" src="js/wow.min.js"  async></script>
	<script type="text/javascript" src="js/smoothscroll.js" async ></script>
	<script type="text/javascript" src="js/jquery.easy-pie-chart.js" async ></script>
	<script type="text/javascript" src="js/custom.js"  async></script>
	<!-- <script type="text/javascript" src="js/hotkey.js"  async></script> -->
