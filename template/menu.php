	<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">

	
		<?php
		$config=$obj->select_any_one("tbl_general_config","1 order by general_config_id DESC");
		?>

			
			<!-- HEADER
			============================================= -->
			<header id="header-2" class="header white-menu">
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">	
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	    	
				    	<span class="smllogo"><img src="images/logo-black.png" width="200" height="50" alt="mobile-logo"/></span>
				    	<a href="location.href='//api.whatsapp.com/send?phone=<?=$config['whatsapp'];?>&amp;text=Enquiry from webpage';" class="callusbtn"><i style="color:green" class="fas fa-envelope-open"></i></a>
				 	</div>


				 	<!-- HEADER STRIP -->
				 	<div class="headtoppart bg-white clearfix">
				    	<div class="headerwp clearfix">

				    		<!-- Infotmation -->
				     		<div class="headertopleft">			     			
				        		<div class="header-info clearfix">
				        			<span class="txt-400"><i class="fas fa-map-marker-alt"></i><?=$config['location'];?></span> 
				            	</div>
				     		</div>

				     		<!-- Contacts -->
						    <div class="headertopright header-contacts">						    	
						    	<a href="tel:<?=$config['phone'];?>" class="callusbtn txt-400"><i class="fas fa-phone"></i><?=$config['phone'];?></a>
						    	<a href="location.href='//api.whatsapp.com/send?phone=<?=$config['whatsapp'];?>&amp;text=Enquiry from webpage';" class="callusbtn b-right txt-400">&#8194;<?=$config['whatsapp'];?></a>
						    	<a href="mailto:<?=$config['email'];?>" class="txt-400"><i class="far fa-envelope-open"></i><?=$config['email'];?></a>
					      	</div>

					    </div>
				  	</div>	<!-- END HEADER STRIP -->


				  	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">


	    					<!-- LOGO IMAGE -->
	    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 90 pixels) -->
	    					<div class="desktoplogo"><a href="index.html" class="logo-black"><img src="images/logo-black.png" width="180" height="" alt="Education in australia: University  College Study Abroad Programs | GEM education"></a></div>
	    					<div class="desktoplogo"><a href="index.html" class="logo-white"><img src="images/logo-white.png" width="180" height="" alt="University  College Study Abroad Programs | GEM education"></a></div>


	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix blue-header">
	        					<ul class="wsmenu-list">


	        						<!-- DROPDOWN MENU -->
						        	<li aria-haspopup="true"><a href="index.html">Home</a>
						           <!--		<ul class="sub-menu"> -->
						           	<!--		<li aria-haspopup="true"><a href="#">Dummy Link #1</a></li>-->
						              		
						           <!--		</ul>-->
						          	</li>	<!-- END DROPDOWN MENU -->
									<!-- DROPDOWN MENU -->
						        	<li aria-haspopup="true"><a href="#">About<span class="wsarrow"></span</a>
						        <ul class="sub-menu"> 
						           		<li aria-haspopup="true"><a href="about.html">About Us</a></li>
										<li aria-haspopup="true"><a href="our-story.html">Our Story</a></li>
						              	<li aria-haspopup="true"><a href="mission-and-vision.html">Mission and Vision</a></li>	
						           </ul>
						          	</li>	<!-- END DROPDOWN MENU -->
										          	<!-- MEGAMENU -->
						          	<li aria-haspopup="true"><a href="#">Courses<span class="wsarrow"></span></a>
	            						<div class="wsmegamenu clearfix">
	             							<div class="container">
	               								<div class="row">


	               									<!-- MEGAMENU QUICK LINKS -->
													<div class="col-md-12 col-lg-3">

														<!-- Title -->
														<h3 class="title">Course Category:</h3>  

		               									<ul class="link-list">   						                    
										                    <?php
															$courses=$obj->select_any("tbl_study_course","1 order by rand() LIMIT 4");
															$course_category=$obj->select_any("tbl_study_course_category","1");
															foreach($course_category as $course_category_Single)
															{
															?>
										                    <li><a href="Course-category.html?id=<?=$course_category_Single['study_course_category_id'];?>"><?=$course_category_Single['category'];?></a></li>	
															<?php
															}
															?>
														<li></li>
										                </ul>
														<div class="padding_top">
														<a href="Course-category.html" class="btn btn-primary">View All Category</a>
														</div>
										            </div>	<!-- END MEGAMENU QUICK LINKS -->

													<?php
													$page_url_course="courses.html?id=".$courses[0]['study_course_id'];
													?>
									                <!-- MEGAMENU FEATURED NEWS -->
									                <div class="col-md-12 col-lg-5" onclick="javascript:location.href='<?=$page_url_course;?>' ">

									                	<!-- Title -->
									                    <h3 class="title"><?=$courses[0]['name'];?>:</h3>

									                    <!-- Image -->
									                    <div class="fluid-width-video-wrapper mb-15" style="padding-top:10px;"><img src="../Assets/public/<?=$courses[0]['image'];?>" title="<?=$courses[0]['name'];?> in australia" alt="<?=$courses[0]['name'];?> in australia" /></div>

									                    <!-- Text -->
									                   
									                    <p class="wsmwnutxt"><?=substr_replace($courses[0]['short_description'], "...", 100);?>
									                    </p>

									                </div>	<!-- END MEGAMENU FEATURED NEWS -->


									                <!-- MEGAMENU LATEST NEWS -->
									                <div class="col-md-12 col-lg-4">

									                	<!-- Title -->
	                    								<h3 class="title">Featered Courses:</h3>

	                    								<!-- Latest News -->
	                    								<ul class="latest-news">
														<?php
														$i=0;
														foreach($courses as $coursesSingle)
														{
															if($i!=0)
															{
															
														?>
															<!-- Post #1 -->
															<li class="clearfix d-flex align-items-center">

																<!-- Image -->
																<img class="img-fluid" src="../Assets/public/<?=$coursesSingle['image'];?>" title="<?=$coursesSingle['name'];?> in australia" alt="<?=$coursesSingle['name'];?> in australia" />

																<!-- Text -->
																<div class="post-summary">
																	<a href="course-details.html?id=<?php echo $coursesSingle['study_course_id']; ?>"><?=$coursesSingle['name'];?></a>
																	<p><?=$coursesSingle['duration'];?></p>
																</div>

															</li>
															<?php
														}
															$i++;
														}
															?>
															<li class="clearfix d-flex align-items-center">
															<a href="courses.html" class="btn btn-primary">View All Courses</a>
															</li>
														</ul>
	                    							</div>	<!-- END MEGAMENU LATEST NEWS -->

									                
								                </div>  <!-- End row -->	
								            </div>  <!-- End container -->	
								        </div>  <!-- End wsmegamenu -->	
								    </li>	<!-- END MEGAMENU -->
									
										<!-- DROPDOWN MENU -->
						        	<li aria-haspopup="true"><a href="#">Service<span class="wsarrow"></span></a>
						        <ul class="sub-menu"> 
								<li  aria-haspopup="true"><a  href="#">Services </a><span ></span>
							
								<ul class="sub-menu ">
									<?php
								$services=$obj->select_any("tbl_student_service_service","1");
								foreach($services as $servicesSingle)
								{
								?>
								        <li aria-haspopup="true"><a href="our-services.html?id=<?php echo $servicesSingle['student_service_service_id'];?>"><?php echo $servicesSingle['service_name']; ?></a></li>
											<?php
								}
								?>
								</ul>
								</li>
										<li aria-haspopup="true"><a href="partners-colleges.html">Partner Institutes & Universities</a></li>
						           </ul>
						          	</li>	<!-- END DROPDOWN MENU -->
									
									
								
						          	<!-- PAGES -->
						          	<li aria-haspopup="true"><a href="visa-list.html">Migration</a>
								    </li>	<!-- END PAGES -->

					


						          	<!-- SIMPLE NAVIGATION LINK -->
								    <!--<li class="nl-simple" aria-haspopup="true"><a href="FAQ.html">FAQ</a></li>-->

					    <li class="nl-simple" aria-haspopup="true"><a  href="contact-us.html">Contact Us</a></li>
								    <!-- LAST NAVIGATION LINK -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="#" class="header-btn btn-primary tra-black-hover last-link">Get Started</a>
								    </li>
								    

	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->

	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
			</header>	<!-- END HEADER -->