
				<!-- ABOUT-9
				============================================= -->
				<section id="about-9" class="wide-60 about-section division">
					<div class="container">	
						<div class="row">
<?php
$country=$obj->select_any_one("tbl_general_countries","general_countries_id= '1'");
?>

							<!-- ABOUT TEXT -->
							<div class="col-lg-8">
								<div class="about-9-txt mb-40 pr-15">

<h3 class="h3-md"><?php echo $country['country_name'];?></h3>
									<!-- Image -->
									<div class="about-9-img mb-40">
										<img class="img-fluid" src="../Assets/public/<?php echo $country['flag'];?> " alt="about-image" />
									</div>

								
									<span><?php echo $country['long_description'];?>
									</span>

								</div>
							</div>	<!-- END ABOUT TEXT -->


							<!-- SIDEBAR -->
							<aside id="sidebar" class="col-lg-4">


								<?php 
								
								include dirname(__FILE__)."/aside_visa_catagory.php";
								include dirname(__FILE__)."/aside_course_list.php";
								?>

								<!-- SIDEBAR COUNTRIES --> 
							
							

							</aside>	<!-- END SIDEBAR -->


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END ABOUT-9 -->