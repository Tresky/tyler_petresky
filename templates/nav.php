<?php

/*
 * File: nav.php
 *
 * Title: 	Navigation Panel
 * Author: 	Tyler Petresky
 * Data: 	June 11, 2014
 *
 * Desc: This file needs to be includes on every page file. It has
 * the navigation panel in it.
 */

?>

<nav>
	<a href="/">
		<div><h1><?= $name; ?></h1></div>
	</a>

	<ul>
		<div><li><a href="/pages/about">About</a></li></div>
		<div><li><a href="/pages/contact">Contact</a></li></div>
		<div><li><a href="/pages/projects">Projects</a></li></div>
		<div><li><a href="/pages/research">Research</a></li></div>
	</ul>
</nav>