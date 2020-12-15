<?php
/*
File Name:	Index.html
Objective:	index page of gem 
Begin:		9 oct 2020
Author:  	Nisanth
Version:	V0
******************************************************************************/

require_once(dirname(__FILE__)."/../Assets/config/db_connect.php");
$obj=new db_connect;

$page_title="Gem Education| Migration | Study in Australia";

include("../template/head.php");
include("../template/preloader.php");
include("../template/menu.php");
//page body begins here
include("../pages/banner.php");
include("../pages/services_2.php");
include("../pages/home_about_us.php");
include("../pages/features.php");
include("../pages/opportunities.php");
include("../pages/partner_institutes.php");
include("../pages/testimony.php");
//page body end
include("../template/footer.php");

?>