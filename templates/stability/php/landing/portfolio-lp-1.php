<div class="row bright" itemscope itemtype="http://schema.org/ImageGallery">
				<?php for ($i=1; $i <=4; $i++) {?>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="project-item">
							<div class="project-item-inner">
								<figure class="alignnone project-img">
									<img src="images/portfolio/min/<?php echo $i;?>.jpg" alt="portfolio" itemprop="image"/>
									<div class="overlay">
										<a href="portfolio.php" title="Portfolio" class="dlink"><i class="fa fa-link"></i></a>
										<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Portfolio - <?php echo $i;?>" class="popup-link zoom"><i class="fa fa-search-plus"></i></a>
									</div>
								</figure>
							</div>
						</div>
					</div>
				<?php }?>	
			</div>