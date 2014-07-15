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
		<h1 class="nav"><?= $name; ?></h1>
	</a>

	<!-- Used for the smallest screen sizes. The checkbox
		 controls a drop-down menu that appears when the
		 screen is too small to host the cross bar.-->
	<input type="checkbox", id="nav-button">
	<label for="nav-button">Menu</label>
	<ul class="nav">
		<li id="nav-about"><a href="/pages/about">About</a></li>
		<li id="nav-contact"><a href="/pages/contact">Contact</a></li>
		<li id="nav-projects"><a href="/pages/projects">Projects</a></li>
		<li id="nav-resume"><a href="https://docs.google.com/document/d/1AVTCfnH_vGQpApFrcm-Ty6pOlIskvE9XK_sW4h1RBuE/edit?usp=sharing">Resume</a></li>
		<li id="nav-research"><a href="/pages/research">Research</a></li>
	</ul>
</nav>