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

	<ul class="nav">
		<li><a href="/pages/about" class="nav">About</a></li>
		<li><a href="/pages/contact" class="nav">Contact</a></li>
		<li><a href="/pages/projects" class="nav">Projects</a></li>
	</ul>
</nav>