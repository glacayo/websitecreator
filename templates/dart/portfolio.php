<?php include 'php/section/header.php';include 'php/section/click2call.php';?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="bars">
		<div class="container">
			<div id="content" itemprop="text">
				<div class="b_gray-1">
					<div class="container">
						<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
							<?php for ($i=1; $i <=12; $i++) {?>
							<div class="col-md-3 col-sm-6 bright">
								<a data-rel="prettyPhoto" href="images/portfolio/full/<?php echo $i;?>.jpg">
									<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-responsive img-thumbnail" alt="Portfolio-<?php echo $i;?>">
								</a>
								<p>&nbsp;</p>
							</div>	
							<?php } ?>		
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php include 'php/section/bar7.php';?>
<?php include 'php/section/footer.php';?>