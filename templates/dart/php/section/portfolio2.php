<div class="bg_2 bg_fixed">
	<div class="background-opaque">
		<div class="bars">
	<div class="container ">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="uppercase t_white">recent projects</h3>
				<hr>
			</div>
		</div>
		<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
			<?php for ($i=5; $i <=12; $i++) {?>
			<div class="col-md-3 col-sm-6 bright">
				<a href="images/portfolio/full/<?php echo $i;?>.jpg" title="Portfolio-<?php echo $i;?>" data-rel="prettyPhoto">
					<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-responsive img-thumbnail" alt="Portfolio-<?php echo $i;?>">
				</a>
				<p>&nbsp;</p>
			</div>
			<?php } ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p class="text-center"><a href="portfolio.php" title="Our Portfolio" class="btn b_gray-3 t_black"><i class="fa fa-picture-o"></i> View Our Portfolio</a></p>
			</div>
		</div>
	</div>
	</div>
</div>
</div>