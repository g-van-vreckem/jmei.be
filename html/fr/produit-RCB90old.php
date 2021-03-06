<?php
	include 'common.php';
//	$title .= '';
	$title = 'JMei - RCB90 - Boîte à boutons - Télécommande pour pont roulant';
	$description = 'Radiocommande de type boîte à boutons double vitesses pour la commande de pont roulant';
	$keywords = 'émetteur,ultra-compact,léger, radiocommande,radiocommandes,radio commande,radio commandes,télécommande de ponts roulant,boîte à boutons,RCB90';

	$pageId = 'RCB90';
	$swiper = new Medias('/img/product-RCB90/swiper/');
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
				  <h3>Radiocommande de type RCB90L et RCB90M</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB90.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<a name="features"></a>
					<h4>Description</h4>
					<ul>
						<li>Emetteur sécuritaire  haute performance de type boîte à boutons conçue pour des commandes en Tout Ou Rien (TOR).</li>
					    <li>La RCB90 est une télécommande sans fils éprouvée depuis plusieurs années. Les touches (boutons) de l'émetteur sont à double enfoncement et permet la commande de relais correspondant sur le récepteur.</li>
						<li>Boîtier ultra compact, léger, très robuste, réalisé en plastique renforcé pour un usage industriel, boîtier très ergonomique, adapté spécialement aux environnements agressifs.</li>
						<li>Arrêt d'urgence coup de poing, garanti une sécurité maximale.</li>
                     <li>9 boutons (RCB90L) ou 14 boutons (RCB90M).</li>
					</ul>
					<a name="specifications"></a><h4>Avantages</h4>
					<ul>
						<li>3 boutons configurable en sélecteur 2 ou 3 positions fixes ou à rappel.</li>
						<li>Face et inscription personnalisable.</li>
						<li>Arrêt d'urgence coup de poing qualité militaire.</li>
						<li>Accumulateur interchangeable NIMH.</li>
                      <li>Led de diagnostique et retour d'information en option.</li>
						<li>Système exclusif de changement d'adresse, de fréquence, configuration par les boutons permet l'interchangeabilité rapide et sécurisante des émetteurs (un seul émetteur de réserve pour  plusieurs équipements).</li>
						
						<li>Possibilité d'options: <a href="<?php echo Site::relativeUrl('KEY');?>">Clé mémoire</a>, <a href="<?php echo Site::relativeUrl('TCA27');?>">démarrage sécurisé</a>, <a href="<?php echo Site::relativeUrl('TANDEM');?>">coordination d'équipements</a>.</li>
						<li>Récepteur RecB JMei, possibilité de commandes analogiques, digitales, série (RS232 ou RS485) ou bus de terrain (CANOpen, Profibus, Ethernet,...).</li>
					</ul>
					<a name="uses"></a>
				  <h4>Applications</h4>
					<p>Système maître-esclave pour tout équipement de manutention, pont roulant, portique ou tout autre type d'équipement mobile.</p>
					<img src="../img/product-RCB90/rcb90_2.jpg" alt="Applications de radiocommandes" />
<?php if ( SHOW_CERTIFICATION ) : ?>
					<a name="certification"></a>
				  <h4>Certifications</h4>
					<ul>
						<li>EMC: EN61000-6-2 et EN61000-6-4</li>
						<li>Safety: EN 60950</li>
						<li>Spectrum (R&amp;TTE Directive 1999/5/EC): EN300-220.</li>
					</ul>
