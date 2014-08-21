<?php

/*
 * File: 	header.php
 * Title:	Header
 * Author: 	Tyler Petresky
 *
 * Desc: This file need to be includes in every page. It
 * contains the doctype, CSS link, opening tags, and includes
 * the navigation panel.
 */

$name = "Tyler Petresky";

$keywords = "Tyler,Petresky,Tyler Petresky,computer,engineer,computer engineer
			,ewb,web,design,c++,arduino,embedded systems";

$fonts  = "<link href='http://fonts.googleapis.com/css?family=Ubuntu' 
            rel='stylesheet' type='text/css'>";
$fonts .= "<link href='http://fonts.googleapis.com/css?family=Droid+Sans' 
            rel='stylesheet' type='text/css'>";
$fonts .= "<link href='http://fonts.googleapis.com/css?family=Lato'
			rel='stylesheet' type='text/css'>";
$fonts .= "<link href='http://fonts.googleapis.com/css?family=Merriweather'
			rel='stylesheet' type='text/css'>";

?>

<!-- If you are reading this, you are either in my software team,
     a malicious POS, or a potential employer. Have fun. -->

<!DOCTYPE html>

<html>
	<head>
		<!-- Include CSS Stylesheets -->
		<link rel="stylesheet" type="text/css" href="/assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
		<!--<link rel="stylesheet" type="text/css" href="/assets/css/nav_styles.css">-->
		<!--<link rel="stylesheet" type="text/css" href="/assets/css/info_box_styles.css">-->
		<?= $fonts; ?>

		<!-- Meta Data for Site -->
		<meta name="description" content="Tyler Petresky, Computer Engineer">
		<meta name="keywords" content='<?= $keywords; ?>'>
		<meta name="author" content="Tyler Petresky">

		<!-- Javascript -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!--<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>-->
		<script type="text/javascript" src="/assets/javascript/helpers.js"></script>

		<title><?= $name; ?></title>