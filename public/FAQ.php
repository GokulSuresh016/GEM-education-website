<?php
/*
File Name:	Index.html
Objective:	index page of gem 
Begin:		12 oct 2020
Author:  	Nisanth
Version:	V0
******************************************************************************/

require_once(dirname(__FILE__)."/../Assets/config/db_connect.php");
$obj=new db_connect;

$page_title="Gem Education| Migration | Study in Australia";
$active="All FAQs";
$active_parent="FAQ";
include("../template/head.php");
include("../template/preloader.php");
include("../template/menu.php");
//page body begins here
	include("../pages/breadcrumb.php");
include("../pages/faq_list.php");
include("../pages/consultation_banner.php");
//page body end
include("../template/footer.php");

?>