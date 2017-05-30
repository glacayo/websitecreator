<div class="container">
	<section class="bars" data-animation="fadeInUp">
		<div class="title-accent">
			<h3>Latest Works</h3>
		</div>
		<div class="prev-next-holder text-right">
			<a title="prev" class="prev-btn" id="carousel-prev"><i class="fa fa-angle-left"></i></a>
			<a title="next" class="next-btn" id="carousel-next"><i class="fa fa-angle-right"></i></a>
		</div>
		<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
			<div id="owl-carousel" class="owl-carousel">
				<?php for ($i=1; $i <=12 ; $i++) {?>
				<div class="project-item">
					<div class="project-item-inner">
						<figure class="alignnone project-img">
							<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image"/>
							<div class="overlay">
								<a href="portfolio.php" title="Go To: Portfolio" class="dlink"><i class="fa fa-link"></i></a>
								<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Zoom: Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
							</div>
						</figure>
						<div class="project-desc b_gray-7">
							<h4 class="title uppercase"><a href="contact.php" title="<?php echo "$Company";?>" class="t_white" ><?php echo "$Company";?></a></h4>
							<span class="desc t_gray-2"><i class="fa fa-phone"></i> <?php echo "$Phone";?></span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>