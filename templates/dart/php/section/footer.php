	<section class="b_gray-6  t_white">
		<?php if ($page_name!='contact.php') { ?>
			<footer class="bars b_brown-7">
			<div class="">
				<div class="container">
					<div class="col-md-12 text-center t_white uppercase">
						<h4>
							<i class="fa fa-home"></i> <?php echo $Address;?> - <?php if(!empty($Phone)): ?><a href="tel:<?php echo $Phone;?>" class="t_white"><i class="fa fa-phone"></i> <?php echo $Phone;?></a><?php endif; ?> - <?php if(!empty($Phone2)): ?><a href="tel:<?php echo $Phone2;?>" class="t_white"><i class="fa fa-phone"></i> <?php echo $Phone2;?></a><?php endif; ?> - <i class="fa fa-check"></i> <?php echo $Services;?><br>
							<strong>Schedule: </strong><?php echo $Schedule;?>
						<!--<br><strong class="uppercase"><?php echo $Payment;?></strong> <img src="images/cards.png">-->
						</h4>
					</div>
				</div>
			</div>
			</footer>
		<?php } ?>
		<div class="footer-bottom b_black">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wow fadeInRight">
						<div class="bars2">
	         			 	<p>© <span><?php echo @date('Y');?></span> <span><?php echo $Company;?></span>  Copy Rights Reserved</p>
	        			</div>
					</div>
				</div>
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
	<!--<script type="text/javascript" src="js/hotkey.js"  async></script>-->
	</div>
</body>
</html>