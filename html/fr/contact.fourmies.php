<?php
	require_once 'common.php';
	$title = 'JMei Solution-Electronic-Radio transmission - Société de développement électronique et radio RC';
	$description = 'JMei - Radiocommande industrielle - Nous contacter...';
	$keywords = 'JMei,Solution,Electronic,Radio transmission,développement électronique,radio RC,Radiocommande industrielle,Marloie';

	$pageId = 'contact';
	$pageFooterScripts = <<<PAGESC
		<script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlgbq6h0-9enhfTnPCxxLTAaB3MMfh9GY&amp;callback=initMap&amp;language=fr"></script> <!-- Translator Task: Adapt the &language= -->

PAGESC;
	include 'header.php';
	include 'nav.php';

?>
			<div id="contact-feedback">
				<form class="contact-form" method="get" data-target="#contact-feedback" action="/sendmail.php">
					<legend>Contactez-nous!</legend>
					<fieldset>
						<label>Votre Nom <span>(Requis)</span></label>
						<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span12" required>
						<label>Votre adresse e-mail <span>(Requis)</span></label>
						<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span12" required>
						<label>Votre numéro de Téléphone</label>
						<input id="phone" type="text" title="Your phone number" name="phone" class="inputtext span12">
						<label>Message <span>(Requis)</label>
						<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span12" required></textarea>
						<button id="submit-btn" type="submit" class="btn">Envoi</button>
						<input type="hidden" name="lang" value="fr">
						<input type="hidden" name="reason" value="Contact">
					 </fieldset>
				</form>
			</div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Contactez-nous!</h2>
                    <p><b>JMei-France</b><br>
											Solution-Electronic-Radio transmission<br>
											ZA La Marliere<br>
					  4, rue Raymond Chomel<br>
											F-59610 Fourmies<br>
											France<br>
											Tel. : +33 3 66 24 01 16<br>
											<a href="mailto:contact@jmei.fr">contact@jmei.fr</a></p>
                </div>
                <div class="span4">
                    <h2>Heures d'ouverture</h2>
                    <p>Notre société est ouverte tous les jours ouvrables <br>
                    (du lundi au vendredi), de 8h à 18h</p>
				</div>
                <div class="span4">
                    <h2>Comptabilité</h2>
					<p>JMei sprl<br>
					TVA: FR41819060476<br>
					<a href="pdf/JMei-France-sprl.pdf">Coordonnées bancaires</a></p>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<div id="map-canvas" data-jmei="fourmies"></div>
					<small><a target="_blank" href="https://www.google.fr/maps/place/Rue+du+G%C3%A9n%C3%A9ral+Raymond+Chomel,+59610+Fourmies/@50.0224684,4.0318365,17z/data=!4m2!3m1!1s0x47c2747c937ad65d:0x2fff514930f4db7c" style="color:#0000FF;text-align:left">Agrandir la carte</a></small>
				</div>
			</div>

 <?php include 'footer.php';?>
