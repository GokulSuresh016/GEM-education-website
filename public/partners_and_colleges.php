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
$active="Partner Institutes & Universities";
$active_parent="Service";
include("../template/head.php");
include("../template/preloader.php");
include("../template/menu.php");
//page body begins here
if(isset($_GET['id']))
{
	
$active_parent="Partner Institutes & Universities";
$college=$obj->select_any_one("tbl_colleges_college","colleges_college_id='".$_GET['id']."'");	
$active=$college['college_name'];
include("../pages/breadcrumb.php");
include("../pages/college_details_content.php");
include("../pages/popular_college_list.php");
include("../pages/consultation_banner.php");
}
else
{
include("../pages/breadcrumb.php");
include("../pages/partner_institutes.php");
include("../pages/oversea_banner.php");	
}
//page body end
include("../template/footer.php");
?>