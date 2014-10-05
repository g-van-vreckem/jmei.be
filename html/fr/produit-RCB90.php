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
					<h3>Radiocommande  RCB90</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB90.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p><a href="<?php echo Site::relativeUrl('KEY');?>">Consulter la fiche technique</a></p>   
					<a name="features"></a>
					<h4>Description</h4>
					<ul>
						<li>Boîte à boutons sécuritaire  haute performance.</li>
						<li>Commandes double vitesse en Tout Ou Rien (TOR).</li>
						<li>Télécommande sans fil éprouvée depuis plusieurs années.</li>
						<li>Boîtier ultra compact, léger, ergonomique, très robuste, réalisé en plastique renforcé pour un usage industriel et adapté spécialement aux environnements agressifs.</li>
						<li>Arrêt d'urgence coup-de-poing (qualité militaire), garantit une sécurité maximale.</li>
						<li>9 boutons (RCB90L) ou 14 boutons (RCB90M).</li>                    
					</ul>
					<a name="specifications"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>3 boutons configurables en sélecteurs 2 ou 3 positions fixes ou à rappel.</li>
						<li>Face et inscription personnalisables.</li>
						<li>Accumulateur interchangeable NIMH.</li>
						<li>Led de diagnostic et retour d'information en option.</li>
						<li>Système exclusif de changement d'adresse et de fréquence.</li>
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
					<a name="specifications"></a><h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Led de diagnostique et retour d'information.</li>
						<li>Afficheur 7 segments.</li>
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
						<li>Démarrage sécurisé TCA27.</li>
						<li>Accumulateur interchangeable NIMH.</li>
						<p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
					</ul>  
					<a name="specifications"></a>
					<h4>Accessoires</h4>
					<ul>
						<li>Housse de protection.</li>
						<li>Chargeur à microprocesseur.</li>
						<li>Accumulateur interchangeable NIMH.</li>
						<p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
					</ul>					
					<hr>
					<a name="specifications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Pont roulant.</li>
						<li>Grue tour.</li>
						<li>Porte industrielle.</li>
						<li>Pompe, jet d'eau.</li>
					</ul>                  
                  <hr>									
                  <a name="accessories"></a>
					<h4>Exemple de réalisation</h4>                       
					<div class="row">
						<div class="span3">
							<h6>RCB90/L - Boîte à boutons 9 fonctions</h6>
							<img src="../img/product-RCB90/rcb90_bot1.jpg" alt="Télécommande grue">
						</div>
						<div class="span3">
							<h6>Radio personnalisée (couleur du pont roulant)</h6>
							<img src="../img/product-RCB90/rcb90_bot4.jpg" alt="Télécommande pour pont roulant personnalisée">
						</div>
						<div class="span3">
							<h6>RCB90/M - Boîte à boutons 14 fonctions</h6>
							<img src="../img/product-RCB90/rcb90_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Arrêt d'urgence haute qualité</h6>
							<img src="../img/product-RCB90/rcb90_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>
						<div class="span3">
							<h6>Radiocommande indistrielle universelle</h6>
							<img src="../img/product-RCB90/rcb90_bot2.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Clé mémoire adresse télécommande</h6>
							<img src="../img/product-RCB90/rcb90_bot6.jpg" alt="Clé mémoire adresse télécommande">
						</div>                        
					</div>                  
				</div>
			</div>
<?php include 'footer.php';?>
