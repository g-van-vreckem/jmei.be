<?php
	include 'common.php';
	$title .= '';
	$description .='';
	$pageId = 'contact';
	$pageFooterScripts = <<<PAGESC
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=en"></script> <!-- Translator Task: Adapt the &language= -->

PAGESC;
	include 'header.php';
	include 'nav.php';

?>
			<div id="contact-feedback">
				<form class="contact-form" method="get" data-target="#contact-feedback" action="/sendmail.php">
					<legend>Contactez-nous!</legend>
					<fieldset>
						<label>Votre Nom <span>(Requis)</span></label>
						<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span12">
						<label>Votre adresse e-mail <span>(Requis)</span></label>
						<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span12">
						<label>Message <span>(Requis)</label>
						<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span12"></textarea>
						<button id="submit-btn" type="submit" class="btn">Envois</button>
						<input type="hidden" name="lang" value="en">
						<input type="hidden" name="reason" value="Contact">
					 </fieldset>
				</form>	
			</div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Contactez-nous!</h2>
                    <p><b>JMei</b>
					Solution-Electronic-Radio transmission<br>
					Chaussée de Rochefort, 123<br>
						B-6900 Marloie<br>
						Belgique<br>
						Tel. : +32 84 34.41.75<br>
						Fax : +32 84 34.41.77<br>
						<a href="mailto:info@jmei.com">info@jmei.be</a></p>
                </div>
                <div class="span4">
                    <h2>Heures d'ouverture</h2>
                    <p>Notre société est ouverte tous les jours ouvrables <br>
                    (du lundi au vendredi), de 8h à 18h</p>
				</div>
                <div class="span4">
                    <h2>Comptabilité</h2>
					<p>JMei sprl<br>
					TVA: BE0 534 889 177<br>
					<a href="pdf/JMei%20sprl.pdf">Coordonnées bancaires</a></p>
				</div>
            </div>
            <div class="row">
                <div class="span12">
	                <div id="map-canvas"></div>
					<small><a target="_blank" href="https://maps.google.be/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=123+rue+de+rochefort,+Marloie&amp;aq=&amp;sll=50.154465,4.624975&amp;sspn=3.720241,5.751343&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Chauss%C3%A9e+de+Rochefort+123,+6900+Marche-en-Famenne,+Luxembourg,+R%C3%A9gion+wallonne&amp;z=14&amp;ll=50.199664,5.317268" style="color:#0000FF;text-align:left">Agrandir la carte</a></small>
				</div>
			</div>
 <?php include 'footer.php';?>
