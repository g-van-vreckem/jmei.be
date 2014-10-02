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
					</ul>
<?php if ( SHOW_CERTIFICATION ) : ?>                    
					<a name="uses"></a>
				  <h4>Applications</h4>
					<p>Système maître-esclave pour tout équipement de manutention, pont roulant, portique ou tout autre type d'équipement mobile.</p>
					<img src="../img/product-RCB90/rcb90_2.jpg" alt="Applications de radiocommandes" />
<?php endif ?>                    
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
					<div class="row">
						<div class="span3">
							<h4>Options et accessoires</h4>
                                                        											<img src="../img/product-RCB90/rcb90_6.jpg" alt="Télécommande grue">
							<img src="../img/product-RCB90/rcb90_7.jpg" alt="Chargeur à microprocesseur">
						  <ul>
								<li>Transmission en mode bidirectionnel.</li>
                            <li>Afficheur.</li>
                            <li>Housse de protection.</li>
                            <li>Chargeur à microprocesseur de conception JMei.</li>
<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
								<li>Démarrage sécurisé TCA27.</li>
                            <li>Récepteur type RECB ou RCB7000, possibilité de connexion Profibus,  Ethernet, Canbus, Profinet ou autre bus de terrain.</li>
                       	 <p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
						  </ul>
						</div>
						<div class="span3">
							<h4>Applications</h4>
<img src="../img/product-RCB90/rcb90_22.jpg" alt="Télécommande grue">
							<ul>
							  <li>Pont roulant.</li>
                           <li>Grue tour.</li>
                           <li>Porte industrielle.</li>
                            <li>Pompe, jet d'eau.</li>
							</ul>
						</div>
						<div class="span3">
							<h4>Caractéristiques</h4>
							<img src="../img/product-RCB90/rcb90_33.jpg" alt="Commande spéciale">       
							<ul>
							  <li>Article: <em> RCB90L/M</em>.</li>
							  <li>Fct 90L:  <em> 9fcts/2 vitesses</em>.</li>
							  <li>Fct 90M: <em> 14fcts/2 vitesses.</li>
							  <li>F.Anal.: <em> Via software</em>.</li>
							  <li>Dimens.: <em> 263/80/62mm</em>.</li>
							</ul>
						</div>
					</div>



				</div>
			</div>
 <?php include 'footer.php';?>
