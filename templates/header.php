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

$fonts  = "<link href='http://fonts.googleapis.com/css?family=Ubuntu' 
            rel='stylesheet' type='text/css'>";
$fonts .= "<link href='http://fonts.googleapis.com/css?family=Droid+Sans' 
            rel='stylesheet' type='text/css'>";

?>

<!DOCTYPE html>

<html>
	<head>
		<!-- Include CSS Stylesheets -->
		<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
		<?= $fonts; ?>

	<title><?= $name; ?></title>

	</head>

	<body>

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/nav.php'); ?>