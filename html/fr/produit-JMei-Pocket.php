<?php
	include 'common.php';
	$title = 'JMei - Télécommande industrielle compacte';
	$description = 'Commande à distance économique et légère, JMei radio pocket. La commande industrielle à petit prix, ultra-compacte';
	$keywords = 'Radio pocket,radio,pocket,émetteur compact,télécommande compacte,868MHZ,commande radio à distance pour pont roulant,boîte à boutons,télécommande,commande industrielle,télécommande pour camion,commande pour palan,saga controls,télécommande mini,commande radio portable,télécommande pour groupe électrogène,commande de barrières,commande pour portails';
	$pageId = 'JMPOCKET';
	$swiper = new Medias('/img/product-JMPOCKET/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
					<h3>Télécommande industrielle compacte - JMei Pocket</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('POCKET.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p><a href="<?php echo Site::relativeUrl('KEY');?>">Consulter la fiche technique</a></p>
					<a name="features"></a>
					<h4>Description</h4>
                  <ul>
                      <li>SMART Communication Radio <br>
                              Il aide l'opérateur à surveiller l'état de signal radio avec cette nouvelle technologie RF. </li>
                      <li>Sélection automatique des canaux (ACS) <br>
                              Cette fonction crée une non-interférence près d'autres systèmes</li>
                      <li>Récepteur tableau de commande<br>
                              Un tableau de commande disponible sur le récepteur pour pallier à l'émetteur  perdu / endommagé </li>
                      <li>Jumelage à distance <br>
                              Il est facile et simple d'enregistrer un émetteur de remplacement sans aucun outil nécessaire. </li>
                      <li>Programmable Logiciel PC <br>
                              Il vous permet de programmer la fonction de bouton et fréquences grâce à un logiciel.</li>
                      <li>NF / NO relais <br>
                              Tous les relais sont NF / NO et permettent de répondre à toutes les exigences les plus spécifiques de l'application.</li>
                      <li> IP66 <br>
                              Boîtier robuste pour toutes les conditions météorologiques.</li>
                      <li>Le mode de mise sous tension par mot de passe.<br>
                              Il offre plusieurs modes de mise sous tension comme mot de passe pour l'opérateur autorisé.</li>
                      <li>Câble du récepteur pré-assemblé.<br>
                              Installation facile et rapide</li>
                      <li>868MHz - 10..42V DC</li>
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
					<hr>
					<a name="uses"></a>
					<h4>Applications</h4>
					<ul>
						<li>Remorques.</li>
						<li>Treuils.</li>
						<li>Hydraulique.</li>
						<li>Contrôle industriel.</li>
                      <li>Porte - barrière d'accès industriel.</li>
					</ul>                  
                  <hr>									
                  <a name="accessories"></a>
					<h4>Exemple de réalisation</h4>                       
					<div class="row">
						<div class="span3">
							<h6>JMei Pocket - clips de portage</h6>
							<img src="../img/product-JMPOCKET/pocket_bot1.jpg" alt="Télécommande JMei">
						</div>
						<div class="span3">
							<h6>Emetteur ultra-compact</h6>
							<img src="../img/product-JMPOCKET/pocket_bot2.jpg" alt="Télécommande industrielle de poche">
						</div>
						<div class="span3">
							<h6>Protection en silicone</h6>
							<img src="../img/product-JMPOCKET/pocket_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Récepteur compact</h6>
							<img src="../img/product-JMPOCKET/pocket_bot4.jpg" alt="Récepteur radiocommande">
						</div>
						<div class="span3">
							<h6>Ensemble radiocommande universelle</h6>
							<img src="../img/product-JMPOCKET/pocket_bot5.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Récepteur avec code d'accès</h6>
							<img src="../img/product-JMPOCKET/pocket_bot6.jpg" alt="Télécommande industrielle sécurisée">
						</div>                        
					</div>                     
				</div>
			</div>
 <?php include 'footer.php';?>
