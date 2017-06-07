<div class="bars">
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="uppercase">our services</h2>
			<hr>
			<br>
		</div>
	</div>
	<div class="row">
		<?php $i=1; ?>
		<?php do { ?>
		<div class="col-md-4 bright" itemscope itemtype="http://schema.org/Service">
			<meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
			<div class="icon-box centered circled boxed icon-box-animated" data-animation="fadeInUp">
				<div class="icon">
					<img src="images/services/<?php echo $i;?>.jpg" alt="<?php echo $SN[$i];?>" class="img-responsive img-circle"/>
				</div>
				<div class="icon-box-body">
					<h3><?php echo $SN[$i];?></h3>
					<p><?php echo substr($SD[$i], 0, 180);?></p>
					<a href="services.php" title="Read More" class="btn btn-default b_red-6 b_red-5-hover t_white"><i class="fa fa-wrench"></i> Read More</a>
				</div>
			</div>
		</div>
		<?php $i++; ?>
		<?php } while ( $i <= 4 ); ?>
	</div>
	<p>&nbsp;</p>
	<div class="row">
		<div class="col-md-offset-4 col-md-4 bright"><a href="services.php" title="Read More" class="btn btn-sm b_gray-3 b_gray-4-hover t_red-6 t_white-hover uppercase btn-block">All Our Services</a></div>
	</div>
</div>
</div>