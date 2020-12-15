		<!-- CONTACTS-4
				============================================= -->
				<section id="contacts-4" class="bg-lightgrey bg-tra-city wide-100 contacts-section division">
					<div class="container">
<?php
$config=$obj->select_any_one("tbl_general_config","1 ORDER by `general_config_id` DESC");

?>


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs">Have Questions? Get in Touch</h2>

								<!-- Text -->	
								<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
								   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
								</p> 

							</div>
						</div>	 <!-- END SECTION TITLE -->	


					 	<div class="row">


					 		<div class="col-lg-5">
					 			<div class="contact-boxes">


						 			<!-- LOCATION -->
									<div class="contact-box icon-xs clearfix mb-25">

										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>

										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-sm deepblue-color"><?php echo $config['address']; ?></h5>
																						
											<p class="grey-color">Our Location</p>
										</div>

									</div>


									<!-- PHONES -->
									<div class="contact-box icon-xs clearfix mb-25">

										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>

										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-sm deepblue-color">P: <?php echo $config['phone']; ?></h5>	
											<h5 class="h5-xs deepblue-color">F:<?php echo $config['whatsapp']; ?></h5>	
											<p class="grey-color">Let's Talk</p>
										</div>

									</div>


									<!-- EMAIL -->
									<div class="contact-box icon-xs clearfix">

										<!-- Icon -->	
										<div class="contact-box-icon"><span class="flaticon-235-mail"></span></div>

										<!-- Text -->
										<div class="contact-box-txt">
											<h5 class="h5-xs deepblue-color"><a href="mailto:yourdomain@mail.com"><?php echo $config['email']; ?></a></h5>	
										
											<p class="grey-color">Drop a Line</p>
										</div>

									</div>


								</div>
							</div>


							<!-- CONTACT FORM -->	
					 		<div class="col-lg-7">
					 			<div class="form-holder">
					 				<form name="contactForm" class="row contact-form">

					 					<!-- Contact Form Input -->
						                <div id="input-name" class="col-lg-12">
						                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
						                </div>
						                 
						                <!-- Contact Form Input -->        
						                <div id="input-email" class="col-lg-12">
						                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
						                </div>	

						                <!-- Contact Form Select -->
						                <div id="input-subject" class="col-lg-12 input-subject">
						                    <select id="inlineFormCustomSelect2" name="subject" class="custom-select subject" required>
						                        <option value="">Your Question About..</option>  
												<?php
												$migration=$obj->select_any("tbl_migration_migration_details","1");
												foreach($migration as $singleMigration)
												{
												?>
						                      	<option><?php echo $singleMigration['migration_type'] ?></option>
						                    
												<?php
												}
												?>
						                      	<option>Other...</option>
						                    </select>
						                </div>			                          
						                 
						                 <!-- Contact Form Mesaage -->        
						                <div id="input-message" class="col-lg-12 input-message">
						                	<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..." required></textarea>
						                </div> 
						                                            
						                <!-- Contact Form Button -->
						                <div class="col-lg-12 mt-15 form-btn"> 
						                	<button type="submit" class="btn btn-primary tra-black-hover submit">Send Your Message</button> 
						                </div>
						                                                              
						                <!-- Contact Form Message -->
						                <div class="col-lg-12 contact-form-msg text-center">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>				                                           
					                                              
					                </form> 
					 			</div>	
					 		</div>	 <!-- END CONTACT FORM -->	 	


					 	</div>    <!-- End row -->
					</div>	   <!-- End container -->
				</section>	<!-- END CONTACTS-4 -->