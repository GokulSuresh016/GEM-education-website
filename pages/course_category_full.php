				<!-- SERVICES-7
				============================================= -->
				<section id="services-7" class="wide-60 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs" >
								All Courses Categories
								</h2>

								<!-- Text -->	
								

							</div>
						</div>	 <!-- END SECTION TITLE -->	

						<div class="row">
<?php

$counter=rand(1,7);
$courses_category=$obj->select_any("tbl_study_course_category","1");
foreach($courses_category as $singleCourse_category)
{
if($counter>7)
{
$counter=1;	
}
	
?>

							<!-- SERVICE BOX #1 -->
							<div class="col-md-6 col-lg-4" style="height:500px;">
								<div class="sbox-7 sbox-color">
									
									<!-- Image -->
									<img class="img-fluid" src="../Assets/public/<?php echo $singleCourse_category['image'];?>" alt="<?php echo $singleCourse_category['category'];?>" />	

									<!-- Text -->
									<div class="sbox-7-txt bg-<?php echo $counter ; ?> white-color" style="height:200px">	

										<!-- Title -->
										<h5 class="h5-xl"><?php echo $singleCourse_category['category'];?></h5>

										<!--Link -->
										<a href="?id=<?php echo $singleCourse_category['study_course_category_id']; ?>" class="btn btn-sm btn-tra-white primary-hover">Read More</a>

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