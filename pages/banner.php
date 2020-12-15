
			<!-- HERO-1
			============================================= -->	
			<section id="hero-1" class="hero-section division">


				<!-- SLIDER -->
				<div class="slider">
			    	<ul class="slides">
<?php

$banner=$obj->select_any("tbl_home_page_banner","1");
$counter=0;
						foreach($banner as $bannerSingle)
						{
							$counter=$counter+1;
							
?>
				     	<!-- SLIDE #1 -->
				      	<li id="slide<?php echo $counter ?>">

					        <!-- Background Image -->
				        	<img src="../Assets/public/<?php echo $bannerSingle['banner_image'];?> " alt="slide-background">

							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center center-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-12">
		       								<div class="caption-txt white-color">

						       					<!-- Title -->
					        					<h5 class="h5-xl">"<?php echo $bannerSingle['title_1'];?>" </h5>
								         	 	<h2>We make the visa process faster</h2>
									    
									          	<!-- Text -->
												<p class="p-md"><?php //echo $bannerSingle['']  ?>
												</p>

												<!-- Button -->
												<a href="#" class="btn btn-md btn-primary tra-white-hover btn-arrow">
													<span>Discover More <i class="fas fa-arrow-right"></i></span>
												</a>

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->
<?php
if($counter==3)
{
	break;
}
				}
?>
				    </ul>
			  	</div>	<!-- END SLIDER -->

				
				<!-- SLIDER NAV -->
			  	<div class="hero-slider-nav icon-xs white-color">
			  		<div class="slider-btn">
						<a class="slide-prev"><span class="flaticon-442-left-arrow"></span></a>
						<a class="slide-next"><span class="flaticon-441-right-arrow"></span></a>
					</div>
				</div>


			</section>	<!-- END HERO-1 -->