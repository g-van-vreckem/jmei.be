<?php
	include 'common.php';
	$title .= '';
	$description .='';
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
							<li class="nav-header">Region</li>
							<li><a href="#benelux">Benelux & World <i class="icon-chevron-right pull-right"></i></a></li>
							<li><a href="#france">France <i class="icon-chevron-right pull-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="span9">
				<!--Body content-->
					<a name="benelux"></a>
					<section id="benelux">
						<h3>Benelux &amp; World</h3>
						<p>JMei ensure the sale in the Benelux</p>
						<legend class="btn" data-toggle="collapse" data-target="#contact-jmei">Contact the JMei sales team!</legend>
						<div class="collapse" id="contact-jmei">
							<form class="contact-form" method="get" data-target="#contact-jmei" action="/sendmail.php">
								<fieldset>
									<label>Your name <span>(Required)</span></label>
									<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									<label>Your email address <span>(Required)</span></label>
									<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									<label>Message <span>(Required)</label>
									<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									<button id="submit-btn" type="submit" class="btn">Submit</button>
									<input type="hidden" name="lang" value="en">
									<input type="hidden" name="reason" value="Sales Contact JMei">
								 </fieldset>
							</form>
						</div>
					</section>
					<hr>
					<a name="france"></a>
					<section id="france">						
						<h3>France</h3>
						<p><a target="_blank" href="http://www.opsyselec.fr/">Opsyselec</a> Distribute our product in the north of France and cover the following Departments:</p>
						<ul>
							<li>Paris</li>
							<li>Région parisienne (78, 77, 91, 93, 94, 95)</li>
							<li>Seine Maritime (76, 14)</li>
						</ul>
						<legend class="btn" data-toggle="collapse" data-target="#contact-opsyselec" >Contact the Opsyselec sales team!</legend>
						<div class="collapse" id="contact-opsyselec">
							<form class="contact-form" method="get" data-target="#contact-opsyselec" action="/sendmail.php">
								<fieldset>
									<label>Your name <span>(Required)</span></label>
									<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									<label>Your email address <span>(Required)</span></label>
									<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									<label>Message <span>(Required)</label>
									<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									<button id="submit-btn" type="submit" class="btn">Submit</button>
									<input type="hidden" name="lang" value="en">
									<input type="hidden" name="reason" value="Sales Contact opsyelec">
								 </fieldset>
							</form>
						</div>
						<hr>
						<p><a target="_blank" href="http://www.mediamesures.com/">MEDIA MESURES</a> Distribute our product in the south east of France and cover the following Departments:</p>
						<ul>
							<li>Provence-Alpes-Cotes d'Azur (4, 5, 6, 13, 83, 84) </li>
							<li>Rhônes-Alpes (1, 7, 26, 38, 42, 69, 73, 74)</li>
							<li>Bourgogne (21, 58, 71, 89)</li>
							<li>Franche-Comté (39)</li>
							<li>Corse (2A, 2B)</li>
						</ul>
						<legend class="btn" data-toggle="collapse" data-target="#contact-mediamesures" >Contact the MEDIA MESURES sales team!</legend>
						<div class="collapse" id="contact-mediamesures">
							<form class="contact-form" method="get" data-target="#contact-mediamesures" action="/sendmail.php">
								<fieldset>
									<label>Your name <span>(Required)</span></label>
									<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									<label>Your email address <span>(Required)</span></label>
									<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									<label>Message <span>(Required)</label>
									<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									<button id="submit-btn" type="submit" class="btn">Submit</button>
									<input type="hidden" name="lang" value="en">
									<input type="hidden" name="reason" value="Sales Contact Media Mesures">
								 </fieldset>
							</form>
						</div>
						<hr>
						<p><a target="_blank" href="http://www.sermadep.fr/">SER.MA.DEP</a> Distribute our product in the north of France and cover the following Departments:</p>
						<ul>
							<li>Champagne-Ardenne (08, 10, 51, 52)</li>
						</ul>
						<legend class="btn" data-toggle="collapse" data-target="#contact-sermadep" >Contact the SER.MA.DEP sales team!</legend>
						<div class="collapse" id="contact-sermadep">
							<form class="contact-form" method="get" data-target="#contact-sermadep" action="/sendmail.php">
								<fieldset>
									<label>Your name <span>(Required)</span></label>
									<input id="name" type="text" title="Your name is required!" name="name" class="inputtext required span9">
									<label>Your email address <span>(Required)</span></label>
									<input id="email" type="email" title="Your email is required!" name="email" class="inputtext required email span9">
									<label>Message <span>(Required)</label>
									<textarea id="message" title="Please type your message!" name="message" rows="12" cols="72" class="required span9"></textarea>
									<button id="submit-btn" type="submit" class="btn">Submit</button>
									<input type="hidden" name="lang" value="en">
									<input type="hidden" name="reason" value="Sales Contact SER.MA.DEP">
								 </fieldset>
							</form>
						</div>
					</section>
				</div>
			</div>
 <?php include 'footer.php';?>