<?php endif ?>
					<hr>
					<h4>Gamme</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90/L</h5>
							<img src="../img/product-RCB90/rcb90_3.jpg" alt="Boîte à boutons JMei"> 
							<h6>Fonctions diponibles:</h6>
							<ul>
								<li>Jusqu'à 9 boutons à double impulsion.</li>
								<li>1 bouton d'arrêt d'urgence, coup-de-poing.</li>
								<li>Système exclusif de changement d'adresse et fréquence par les boutons. Permet l'interchangeabilité rapide et sécurisante des émetteurs (un seul émetteur de réserve pour plusieurs équipements).</li>
								<li>Clé mémoire en option, permet de permuter rapidement avec l'émetteur de réserve.</li>
								<li>Retour d'informations sous forme de témoins LED's (ou afficheur 7 segments).</li>
							</ul>
							<p><strong>Applications:</strong> commande de ponts roulants ou treuils groupés, commande de machines en mode maintenance (carrière, concasseurs, cribles, bandes transporteuses), commande de tous types de machines simples.</p>
						</div>
						<div class="span3">
							<h5>RCB90/M</h5>
							<img src="../img/product-RCB90/rcb90_4.jpg" alt="Télécommande pour pont roulant"> 
							<h6>Fonctions diponibles:</h6>
							<ul>
							  <li>Jusqu'à 16 boutons à double impulsion.</li>
                              <li>1 bouton d'arrêt d'urgence, coup-de-poing.</li>
                              <li>Système exclusif de changement d'adresse et fréquence par les boutons. Permet l'interchangeabilité rapide et sécurisante des émetteurs (un seul émetteur de réserve pour plusieurs équipements).</li>
                              <li>Clé mémoire en option, permet de permuter rapidement avec l'émetteur de réserve.</li>
                              <li>Retour d'informations sous forme de témoins LED's (ou afficheur 7 segments).</li>
							</ul>
							<p><strong>Applications: </strong>commande de ponts roulants ou treuils groupés, commande de machines en mode maintenance (carrière, concasseurs, cribles, bandes transporteuses), commande de tous types de machines.</p>
						</div>
						<div class="span3">
							<h5> RCB90/L et /M personnalisées</h5>
							<img src="../img/product-RCB90/rcb90_5.jpg" alt="Commande spéciale"> 
							<p>JMei produit ses radiocommandes avec des pictogrammes personnalisés selon vos besoins.</p>
							<p>En complément, le mode bidirectionnel avec retour d'informations sur voyants LED's ou afficheur 7 segments vous offre de multiples possibilités d'applications.</p>
						</div>
					</div>
					<hr>
					<a name="accessories"></a>
					<h4>Accessoires</h4>
					<div class="row">
						<div class="span3">
							<h6>Housse de protection en cuir&nbsp;:</h6>
							<img src="../img/product-RCB90/rcb90_6.jpg" alt="Télécommande grue">
							<p>Complète avantageusement la sangle de portage et protège efficacement l&rsquo;émetteur des chocs.</p>
						</div>
						<div class="span3">
							<h6>Chargeur à microprocesseur&nbsp;:</h6>
							<img src="../img/product-RCB90/rcb90_7.jpg" alt="Chargeur à microprocesseur">
							<p>Assure la recharge en toute sécurité des accumulateurs. Temps de charge: 4H.</p>
						</div>
						<div class="span3">
							<h6>Clé d'identification hardware:</h6>
							<img src="../img/product-RCB90/rcb90_8.jpg" alt="Batterie télécommande">
							<p>Associe l&rsquo;émetteur au récepteur. Permet une interchangeabilité rapide des émetteurs.</p>
							<p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<h6>Démarrage sécurisé TCA27:</h6>
							<img src="../img/product-RCB90/rcb90_9.jpg" alt="Système de sécurité">
							<p>Ce système breveté permet le démarrage sécurisé de tout type d&rsquo;engins. Une séquence lumineuse aléatoire de 2 couleurs  émise par le récepteur doit être encodée à l&rsquo;émetteur par l&rsquo;opérateur.</p>
							<p><a href="<?php echo Site::relativeUrl('TCA27');?>">Plus d'infos...</a></p>
						</div>
						<div class="span3">
							<h6>Transmission bidirectionnelle:</h6>
							<img src="../img/product-RCB90/rcb90_10.jpg" alt="Retour d'information sur télécommande">
							<p>Permet le retour d'informations vers l'émetteur.</p>
						</div>
						<div class="span3">
						</div>
					</div>
				</div>
			</div>
 <?php include 'footer.php';?>
