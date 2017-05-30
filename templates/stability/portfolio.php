<?php include 'php/section/header.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?>
<div class="bg_1 bg_fixed" itemprop="mainContentOfPage">
	<div class="background-light"><div class="background-light"><div class="background-light">
		<div class="container bars">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="title-accent">
						<h1 class="stroke t_white" itemprop="name">Latest Works</h1>
						<hr>
						<br>
					</div>
				</div>
			</div>
			<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
				<?php for ($i=1; $i <=12; $i++) {?>
					<div class="col-md-3">
						<div class="project-item">
							<div class="project-item-inner">
								<figure class="alignnone project-img">
									<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image"/>
									<div class="overlay">
										<a href="contact.php" title="Go To: Contact Us" class="dlink"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Zoom: Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
									</div>
								</figure>
								<div class="project-desc b_gray-7">
									<h4 class="title uppercase"><a href="contact.php" title="<?php echo "$Company";?>" class="t_white" ><?php echo "$Company";?></a></h4>
									<span class="desc t_gray-2"><i class="fa fa-phone"></i> <?php echo "$Phone";?></span>
								</div>
							</div>
						</div>
					</div>
				<?php }?>	
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php include 'php/section/bar1.php';?>
<?php include 'php/section/footer.php';?>