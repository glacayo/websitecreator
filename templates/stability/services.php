<?php include 'php/section/header.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?>

<!--Variante2-->
<div class="bars" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="uppercase" itemprop="name">our services</h1>
				<hr>
				<br>
			</div>
		</div>
		<div itemprop="text">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php for ($i=1; $i <= $CantidadServicios ; $i++) { ?>
					<div class="row bright">
						<div class="col-md-4" data-animation="fadeInLeft" itemscope itemtype="http://schema.org/Service">
							<meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
							<img src="images/services/<?php echo $i;?>.jpg" itemprop="image" alt="<?php echo $SN[$i];?>" class="img-responsive img-thumbnail"/> <br><br>
						</div>
						<div class="col-md-8" data-animation="fadeInRight">
							<h2 class="uppercase t_orange-4"><?php echo $SN[$i];?></h2><hr>
							<p><?php echo $SD[$i];?></p>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'php/section/bar4.php';?>
<?php include 'php/section/footer.php';?>