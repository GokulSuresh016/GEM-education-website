
				<!-- COUNTRIES-1
				============================================= -->
				<section id="countries-1" class="wide-40 countries-section division">
					<div class="container">	


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs">Immigration Opportunities</h2>

								<!-- Text -->	
								<p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat, 
								   felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
								</p> 

							</div>
						</div>	 <!-- END SECTION TITLE -->	


						<div class="row">

<?php

$countries=$obj->select_any("tbl_general_countries","1");

foreach($countries as $singleCountry)
{

?>




							<!-- COUNTRY BOX -->
							<div class="col-md-6 col-lg-4 col-xl-3">
								<div class="cbox-1">

									<!-- Flag -->	
									<div class="country-flag">
										<img src="../Assets/public/<?php echo $singleCountry['flag'];?>" alt="flag-icon"/>
										<h5 class="h5-lg"><?php echo $singleCountry['country_name'];?></h5>
									</div>

									<!-- Text -->
									<p class="p-sm"><?php echo $singleCountry['short_description'];?>
									</p>

									<!-- Links List -->
									<ul class="links-list darkblue-color">

									<!--	<li><a href="#">Singapore augue erat sapien augue <i class="fas fa-caret-right"></i></a></li> -->


										<li><a href="country-details.html">Read More <i class="fas fa-caret-right"></i></a></li>

									</ul>

								</div>
							</div>
							
							<?php
							
							}
							
							?>





						</div>    <!-- End row -->
					</div>	   <!-- End container -->
				</section>	<!-- END COUNTRIES-1 -->