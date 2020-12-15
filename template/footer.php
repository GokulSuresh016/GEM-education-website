<!-- FOOTER-3
			============================================= -->
			<footer id="footer-3" class="wide-40 footer division">
				<?php
			$config=$obj->select_any_one("tbl_general_config","1 order by general_config_id DESC");
				?>
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">	


						<!-- FOOTER CONTACTS -->
						<div class="col-lg-3 col-xl-3">
							<div class="footer-box mb-40">
							
								<!-- Title -->
								<h5 class="h5-md">Contact Details</h5>

								<!-- Address -->
								<p class="p-sm"><?php echo $config['address']?></p> 
								<p class="p-sm"><?php echo $config['location']?></p>

								<!-- Phone -->
								<p class="p-sm mt-20">Phone: <?php echo $config['phone']?></p>
								
								<!-- Email -->
								<p class="p-sm foo-email">Email: <a href="mailto:yourdomain@mail.com"><?php echo $config['email']?></a></p>

								<!-- Working Hours -->
								<p class="p-sm mt-20">Mon-Fri: 9:00AM - 6:30PM</p>
								<p class="p-sm">Saturday: 8:30AM - 3:30PM</p>
								<p class="p-sm">Sunday: Closed</p>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-lg-3 col-xl-3">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-md">Useful Links</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><a href="#">About GEM</a></li>
									<li><a href="#">Visa Information</a></li>
									<li><a href="#">Immigration FAQ</a></li>
									<li><a href="#">Immigration Assistance</a></li>	
									<li><a href="#">ImmiEx Testimonials</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Terms and Conditions</a></li>								
								</ul>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-lg-3 col-xl-3">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-md">Visas</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><a href="visa-details.html">Visitor Visas</a></li>
									<li><a href="visa-details.html">Permanent Residence Visas</a></li>
									<li><a href="visa-details.html">Business Visas</a></li>
									<li><a href="visa-details.html">Working Holiday Visas</a></li>	
									<li><a href="visa-details.html">Studying & Training Visas</a></li>
									<li><a href="visa-details.html">Skilled Work Visas</a></li>
									<li><a href="visa-details.html">Family & Partner Visas</a></li>							
								</ul>
							</div>
						</div>	


						<!-- FOOTER NEWSLETTER FORM -->
						<div class="col-lg-3 col-xl-3">
							<div class="footer-form mb-20">

								<!-- Title -->
								<h5 class="h5-md">Stay Always In Touch</h5>

								<!-- Newsletter Form Input -->
								<form class="newsletter-form">	

									<div class="input-group">
										<input type="email" class="form-control" placeholder="Your email address" required id="s-email">			
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary tra-black-hover">Subscribe</button> 
										</span>
									</div>

									<!-- Newsletter Form Notification -->		
									<label for="s-email" class="form-notification"></label>
												
								</form>
														
							</div>
						</div>


					</div>	<!-- END FOOTER CONTENT -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row d-flex align-items-center">


							<!-- FOOTER LOGO -->
							<div class="col-md-4 col-lg-3">
								<!-- Footer Logo -->
								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 420 x 100 pixels) -->
								<img src="images/logo-black.png" width="210" height="50" alt="footer-logo">
							</div>


							<!-- FOOTER SOCIALS LINKS -->
							<div class="col-md-8 col-lg-9 text-right">
								<p class="footer-copyright">&copy; Copyright <span>ImmiEx 2019</span>. All Rights Reserved</p>
								<p class="p-sm"><a href="#">Privacy Policy</a></p>
								<p class="p-sm"><a href="#">Terms & Conditions</a></p>
								<p class="p-sm"><a href="#">Cookies</a></p>
							</div>


						</div>
					</div>	<!-- END BOTTOM FOOTER -->


				</div>	   <!-- End container -->										
			</footer>	<!-- END FOOTER-3 -->



		
		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.stellar.min.js"></script>	
		<script src="js/menu.js"></script>
		<script src="js/materialize.js"></script>	
		<script src="js/jquery.scrollto.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/hero-request-form.js"></script>
		<script src="js/hero-register-form.js"></script>
		<script src="js/request-form.js"></script>	
		<script src="js/contact-form.js"></script>
		<script src="js/comment-form.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/jquery.validate.min.js"></script>	

		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->
		


	</body>



</html>	