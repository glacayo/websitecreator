<div class="bars">
	<div class="container">
		<div class="col-md-6 t_black" data-animation="fadeInLeft">
			<h2 class="t_black">About Us</h2>
			<div><?php echo "$ExAbout";?></div>
			<a href="about.php" title="about" class="btn btn-md b_orange-4 t_white"><i class="fa fa-eye"></i> Read More</a>
			<br><br>
		</div>
		<div class="col-md-6 animation fadeInDown animation-visible" data-animation="fadeInDown">
			<div class="title-accent">
				<h3 class="t_black"><span>Why</span> choose us</h3>
			</div>
			<div class="tabs">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-1" title="Mission" data-toggle="tab"><i class="fa fa-check"></i> Mission</a></li>
					<li><a href="#tab-2" title="Vision" data-toggle="tab"><i class="fa fa-eye"></i> Vision</a></li>
					<li><a href="#tab-3" title="Why Choose Us?" data-toggle="tab"><i class="fa fa-users"></i> Why Choose Us?</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="tab-1">
						<p><?php echo "$Mission";?></p>
					</div>
					<div class="tab-pane fade" id="tab-2">
						<p><?php echo "$Vision";?></p>
					</div>
					<div class="tab-pane fade" id="tab-3">
						<p><?php echo "$Why";?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
