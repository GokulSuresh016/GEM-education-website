
				<!-- SERVICES-7
				============================================= -->
				<section id="services-7" class="wide-60 services-section division">
					<div class="container">
<?php 
$courses_category=$obj->select_any_one("tbl_study_course_category","	study_course_category_id='".$_GET['id']."'");
?>

						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs" ><?php
								echo $courses_category['category']
								?></h2>

								<!-- Text -->	
								

							</div>
						</div>	 <!-- END SECTION TITLE -->	

						<div class="row">
<?php
$counter=rand(1,7);
$courses=$obj->select_any("tbl_study_course","	category='".$_GET['id']."'");
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
									<img class="img-fluid" src="../Assets/public/<?php echo $singleCourse['image'];?>" alt="service-image" />	

									<!-- Text -->
									<div class="sbox-7-txt bg-<?php echo $counter ; ?> white-color">	

										<!-- Title -->
										<h5 class="h5-xl"><?php echo $singleCourse['name'];?></h5>

										<!-- Text -->
										<p class="p-sm"><?php 
											echo substr_replace($singleCourse['short_description'], "...", 150);?>
										</p>

										<!--Link -->
										<a href="course-details.html?id=<?php echo $singleCourse['study_course_id']; ?>" class="btn btn-sm btn-tra-white primary-hover">Read More</a>

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