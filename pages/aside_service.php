		<!-- BLOG CATEGORIES --> 
								<div class="blog-categories sidebar-div mb-50">
										
									<!-- Title -->
									<h5 class="h5-lg">Our Services</h5>

									<!-- List -->
									<ul class="blog-category-list clearfix">
									<?php
									$our_services=$obj->select_any("tbl_student_service_service","1");
									foreach($our_services as $our_services_Single)
									{
										
									?>
									<li class="clearfix d-flex align-items-center">

																<!-- Image -->
																<img class="img-fluid" src="../Assets/public/<?=$our_services_Single['image'];?>" width="100px" height="100px">

																<!-- Text -->
																<div class="post-summary">
																	<p style="padding-left:20px;">
																	<a href="our-services.html?id=<?=$our_services_Single['student_service_service_id'];?>" class="txt-400"><?=$our_services_Single['service_name'];?></a>
																	</p>
																</div>

															</li>
									
									<?php
									}
									?>
									</ul>

								</div>