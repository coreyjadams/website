<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			header.inc.php
* @Package:		GetSimple
* @Action:		Skeleton theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	
	<?php get_header(); ?>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php get_theme_url(); ?>/stylesheets/layout.css">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php get_theme_url(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php get_theme_url(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php get_theme_url(); ?>/images/apple-touch-icon-114x114.png">

</head>
<body>    
	<div class="container">
	    
	    <header class="sixteen columns">		
			<h1 class="remove-bottom" style="margin-top: 40px"><?php get_site_name(); ?></h1>
			<a href="<?php get_site_url(); ?>"><h5 style="float:right;"><?php get_component('tagline'); ?></h5></a>
			<hr />
		</header>