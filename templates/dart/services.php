<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<?php include 'php/section/header.php';include 'php/section/click2call.php';?>
	<!--Variante1-->
	<div class="bars">
		<div class="container">
			<div itemprop="text">
				<div class="row">
					<?php for ($i=1; $i <= $CantidadServicios ; $i++) { ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row bright" itemscope itemtype="http://schema.org/Service">
							<div class="col-md-2 col-sm-2 col-xs-12"><img src="images/services/min/<?php echo $i;?>.jpg" itemprop="image" class="img-responsive  img-thumbnail" alt="<?php echo $SN[$i];?>"/></div>
							<div class="col-md-10 col-sm-10 col-xs-10">
								<meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
								<h4><?php echo $SN[$i];?></h4>
								<p><?php echo $SD[$i];?></p>
							</div>
						</div>
						<br>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>	
	
<?php include 'php/section/bar4.php';?>
<?php include 'php/section/footer.php';?>