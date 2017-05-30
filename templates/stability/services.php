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
					<div class="row bright">
						<div class="col-md-4" data-animation="fadeInLeft" itemscope itemtype="http://schema.org/Service">
							<meta itemprop="serviceType" content="<?php echo $SN1;?>"/>
							<img src="images/services/1.jpg" itemprop="image" alt="<?php echo "$SN1";?>" class="img-responsive img-thumbnail"/> <br><br>
						</div>
						<div class="col-md-8" data-animation="fadeInRight">
							<h2 class="uppercase t_orange-4"><?php echo "$SN1";?></h2><hr>
							<p><?php echo "$SD1";?></p>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<div class="row bright">
						<div class="col-md-4" data-animation="fadeInLeft" itemscope itemtype="http://schema.org/Service">
							<meta itemprop="serviceType" content="<?php echo $SN2;?>"/>
							<img src="images/services/2.jpg" alt="<?php echo "$SN2";?>" class="img-responsive img-thumbnail"> <br><br>
						</div>
						<div class="col-md-8" data-animation="fadeInRight">
							<h2 class="uppercase t_orange-4"><?php echo "$SN2";?></h2><hr>
							<p><?php echo "$SD2";?></p>
						</div>
					</div>
					<br>
					<hr>
					<br>
					<div class="row bright">
						<div class="col-md-4" data-animation="fadeInLeft" itemscope itemtype="http://schema.org/Service">
							<meta itemprop="serviceType" content="<?php echo $SN3;?>"/>
							<img src="images/services/3.jpg" alt="<?php echo "$SN3";?>" class="img-responsive img-thumbnail"/> <br><br>
						</div>
						<div class="col-md-8" data-animation="fadeInRight">
							<h2 class="uppercase t_orange-4"><?php echo "$SN3";?></h2><hr>
							<p><?php echo "$SD3";?></p>
						</div>
					</div>
					<br>
					<hr>
					<br>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'php/section/bar4.php';?>
<?php include 'php/section/footer.php';?>