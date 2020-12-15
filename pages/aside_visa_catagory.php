
								<!-- SIDEBAR CATEGORIES --> 
								<div class="blog-categories sidebar-div mb-50">
										
									<!-- Title -->
									<h5 class="h5-lg">Visa Categories: </h5>

									<!-- List -->
									<ul class="blog-category-list clearfix">
									
									<?php
									
									$visas=$obj->select_any("tbl_migration_migration_details","1");
									
									foreach($visas as $singleVisa)
									{
									?>
									
										<li><a href="visa-details.html?id=<?php echo $singleVisa['migration_migration_details_id']; ?>" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i><?php echo $singleVisa['migration_type']; ?></a></li>

								<?php
									}
								?>


								</ul>

								</div>