<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/preheader.php');
include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/templates/postheader.php');
?>
 
<div class="info-box" id="research-box">
	<h2 class="info-box">Research</h2>
	<br>
	<ul class="research">
		<li>
			<h3 class="autosampler">Autosampler Network for Nutrient Flux Determination</h3>
			<p>
				As an Undergraduate Research Assistant I have conducted research into 
				computer engineering with an application in automated water sampling.
				I worked with the Environmental Engineering Department at UCF to design, build,
				and deploy an automatic water sampler that contains special features such as
				remote configuration and activation via cell phone, portability, and affordability.
			</p>
			<br>
			<p>
				Throughout the project, I designed and constructed all of the circuitry to power
				a total of four automatic sampling devices that are all controlled by a single central
				unit. Each sampling device remains on standby until a researcher sends an SMS text
				message to the central unit in the field. This unit then transmits a radio signal to
				tell the four sampling devices to activate simultaneously.
			</p>
			<img src="../../assets/images/stacky/autosampler_proto1.jpg"
				 alt="Autosampler Prototype v1" width="75%">
			<p>
				Research paper in preparation.
			</p>
		</li>
	</ul>
</div>

<?php

include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php');

?>