
				<!-- SERVICES-7
				============================================= -->
				<section id="services-7" class="wide-60 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs">Our Courses</h2>

								<!-- Text -->	
								<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
								   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
								</p> 

							</div>
						</div>	 <!-- END SECTION TITLE -->	

						<div class="row">
<?php
$counter=rand(1,7);
$courses=$obj->select_any("tbl_study_course","1");
foreach($courses as $singleCourse)
{
	if($counter>7)
{
$counter=1;	
}
	
?>

							<!-- SERVICE BOX #1 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-7 sbox-color">
									
									<!-- Image -->
									<img class="img-fluid" src="../Assets/public/<?php echo $singleCourse['image'];?>" alt="<?php echo $singleCourse['name'];?>" />	

									<!-- Text -->
									<div class="sbox-7-txt bg-<?php echo $counter ;?> white-color" style="height:350px;">	

										<!-- Title -->
										<h5 class="h5-xl"><?php echo $singleCourse['name'];?></h5>

										<!-- Text -->
										<p class="p-sm"><?php
		                              	echo substr_replace($singleCourse['short_description'], "...", 150);
										?>
										</p>

										<!--Link -->
										<a href="course-details.html?id=<?php echo $singleCourse['study_course_id'] ?>" class="btn btn-sm btn-tra-white primary-hover">Read More</a>

									</div>

								</div>							
							</div>
<?php
$counter++;
}

?>
						</div>	  <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END SERVICES-7 -->