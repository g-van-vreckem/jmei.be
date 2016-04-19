<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';

	$pageId = 'contact';
	$pageFooterScripts = <<<PAGESC
		<script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlgbq6h0-9enhfTnPCxxLTAaB3MMfh9GY&amp;callback=initMap&amp;language=nl"></script> <!-- Translator Task: Adapt the &language= -->

PAGESC;
	include 'header.php';
	include 'nav.php';

?>
			<div id="contact-feedback">
				<form class="contact-form" method="get" data-target="#contact-feedback" action="/sendmail.php">
					<legend>Neem contact op met ons!</legend>
					<fieldset>
						<label>Uw naam  <span>(verplicht)</span></label>
						<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span12" required>
						<label>Uw e-mailadres <span>(verplicht)</span></label>
						<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span12" required>
						<label>Uw telefoonnummer</label>
						<input id="phone" type="text" title="Your phone number" name="phone" class="inputtext span12">
						<label>Bericht  <span>(verplicht)</label>
						<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span12" required></textarea>
						<button id="submit-btn" type="submit" class="btn">Verzenden</button>
						<input type="hidden" name="lang" value="nl">
						<input type="hidden" name="reason" value="Contact">
					 </fieldset>
				</form>
			</div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Neem contact op met ons!</h2>

                    <p><b>JMei</b>
					Solution-Electronic-Radio transmission<br>
					Chaussée de Rochefort, 123<br>
						B-6900 Marloie<br>
						Belgique<br>
						Tel. : +32 84 34.41.75<br>
						Fax : +32 84 34.41.77<br>
						<a href="mailto:info@jmei.be">info@jmei.be</a></p>
                </div>
                <div class="span4">
                    <h2>Openingsuren</h2>
                    <p>We zijn elke werkdag (maandag - vrijdag)<br> open
van 8 tot 18 uur</p>
				</div>
                <div class="span4">
                    <h2>Boekhoudkundige info</h2>
					<p>JMei bvba<br>
					BTW: BE0 534 889 177<br>
					<a href="pdf/JMeisprl.pdf">Bankgegevens</a></p>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<div id="map-canvas" data-jmei="marloie"></div>
					<small><a target="_blank" href="https://maps.google.be/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=123+rue+de+rochefort,+Marloie&amp;aq=&amp;sll=50.154465,4.624975&amp;sspn=3.720241,5.751343&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Chauss%C3%A9e+de+Rochefort+123,+6900+Marche-en-Famenne,+Luxembourg,+R%C3%A9gion+wallonne&amp;z=14&amp;ll=50.199664,5.317268" style="color:#0000FF;text-align:left">Vergroting van de kaart</a></small>

				</div>
			</div>

 <?php include 'footer.php';?>
