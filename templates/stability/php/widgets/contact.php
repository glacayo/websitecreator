<div class="row widget bordering">
	<div class="col-md-12 text-center">
		<h2>get in touch</h2>
		<form action="contact2.php" method="post">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label>Name <span class="required">*</span></label>
						<input required type="text"
							value=""
							data-msg-required="Please enter your name."
							class="form-control"
							name="name" id="name">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
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
				<div class="col-md-12">
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
					<input required type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Loading...">
				</div>
			</div>
			<input required type="hidden" name="url" id="dir"/>
		</form>
	</div>
</div>