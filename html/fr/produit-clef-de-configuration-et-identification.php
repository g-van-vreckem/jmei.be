<?php
	include 'common.php';
	$title = 'JMei - Clé mémoire - Adresse émetteur radio';
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
							<img class="img-polaroid" src="../img/product-configuration-and-identification-key/identification-keys.jpg" alt="Clé mémoire radiocommande" />
						</div>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('KEY.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<a name="features"></a>
				  <h4>But du système</h4>
					<p>Les émetteurs JMei de type Helice, RCB90,RCB700, RCB1000 et RCB3000 ont leurs adresses, fréquences et stand-by paramétrables.<br>
					  Ces données mémoire peuvent être modififiés aisément par le personnel de maintenance suivant une procédure JMei très simple.<br />
					Ces paramètres sont modifiables par les boutons-poussoir et joysticks.</p>
					<p>Afin de simplifier ces opérations et de minimiser les interventions de la maintenance, <strong>es paramètres essentiels de fonctionnement (adresse, fréquence, stand-by, ...) peuvent être inscrits dans une "clé d'identification hardware", véritable clé mémoire de la radiocommande</strong>.</p>
					<p>Cette mémoire externe, amovible, est aisément interchangeable par l'opérateur et est unique pour un engin donné.</p>
					<p>En cas de défaillance d'un émetteur, l'opérateur peut retirer aisément (dévisser sans outillage spécialisé), la clé d'identification et la replacer sur l'émetteur de secours. L'ensemble des paramètres de l'engin concerné sera transféré dans l'émetteur de réserve ainsi configuré et prêt à être utilisé. De plus, cette clé est <strong>placée sur chaque type d’émetteur JMei en un endroit protégé (contre les risques de casses) mais facile d’accès</strong>.</p>
					<h4>Avantage de la clé d'identification JMei</h4>
					<ul>
						<li>Permet d’échanger un émetteur de travail par un émetteur de réserve rapidement et par un personnel non qualifié.</li>
						<li>Permet de sécuriser une application avec un émetteur défini par la clé d’identification.</li>
						<li>Clé robuste, placée en un endroit protégé contre les casses éventuelles.</li>
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
