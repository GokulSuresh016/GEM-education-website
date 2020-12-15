<?php
/*
File Name:	courses.html
Objective:	index page of gem 
Begin:		10 oct 2020
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
include("../pages/course_category_all_course.php");
include("../pages/popular_courses.php");
include("../pages/need_some_help.php");
include("../pages/testimony.php");
include("../pages/oversea_banner.php");
//page body end
include("../template/footer.php");

?>