<div class="bg_1">
	<div class="background-light">
		<div class="background-light">
	
		<div class="container bars">
			<div class="row">
				<div class="col-md-6"><h2>What We Offer</h2><hr style="border-color:black;"><br></div>
				<div class="col-md-6 text-right"><br><h4><span class="t_red-3"><strong>CALL US NOW:</strong></span> <?php echo $Phone;?> | <span class="t_red-3"><strong><?php echo $License;?></strong></span></h4></div>
			</div>
			<div class="row">
				<?php $i=1; ?>
				<?php do { ?>
				<div class="col-md-4 col-sm-6 col-xs-12 service" itemscope itemtype="http://schema.org/Service">
					<meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
					<div style="background: url(images/services/<?php echo $i;?>.jpg);">
						<div class="service-opacity bars2">
							<p>&nbsp;</p><p>&nbsp;</p>
							<h2 class="uppercase t_white stroke2"><i class="fa fa-leaf"></i> <?php echo $SN[$i];?></h2><br>
							<a href="services.php" class="t_black b_yellow-3 btn-md btn" title="<?php echo $SN[$i];?>">READ MORE <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
					<div class="description-service b_green-3 bottom-shadow t_white bars2">
						<p><?php echo substr($SD[$i], 0, 180);?></p>
					</div>
					<br>
				</div>
				<?php $i++; ?>
				<?php } while ( $i <= 6 ); ?>
			</div>
			<p>&nbsp;</p>
		</div>

		</div>
	</div>
</div>