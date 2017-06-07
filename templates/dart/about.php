<?php include 'php/section/header.php';include 'php/section/click2call.php';?>
	<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
		<div class="container">
			<div class="background-light bars">
			<div class="row">
				<div class="col-md-3 wow slideInLeft animated visible hidden-xs"><br>
					<img src="images/portfolio/min/4.jpg" itemprop="image" class="img-responsive img-thumbnail"  alt="<?php echo $Company;?>">
				</div>
				<div class="col-md-9 wow slideInRight animated visible  ">
					<h1 class="uppercase" itemprop="name"><?php echo "$Company";?></h1>
					<?php echo $About;?>
				</div>
			</div>
			</div>
		</div>
	</div>
<?php include 'php/section/bar7.php';?>
<?php include 'php/section/footer.php';?>