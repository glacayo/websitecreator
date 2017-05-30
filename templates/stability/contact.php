<?php include 'php/section/header.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?>
<div id="map" itemscope itemtype="https://schema.org/LocalBusiness">
<?php echo "$GoogleMap";?>
</div> 
<div class="container bars" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
					<div class="row" itemprop="text">
						<div class="col-md-6">
							<h1 itemprop="name">Contact Form</h1>
							<form action="contact2.php" method="post">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Name <span class="required">*</span></label>
											<input required type="text"
												value=""
												data-msg-required="Please enter your name."
												class="form-control"
												name="name" id="name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Email <span class="required">*</span></label>
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
											<label>Subject</label>
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
											<label>Message <span class="required">*</span></label>
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
										<input required type="submit" value="Send Message" class="btn b_orange-4 t_white uppercase" data-loading-text="Loading...">
									</div>
								</div>
								<input required type="hidden" name="url" id="dir"/>
							</form>
							<br>
						</div>
						<div class="col-md-6">
							<h2>Get In Touch</h2><hr>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<p><i class="fa fa-map-marker"></i> Address: <?php echo "$Address";?></p>
									<p><i class="fa fa-map-marker"></i> <?php echo "$Cover";?></p>
									<p><i class="fa fa-phone"></i> <a href="<?php echo "$PhoneRef";?>" title="<?php echo "$Phone";?>"><?php echo "$Phone";?></a></p>
									<p><i class="fa fa-envelope"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>"><?php echo "$Mail";?></a></p>
									<p><i class="fa fa-envelope"></i> <a href="<?php echo "$MailRef2";?>" title="<?php echo "$Mail2";?>"><?php echo "$Mail2";?></a></p>
									<p><i class="fa fa-user"></i> <?php echo "$Bilingual" ?></p>
								</div>
								<div class="col-md-12 col-sm-12">
									<p><i class="fa fa-clock-o"></i> <?php echo "$Schedule";?></p>
									<p><i class="fa fa-file"></i> <?php echo "$Estimates";?></p>
									<p><i class="fa fa-money"></i> <?php echo "$Payment";?></p>
								</div>
								<!--<div class="col-md-6 col-md-offset-3"><img src="images/cards.png" itemprop="image" class="img-responsive" alt="credit-debit-cards"></div>-->
							</div>
							<br>
							<h2>You can also find us:</h2><hr>
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-4"><a href="<?php echo "$facebook";?>" title="Facebook" target="_blank" class="b_blue-2 btn btn-sm"><i class="fa fa-facebook t_white"></i></a></div>
										<div class="col-md-4 col-sm-4 col-xs-4"><a href="<?php echo "$twitter";?>" title="Twitter" target="_blank" class="b_blue-1 btn btn-sm"><i class="fa fa-twitter t_white"></i></a></div>
										<div class="col-md-4 col-sm-4 col-xs-4"><a href="<?php echo "$googleplus";?>" title="Googleplus" target="_blank" class="b_red-2 btn btn-sm"><i class="fa fa-google-plus t_white"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php include 'php/section/bar4.php';?>
<?php include 'php/section/footer.php';?>