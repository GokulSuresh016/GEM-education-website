<?php
/*
File Name:	Index.html
Objective:	index page of gem 
Begin:		10 oct 2020
Author:  	Nisanth
Version:	V0
******************************************************************************/

require_once(dirname(__FILE__)."/../Assets/config/db_connect.php");
$obj=new db_connect;

$page_title="Gem Education| Migration | Study in Australia";
$active="About Us";
$active_parent="About";
include("../template/head.php");
include("../template/preloader.php");
include("../template/menu.php");
//page body begins here
include("../pages/breadcrumb.php");
include("../pages/home_about_us.php");
//include("../pages/migration_service.php");
//include("../pages/features.php");
//include("../pages/testimony.php");
include("../pages/consultation_banner.php");
//page body end
include("../template/footer.php");

?>