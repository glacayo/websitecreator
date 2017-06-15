<footer class="footer " id="footer">
				<?php if ($page_name!="contact.php") {?>
				<div class="footer-widgets bgFooter t_white">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-4">
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Contact Us</h3><hr>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<li>
												<i class="fa fa-map-marker"></i>
												<span class="info-item">
													<?php echo "$Address";?>
												</span>
											</li>
											<li>
												<i class="fa fa-map-marker"></i>
												<span class="info-item">
													<?php echo "$Cover";?>
												</span>
											</li>
											<?php if(!empty($Phone)){ ?>
											<li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													<a href="tel:<?php echo "$Phone";?>" title="<?php echo "$Phone";?>"><?php echo "$Phone";?></a>
												</div>
											</li>
											<?php } ?>
											<?php if(!empty($Phone2)){ ?>
											<li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													<a href="tel:<?php echo "$Phone2";?>" title="<?php echo "$Phone2";?>"><?php echo "$Phone";?></a>
												</div>
											</li>
											<?php } ?>
											<?php if(!empty($Mail)){ ?>
											<li>
												<i class="fa fa-envelope"></i>
												<span class="info-item">
													<a href="mailto:<?php echo "$Mail";?>" title="<?php echo "$Mail";?>"><?php echo "$Mail";?></a>
												</span>
											</li>
											<?php } ?>
											<?php if(!empty($Mail2)){ ?>
											<li>
												<i class="fa fa-envelope"></i>
												<span class="info-item">
													<a href="mailto:<?php echo "$Mail2";?>" title="<?php echo "$Mail2";?>"><?php echo "$Mail2";?></a>
												</span>
											</li>
											<?php } ?>

										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 hidden-xs">
								<div class="contacts-widget widget widget__footer">
									<p>&nbsp;</p><br>
									<div class="widget-content">
										<ul class="contacts-info-list">

											<li>
												<i class="fa fa-clock-o"></i>
												<div class="info-item">
													<?php echo "$Schedule";?>
												</div>
											</li>
											<li>
												<i class="fa fa-file"></i>
												<div class="info-item">
													<?php echo "$Estimates";?>
												</div>
											</li>
											<li>
												<i class="fa fa-user"></i>
												<div class="info-item">
													<?php echo "$Bilingual" ?>
												</div>
											</li>
											<li>
												<i class="fa fa-check"></i>
												<div class="info-item">
													<?php echo "$Phrase1" ?>
												</div>
											</li>
											<li>
												<i class="fa fa-money"></i>
												<div class="info-item">
													<?php echo "$Payment";?>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="clearfix visible-sm"></div>
							<div class="col-sm-6 col-md-4">
								<div class="widget_categories widget widget__footer">
									<h3 class="widget-title">Our Services</h3><hr>
									<div class="widget-content">
										<ul>
											<?php $i=1; ?>
											<?php do { ?>
											<li><a href="services.php" title="<?php echo $SN[$i];?>"><?php echo $SN[$i];?></a></li>
											<?php $i++; ?>
											<?php } while ( $i <= 4 ); ?>
											<li><a href="services.php" title="Read more">Read more...</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="footer-copyright b_black" itemscope itemtype="http://schema.org/WPFooter">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-4" itemprop="copyrightHolder">
								Copyright &copy; <span itemprop="copyrightYear"><?php echo @date('Y');?></span>  <a href="index.php" title="Home" itemprop="creator"><?php echo "$Company";?></a> &nbsp;| &nbsp;All Rights Reserved
							</div>
							<div class="col-sm-6 col-md-8">
								<div class="social-links-wrapper">
									<span class="social-links-txt">Connect with us</span>
									<ul class="social-links social-links__dark">
										<li><a href="<?php echo "$facebook";?>" title="facebook" target="_blank" class="b_blue-2"><i class="fa fa-facebook t_white"></i></a></li>
										<li><a href="<?php echo "$twitter";?>" title="twitter" target="_blank" class="b_blue-1"><i class="fa fa-twitter t_white"></i></a></li>
										<li><a href="<?php echo "$googleplus";?>" title="googleplus" target="_blank" class="b_red-2"><i class="fa fa-google-plus t_white"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script async="async" src="js/jquery-3.1.0.min.js"></script>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script async="async" src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script async="async" src="vendor/modernizr.js"></script>
	<script src="vendor/jquery-1.11.0.min.js"></script>
	<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
	<script src="vendor/bootstrap.js"></script>
	<script src="vendor/bootstrap-hover-dropdown.js"></script>
	<script src="vendor/jquery.hoverIntent.minified.js"></script>
	<script src="vendor/jquery.flickrfeed.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.sloppy-masonry.min.js"></script>
	<script src="vendor/isotope/jquery.imagesloaded.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/jquery.fitvids.js"></script>
	<script src="vendor/jquery.appear.js"></script>
	<script src="vendor/jquery.stellar.min.js"></script>
	<script src="vendor/snap.svg-min.js"></script>
	<script src="vendor/mediaelement/mediaelement-and-player.min.js"></script>

	<script src="js/custom.js"></script>


	<!-- jQuery REVOLUTION Slider  -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script>
		jQuery(document).ready(function() {
			jQuery('.tp-banner').revolution({
				dottedOverlay:"filled",
				delay:6000,
				startwidth:1140,
				startheight:556,
				hideThumbs:10,
				fullWidth:"on",
				forceFullWidth:"off",
				hideCaptionAtLimit:480,
				//navigationType: "none",
				soloArrowLeftHOffset:20,
				soloArrowRightHOffset:20,
				navigationType:"bullet",
				navigationArrows:"solo", // nexttobullets, solo (old name verticalcentered), none
				navigationStyle:"round"  // round, square, navbar, round-old, square-old, navbar-old 
			});
	   });
	</script>

</body>
</html>