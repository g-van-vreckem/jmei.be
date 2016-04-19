<?php
	require_once 'common.php';
	$title .= '';
	$description .='';
	$keywords .= '';

	$pageId = 'contact';
	$pageFooterScripts = <<<PAGESC
		<script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlgbq6h0-9enhfTnPCxxLTAaB3MMfh9GY&amp;callback=initMap&amp;language=en"></script> <!-- Translator Task: Adapt the &language= -->

PAGESC;
	include 'header.php';
	include 'nav.php';

?>
			<div id="contact-feedback">
				<form class="contact-form" method="get" data-target="#contact-feedback" action="/sendmail.php">
					<legend>Contact Us!</legend>
					<fieldset>
						<label>Your name <span>(Required)</span></label>
						<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span12" required>
						<label>Your email address <span>(Required)</span></label>
						<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span12" required>
						<label>Your phone number</label>
						<input id="phone" type="text" title="Your phone number" name="phone" class="inputtext span12">
						<label>Message <span>(Required)</label>
						<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span12" required></textarea>
						<button id="submit-btn" type="submit" class="btn">Submit</button>
						<input type="hidden" name="lang" value="en">
						<input type="hidden" name="reason" value="Contact">
					 </fieldset>
				</form>
			</div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Contact Us!</h2>
										<p><b>JMei-France</b><br>
											Solution-Electronic-Radio transmission<br>
											ZA La Marliere - 4, rue Raymond Chomel<br>
											Ruche d'Entreprises<br>
											F-59610 Fourmies<br>
											France<br>
											Tel. : +33 3 66 24 01 16<br>
											<a href="mailto:contact@jmei.fr">contact@jmei.fr</a></p>
                </div>
                <div class="span4">
                    <h2>Opening Hours</h2>
                    <p>Our Business is accessible on business days, Monday to Friday from 8 am to 6 p.m.</p>
				</div>
                <div class="span4">
                    <h2>Comptability</h2>
					<p>JMei sprl<br>
					VAT: BE0 534 889 177<br>
					<a href="pdf/JMeisprl.pdf">Banking information</a></p>
				</div>
            </div>
			<div class="row">
				<div class="span12">
					<div id="map-canvas" data-jmei="fourmies"></div>
					<small><a target="_blank" href="https://www.google.fr/maps/place/Rue+du+G%C3%A9n%C3%A9ral+Raymond+Chomel,+59610+Fourmies/@50.0224684,4.0318365,17z/data=!4m2!3m1!1s0x47c2747c937ad65d:0x2fff514930f4db7c" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div>
			</div>
 <?php include 'footer.php';?>
