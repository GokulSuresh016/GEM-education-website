

											<!-- SIDEBAR COUNTRIES --> 
								<div class="sidebar-countries sidebar-div mb-50">
										
									<!-- Title -->
									<h5 class="h5-lg">Popular Course: </h5>

									<!-- List -->
									<ul class="sidebar-country-list clearfix">
									
									
<?php
$popular=$obj->select_any("tbl_student_service_popular_courses","1 ORDER BY RAND()LIMIT 5;");
foreach($popular as $singleCourse)
{
	 $course=$obj->select_any_one("tbl_study_course","study_course_id='".$singleCourse['course_name']."'");
?>
										<li><a href="course-details.html?id=<?php echo $singleCourse['course_name']  ?> ">
											<img class="img-fluid" src="../Assets/public/<?php echo $course['image'];?> " alt="sidebar-image" /><?php echo $course['name'];?> </a>
										</li>
										
<?php
}
?>
										

									</ul>

								</div>




							