<?php include 'php/section/header.php';include 'php/section/click2call.php';?>
	<div class="">
	<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
		<div class="container bars ">
			
			<div itemprop="text">
			<div class="row">
				<div class="col-md-offset-1 col-md-10 b_green-3">
					<p>&nbsp;</p>
					<form action="contact2.php" method="post">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="t_white">Name <span class="required">*</span></label>
										<input required type="text"
														value=""
														data-msg-required="Please enter your name."
														class="form-control"
														name="name" id="name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="t_white">Email <span class="required">*</span></label>
										<input required type="email" 
														value=""
														data-msg-required="Please enter your email address."
														data-msg-email="Please enter a valid email address."
														class="form-control"
														name="email"
														id="email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="t_white">Subject</label>
										<input required type="text" 
														value=""
														data-msg-required="Please enter the subject."
														class="form-control"
														name="subject"
														id="subject">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="t_white">Message <span class="required">*</span></label>
										<textarea
										data-msg-required="Please enter your message."
										rows="10"
										class="form-control"
										name="message"
										id="message"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Send Message" class="btn btn-primary b_gray-6" data-loading-text="Loading...">
							</div>
						</div>
						<input type="hidden" name="url" id="dir"/>
					</form>
					<br>
				</div>
			</div>
			<p>&nbsp;</p>
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h2 class="text-center uppercase">get in touch</h2>
					<hr>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<p><i class="fa fa-home"></i> <?php echo "$Address" ?></p>
							<p><i class="fa fa-phone"></i> <a href="tel:<?php echo "$Phone";?>" title="<?php echo "$Phone";?>"><?php echo "$Phone";?></a></p>
							<p><i class="fa fa-phone"></i> <a href="tel:<?php echo "$Phone2";?>" title="<?php echo "$Phone2";?>"><?php echo "$Phone2";?></a></p>
							<p><i class="fa fa-envelope"></i> <a href="mailto:<?php echo "$Mail";?>" title="<?php echo "$Mail";?>"><?php echo "$Mail";?></a></p>
							<p><i class="fa fa-user"></i> <?php echo "$Experience" ?></p>

							<a href="<?php echo "$facebook";?>" title="Facebook" target="_blank" class="b_blue-2 btn btn-sm"><i class="fa fa-facebook t_white"></i></a>
							<a href="<?php echo "$twitter";?>" title="Twitter" target="_blank" class="b_blue-1 btn btn-sm"><i class="fa fa-twitter t_white"></i></a>
							<a href="<?php echo "$googleplus";?>" title="Googleplus" target="_blank" class="b_red-2 btn btn-sm"><i class="fa fa-google-plus t_white"></i></a>
						</div>
						<div class="col-md-6 col-sm-6">
							<p><i class="fa fa-clock-o"></i> <?php echo "$Schedule";?></p>
							<p><i class="fa fa-file"></i> <?php echo "$Services";?></p>
							<p><i class="fa fa-money"></i> <?php echo "$Payment";?></p>
							<p><i class="fa fa-user"></i> <?php echo "$Bilingual" ?></p>
							<img src="images/cards.png" itemprop="image" class="img-responsive" alt="credit-debit-cards">
											
						</div>
						
					</div>
				</div>
			</div>
			<p>&nbsp;</p>
			<div itemscope itemtype="https://schema.org/LocalBusiness">
				<?php echo "$GoogleMap";?>
			</div> 
		</div>
	</div>
</div>
<?php include ('php/section/footer.php');?>