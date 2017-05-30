<div class="b_gray-1">
	<div class="container bars">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 style="margin-bottom:2px!important;" class="big-title"><span>Our</span> Services</h2>
			<h4><em><?php echo $Services;?> | <?php echo $Bilingual;?></em></h4>
			<hr>
			</div>
		</div>
		<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
			<?php for ($i=4; $i <=11; $i++) {?>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="project-item">
						<div class="project-item-inner">
							<figure class="alignnone project-img">
								<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image"/>
								<div class="overlay">
									<a href="portfolio.php" title="Go To: Portfolio" class="dlink"><i class="fa fa-link"></i></a>
									<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Zoom: Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
								</div>
							</figure>
						<!--<div class="project-desc b_gray-7">
								<h4 class="title uppercase"><a href="contact.php" title="<?php echo "$Company";?>" class="t_white" ><?php echo "$Company";?></a></h4>
								<span class="desc t_gray-2"><i class="fa fa-phone"></i> <?php echo "$Phone";?></span>
							</div>-->
						</div>
					</div>
				</div>
			<?php }?>	
		</div>
	</div>
</div>