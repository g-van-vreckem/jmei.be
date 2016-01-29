<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';

	$pageId = 'distribution';
	$pageFooterScripts = <<<PAGESC
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=en"></script> <!-- Translator Task: Adapt the &language= -->

PAGESC;
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
				<div class="span3">
				<!--Sidebar content-->
					<div class="sidenavmix">
						<ul class="nav nav-tabs nav-stacked">
							<li class="nav-header">Regio</li>
							<li><a href="#benelux">Benelux en wereldwijd<i class="icon-chevron-right pull-right"></i></a></li>
							<li><a href="#france">Frankrijk<i class="icon-chevron-right pull-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="span9">
				<!--Body content-->
					<a  class="anchor" id="benelux"></a>
					<section>
						<h3>Benelux en wereldwijd</h3>
						<p>JMei voorziet distributie in de Benelux en overal ter wereld</p>
						<legend class="btn" data-toggle="collapse" data-target="#contact-benelux">Neem contact op met ons team!</legend>
						<div class="collapse" id="contact-benelux">
							<p>&nbsp;</p>
							<form class="contact-form" method="get" data-target="#contact-benelux" action="/sendmail.php">
								<fieldset>
									<label>Uw naam  <span>(verplicht)</span></label>
									<input id="name-benelux" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									<label>Uw e-mailadres <span>(verplicht)</span></label>
									<input id="email-benelux" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									<label>Uw telefoonnummer</label>
									<input id="phone-benelux" type="text" title="Your phone number" name="phone" class="inputtext span9">
									<label>Bericht  <span>(verplicht)</label>
									<textarea id="message-benelux" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									<button id="submit-btn-benelux" type="submit" class="btn">Verzenden</button>
									<input type="hidden" name="lang" value="fr">
									<input type="hidden" name="reason" value="Sales Contact JMei">
							  </fieldset>
							</form>
						</div>
					</section>
					<hr>
					<a class="anchor" id="france"></a>
					<section>						
						<h3>Frankrijk</h3>
						<p><a target="_blank" href="http://www.opsyselec.fr/">Opsyselec</a> verdeelt onze producten in Noord-Frankrijk, in de volgende departementen:</p>
						<ul>
							<li>Parijs</li>
							<li>Regio Parijs (78, 77, 91, 93, 94, 95)</li>
							<li>Seine Maritime (76, 14)</li>
						</ul>
						<legend class="btn" data-toggle="collapse" data-target="#contact-opsyselec" >Neem contact op met het verkoopteam van Opsyselec!</legend>
						<div class="collapse" id="contact-opsyselec">
							<p>&nbsp;</p>
							<form class="contact-form" method="get" data-target="#contact-opsyselec" action="/sendmail.php">
								<fieldset>
									<div class="control-group">
										<label>Uw naam  <span>(verplicht)</span></label>
										<input id="name-opsyselec" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									</div>
									<div class="control-group">
										<label>Uw e-mailadres <span>(verplicht)</span></label>
										<input id="email-opsyselec" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									</div>
									<div class="control-group">
										<label>Uw telefoonnummer</label>
										<input id="phone-opsyselec" type="text" title="Your phone number" name="phone" class="inputtext span9">
									</div>
									<div class="control-group">
										<label>Bericht  <span>(verplicht)</label>
										<textarea id="message-opsyselec" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									</div>
									<button id="submit-btn-opsyselec" type="submit" class="btn">Verzenden</button>
									<input type="hidden" name="lang" value="fr">
									<input type="hidden" name="reason" value="Sales Contact opsyelec">
								 </fieldset>
							</form>
						</div>
						<hr>
						<p><a target="_blank" href="http://www.mediamesures.com/">MEDIA MESURES</a> verdeelt onze producten in Zuidoost-Frankrijk, in de volgende departementen:</p>
						<ul>
							<li>Provence-Alpes-Côte d'Azur (4, 5, 6, 13, 83, 84) </li>
							<li>Rhône-Alpes (1, 7, 26, 38, 42, 69, 73, 74)</li>
							<li>Bourgogne (21, 58, 71, 89)</li>
							<li>Franche-Comté (39)</li>
							<li>Corsica  (2A, 2B)</li>
						</ul>
						<legend class="btn" data-toggle="collapse" data-target="#contact-mediamesures" >Neem contact op met het verkoopteam van MEDIA MESURES!</legend>
						<div class="collapse" id="contact-mediamesures">
							<p>&nbsp;</p>
							<form class="contact-form" method="get" data-target="#contact-mediamesures" action="/sendmail.php">
								<fieldset>
									<div class="control-group">
										<label>Uw naam  <span>(verplicht)</span></label>
										<input id="name-mediamesures" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									</div>
									<div class="control-group">
										<label>Uw e-mailadres <span>(verplicht)</span></label>
										<input id="email-mediamesures" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									</div>
									<div class="control-group">
										<label>Uw telefoonnummer</label>
										<input id="phone-mediamesures" type="text" title="Your phone number" name="phone" class="inputtext span9">
									</div>
									<div class="control-group">
										<label>Bericht  <span>(verplicht)</label>
										<textarea id="message-mediamesures" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									</div>
									<button id="submit-btn-mediamesures" type="submit" class="btn">Verzenden</button>
									<input type="hidden" name="lang" value="fr">
									<input type="hidden" name="reason" value="Sales Contact Media Mesures">
								 </fieldset>
							</form>
						</div>
						<hr>
						<p><a target="_blank" href="http://www.sermadep.fr/">SER.MA.DEP</a> verdeelt onze producten in Noord-Frankrijk, in de volgende departementen:</p>
						<ul>
							<li>Champagne-Ardenne (08, 10, 51, 52)</li>
						</ul>
						<legend class="btn" data-toggle="collapse" data-target="#contact-sermadep" >Neem contact op met het verkoopteam van SER.MA.DEP!</legend>
						<div class="collapse" id="contact-sermadep">
							<p>&nbsp;</p>
							<form class="contact-form" method="get" data-target="#contact-sermadep" action="/sendmail.php">
								<fieldset>
									<div class="control-group">
										<label>Uw naam  <span>(verplicht)</span></label>
										<input id="name-sermadep" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									</div>
									<div class="control-group">
										<label>Uw e-mailadres <span>(verplicht)</span></label>
										<input id="email-sermadep" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									</div>
									<div class="control-group">
										<label>Uw telefoonnummer</label>
										<input id="phone-sermadep" type="text" title="Your phone number" name="phone" class="inputtext span9">
									</div>
									<div class="control-group">
										<label>Bericht  <span>(verplicht)</label>
										<textarea id="message-sermadep" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									</div>
									<button id="submit-btn-sermadep" type="submit" class="btn">Verzenden</button>
									<input type="hidden" name="lang" value="fr">
									<input type="hidden" name="reason" value="Sales Contact SER.MA.DEP">
								 </fieldset>
							</form>
						</div>
					</section>
				</div>
			</div>
 <?php include 'footer.php';?>
