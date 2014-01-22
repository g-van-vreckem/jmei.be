<?php
	include 'common.php';
	$title = 'JMei - Sytème TANDEM - Coordinations d"équipements radio';
	$description .= '';
	$keywords .= '';

	$pageId = 'TANDEM';
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
                					<a name="highlight"></a>
					<h3>Sytème TANDEM - Coordinations d'équipements radio</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-Tandem/tandem_1.jpg" alt="Système tandem radiocommande" />
						</div>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('TANDEM.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<a name="features"></a>
				  <h4>Description du système</h4>
				  <p>Ce système permet la commande simultanée de deux engins (par exemple : ponts roulants) par un seul émetteur. Ceci permet le transport de longues charges en toute sécurité. Avec l’option « bidirectionnel » le système assure également la gestion des fins de course rendant ainsi le couplage très sécuritaire.</p>
					<p><strong>Fonctionnement "seul"</strong><br>
					  Soit le pont "maître" commandé par l'émetteur "maître".
Soit le pont "esclave" commandé par l'émetteur "esclave".
Dans ce mode de fonctionnement les ponts sont indépendants et travaillent sur deux fréquences séparées.</p>
				  <p><strong>Fonctionnement "tandem"</strong><br>
					  Soit l'émetteur "esclave" éteint.
Soit l'émetteur "maître" démarré avec le mode "Tandem" activé (ce mode s'active via une combinaison simple de touches au démarrage de l'émetteur; ceci pour éviter toute activation non-intentionnelle).<br>
Dans ce mode de fonctionnement, les deux ponts sont pilotés par l'émetteur "maître".
<br>
L'émetteur maître est pourvu d'un sélecteur 1, 1+2, 2 qui permet de choisir quel pont est piloté : le "maître" (1), l' "esclave" (2) ou les deux simultanément (1+2).
<br>
La fréquence de travail est alors unique pour les deux ponts et est celle du "maître".
<br>
L'activation du pont esclave par les deux émetteurs simultanément est impossible.
<br>
Lorsqu’un pont est piloté par l'émetteur "maître" mais n'est pas sélectionné par le sélecteur 1,1+2,2 seul le contacteur général reste enclenché. La commande "klaxon" reste toutefois active.				  </p>
				  <h4>Variantes</h4>
				  <p>Diverses variantes de "prise en main" du pont "esclave" sont possibles:</p>
					<ul>
					  <li>Extinction de l'émetteur "esclave" (système standard).</li>
						<li>Autorisation préalable par l'émetteur "esclave" puis extinction de celui-ci.</li>
						<li>Autorisation préalable par l'émetteur "esclave" ce dernier restant allumé et son arrêt de sécurité est alors actif sur les deux ponts!</li>
					</ul>
					<p>Le système "Tandem" présenté ici peut être réalisé avec 2, 3 ou 4 engins simultanément. <br>
				    Dans ce cas, les ponts sont activés deux-à-deux (ponts contigus) ou tous ensemble.</p>
					<a name="uses"></a>
				  <h4>Options</h4>
				  <p>Le système peut être avantageusement complété par l'option "bidirectionnel" qui permet le dialogue entre les récepteurs (et éventuellement entre les émetteurs).
Dans ce cas, les fins de course des différents ponts peuvent être raccordées aux récepteurs correspondants et transmises vers l'autre pont. En mode "Tandem" avec les deux ponts actifs en même temps (sélecteur en 1+2), les fins de course du deuxième pont agissent sur le premier et inversement. Ceci permet par exemple de stopper la translation des DEUX ponts lorsque l'un des ponts arrive en fin de course. Ce système permet également la gestion conjointe des limiteurs de charge. Avec cette option, les deux ponts sont accouplés "logiquement" pour ne plus former qu'un seul et ce, en toute sécurité.</p>
					

				</div>
			</div>

 <?php include 'footer.php';?>
