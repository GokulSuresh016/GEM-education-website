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
$active="Course Category";
$active_parent="Course";
include("../template/head.php");
include("../template/preloader.php");
include("../template/menu.php");
//page body begins here


if(isset($_GET['id']))
{
	$courseCatSingle=$obj->select_any_one("tbl_study_course_category","study_course_category_id='".$_GET['id']."'");
	$active=$courseCatSingle['category'];
	include("../pages/breadcrumb.php");
	include("../pages/course_category_single.php");
	include("../pages/need_some_help.php");
	
}
else
{
	include("../pages/breadcrumb.php");
	include("../pages/course_category_full.php");
		include("../pages/popular_courses.php");
}
//include("../pages/migration_service.php");
//include("../pages/features.php");
//include("../pages/testimony.php");
include("../pages/consultation_banner.php");
//page body end
include("../template/footer.php");

?>