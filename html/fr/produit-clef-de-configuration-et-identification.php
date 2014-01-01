<?php
	include 'common.php';
	$title = 'JMei - Hardkey - Adresse émetteur radio';
	$description .='';
	$pageId = 'KEY';
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
					<h3>Clé d'identification pour les émetteurs JMei</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-configuration-and-identification-key/identification-keys.jpg" alt="Identification Keys" />
						</div>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('KEY.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<a name="features"></a>
				  <h4>Spécification</h4>
					<p>Les émetteurs JMei de type Helice, RCB90,RCB700, RCB1000 et RCB3000 ont leurs adresses, fréquences et stand-by paramétrables.<br>
					  Ces données mémoire peuvent être modififiés aisément par le personnel de maintenance suivant une procédure JMei très simple.<br />
					Ces paramètres sont modifiables par les boutons-poussoir et joysticks.</p>
					<p>In order to reduce this maintenance operation and to simplify maintenance jobs, address and frequencies/channels can be <strong>memorized in a memory key</strong>.</p>
					<p>This external hard key, easy removable, foreseen for quick exchange is unique for a specific IRC radio remote control equipment and for a specific application.</p>
					<p>In case of transmitter failure, the operator can easily remove the hard key and replace it on the spare unit; all the transmitter parameters and configuration will be kept.</p>
					<h4>Advantage of the JMei identification key</h4>
					<ul>
						<li>Allows a quick exchange of a working transmitter to the spare, an easy job, quick achieve.</li>
						<li>Allows to identify one application with one radio remote control and only these one will be identified by the memory key.</li>
						<li>Robust memory key, foreseen for industrial environment, installed in a safe location on the transmitter.</li>
					</ul>
					<a name="uses"></a>
				  <h4>Compatibilité</h4>
					<ul>
						<li><a href="<?php echo Site::relativeUrl('Helice');?>">HELICE</a></li>
						<li><a href="<?php echo Site::relativeUrl('RCB90');?>">RCB90</a></li>
						<li><a href="<?php echo Site::relativeUrl('RCB700');?>">RCB700</a></li>
						<li><a href="<?php echo Site::relativeUrl('RCB1000');?>">RCB1000</a></li>
						<li><a href="<?php echo Site::relativeUrl('RCB3000');?>">RCB3000</a></li>
					</ul>

				</div>
 <?php include 'footer.php';?>
