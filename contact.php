<?php
	$page = 'contact';
	include('include/header.php');
?>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contact</h1>
				<span>Get in Touch with Us</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= --
		<div id="page-menu">
			<div id="page-menu-wrap">
				<div class="container">
					<div class="page-menu-row">

						<div class="page-menu-title">Contact <span>Options</span></div>

						<nav class="page-menu-nav">
							<ul class="page-menu-container">
								<li class="page-menu-item current"><a href="contact-2.html"><div>Default</div></a></li>
								<li class="page-menu-item"><a href="contact-2-recaptcha.html"><div>With reCaptcha</div></a></li>
								<li class="page-menu-item"><a href="contact-2-file.html"><div>File Upload</div></a></li>
								<li class="page-menu-item"><a href="contact-2-inline.html"><div>Inline Notification</div></a></li>
							</ul>
						</nav>

						<div id="page-menu-trigger"><i class="icon-reorder"></i></div>

					</div>
				</div>
			</div>
		</div><!-- #page-menu end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row align-items-stretch col-mb-50 mb-0">
						<!-- Contact Form
						============================================= -->
						<div class="col-lg-6">

							<div class="fancy-title title-border">
								<h3>Send us an Email</h3>
							</div>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4 form-group">
											<label for="template-contactform-name">Name <small>*</small></label>
											<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-email">Email <small>*</small></label>
											<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-phone">Phone</label>
											<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
										</div>

										<div class="w-100"></div>

										<div class="col-md-8 form-group">
											<label for="template-contactform-subject">Subject <small>*</small></label>
											<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
										</div>

										<div class="col-md-4 form-group">
											<label for="template-contactform-service">Product</label>
											<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
												<option value="">-- Select One --</option>
												<option value="Modab Classic Paint">Modab Classic Paint</option>
												<option value="Modab Platinum Paint">Modab Platinum Paint</option>
												<option value="Satin Finish">Satin Finish</option>
												<option value="Gloss Finish">Gloss Finish</option>
												<option value="Emulsion">Emulsion</option>
												<option value="Textured">Textured</option>
											</select>
										</div>

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="template-contactform-message">Message <small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
										</div>

										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>

										<div class="col-12 form-group">
											<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
										</div>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>
							</div>

						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= -->
						<div class="col-lg-6 min-vh-50">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4127954790797!2d3.7319566752186604!3d6.469278923790596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bfe0542c28547%3A0x72d563e2b994ca0f!2sSeyi%20Omogunwa%20Rd%2C%20Ibeju%20Lekki%20105101%2C%20Lagos!5e0!3m2!1sen!2sng!4v1704367533363!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div><!-- Google Map End -->
					</div>

					<!-- Contact Info
					============================================= -->
					<div class="row col-mb-50" style="margin-bottom: 50px;">
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Our Headquarters<span class="subtitle">12 Seyi Omogunwa street, Lakowe Ajah, Lekki, Lagos, Nigeria</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Speak to Us<span class="subtitle">+234 802-313-5777<br>+234 803-312-8381<br>+234 909-519-9760</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-email"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Send us a Email<span class="subtitle">info@modabpaints.com<br>support@modabpaints.com<br>service@modabpaints.com</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-twitter2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Follow on Socials<span class="subtitle">Facebook - Modabpaints<br>Instagram - Modabpaints<br>Twitter - Modabpaints</span></h3>
								</div>
							</div>
						</div>
					</div><!-- Contact Info End -->

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php
			include('include/footer.php');
		?>