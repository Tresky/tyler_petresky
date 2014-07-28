<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/preheader.php');
include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/templates/postheader.php');
?>
 
<div class="info-box" id="projects-box">
	<h2 class="info-box">My Projects</h2>
	<br>
	<ul class="projects">
		<li>
			<h3 class="limbitless"><i>Limb</i>itless Project</h3>
			<p>
				The <i>Limb</i>itless Project is an effort to provide a 6-year old boy
				named Alex, who was born without a right arm, with an affordable,
				fully electronic prosthetic limb. This project was born and taken on
				by a group of students attending the University of Central Florida.
				Alex, prviously without a right arm, now has a prosthetic right arm that
				allows him to open and close his fingers and pick up objects.
			</p>
			<img src="../../assets/images/limbitless_pictures/limbitless_fam_team_1.jpg"
				 alt="Lim[b]itless Family and the Team" width="75%">
			<img src="../../assets/images/limbitless_pictures/alex_arm1.jpg"
				 alt="Alex with his brand new arm." width="75%">
		</li>
		<li>
			<h3 class="weatherstation">EWB Weatherstation</h3>
			<p>
				Engineers Without Borders (EWB) is an international, non-profit
				organization that specializes in assisting 3rd-world countries
				and communities with various projects such as water filtration
				and home building. Our chapter has created a weather monitoring
				station that can be taken to other countries and deployed to
				measure weather data over an extended period of time. This allows
				us to better assess the area for future projects and opportunities.
			</p>
		</li>
	</ul>
</div>

<?php

include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php');

?>