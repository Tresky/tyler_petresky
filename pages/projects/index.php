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
			<h3 class="limbitless">Limbitless Project</h3>
			<p>
				The Limbitless Project was originally an effort to provide a 6-year old boy
				named Alex, who was born without a right arm, with an affordable,
				fully electronic prosthetic limb. This project was born and taken on
				by a group of students attending the University of Central Florida.
				Alex, prviously without a right arm, now has a brand new right arm that
				allows him to open and close his fingers and pick up objects.
			</p>
			<p>
				<i>My role in this project was as the Lead Electronics Developer.</i> I designed
				the circuitry inside of the arm and also programmed it all using an Arduino
				Micro board.
			</p>
			<img src="../../assets/images/limbitless_pictures/limbitless_fam_team_1.jpg"
				 alt="Limbitless Family and the Team" width="75%">
			<p>
				After the completion of the first arm for Alex, the project recieved international
				media coverage in over 25 countries and we began to receive requests for arms
				from all around the globe. Our current hope is to transform this initiative
				into a full non-profit organization dedicated to providing affordable 
				solutions to those children (and adults) in need of an arm.
			</p>
			<p>
				<i>My current role in the team is as the Project Manager.</i>
			</p>
			<img src="../../assets/images/limbitless_pictures/alex_arm1.jpg"
				 alt="Alex with his brand new arm." width="75%">
			<p>
			For the full photo album, visit this link: <a href="http://ktcrabbphotography.pixieset.com/alex/">Photo Gallery</a>
			</p>
			<br>
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
			<br>
			<p>
				The Weather Station features a full load of sensors such as: rain, wind speed,
				wind direction, temperatures, air pressure, and light radiation. 
				To control the whole system, a Rapsberry Pi was utilized and was programming
				in Python (with Django used for the MySQL database framework) to be able
				to contantly collect data and send it, via satellite link, back to
				UCF.
			</p>
		</li>
	</ul>
</div>

<?php

include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php');

?>