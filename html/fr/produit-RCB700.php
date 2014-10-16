<?php
	include 'common.php';
	$title = 'JMei - RCB700 - Commande radio longue portée - Télécommande robuste';
	$description = 'Radiocommande ultra-compacte, rigidité accrue de part son boîtier en aluminium, cette commande à distance prendra facilement place dans vos applications forestières et agricoles';
	$keywords = 'RCB700,commande radio,radiocommande ultra-compacte,applications agricoles,usages industriels,homme-mort,safeball,applications industrielles et forestières,lecteur code-barres';
	$pageId = 'RCB700';
	$swiper = new Medias('/img/product-RCB700/swiper/');
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Radiocommande RCB700</h3>
					<div class="row">
<?php echo $swiper->html; ?>                        
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB700.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>

					<a id="description"></a>
					<h4>Description</h4>
						<p>Emetteur de type boîte à boutons sécuritaire de haute performance conçu pour les commandes de tout engin industriel.<br>La RCB700 est une télécommande sans fil configurable à souhait et de grande qualité. <br>Réalisée dans des boîtiers en aluminium, extrêmement robuste, elle offre une multitude de possibilités.</p>
						<p>La taille du boîtier est modulable et permet de personnaliser notre production suivant le souhait du client.</p>
						<p>Arrêt d'urgence coup-de-poing,  garantit une sécurité maximale.</p>
					<a id="avantages"></a>
				  <h4>Avantages</h4>
					<ul>
						<li>Jusqu'à 20 fonctions TOR configurables.</li>
						<li>Sélecteurs à rappel ou positions fixes.</li>
						<li>Bouton-poussoir standard ou avec témoins lumineux.</li>
						<li>Fonctions analogiques proportionnelles (4 MAX).</li>
						<li>Face et inscription personnalisables.</li>
						<li>Arrêt d'urgence coup-de-poing qualité militaire.</li>
						<li>Accumulateur interne NiMH.</li>
						<li>LED de diagnostic et retour d'information en option.</li>
						<li>Ecran LCD graphique en option.</li>
						<li>Système exclusif de changements d'adresse, de fréquence, configuration par les boutons permettant l'interchangeabilité rapide et sécurisante des émetteurs (un seul émetteur de réserve pour plusieurs équipements).</li>
					</ul>
       				<hr>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Afficheur.</li>
						<li>Lecteur code barre</li>
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
						<p><a href="<?php echo Site::relativeUrl('OPTION');?>">Plus d'infos...</a></p>
					</ul>  
					<a id="accessoires"></a>
					<h4>Accessoires</h4>
					<ul>
						<li>Housse de protection.</li>
						<li>Chargeur à microprocesseur de conception JMei.</li>
						<li>Clips de fixation ceinture.</li>
                      <li>Station de charge.</li>
						<li>Récepteur type RECB ou RCB7000, possibilité de connexion Profibus, Ethernet, Canbus, Profinet ou autre bus de terrain.</li>
						<p><a href="<?php echo Site::relativeUrl('ACCESSORY');?>">Plus d'infos...</a></p>
					</ul>					
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Débardeuse.</li>
						<li>Pompe.</li>
						<li>Scie.</li>
						<li>Machines agricoles.</li>
						<li>Machines forestières.</li>
						<li>Equipements de sidérurgie.</li>
					</ul>                  
                  <hr>					                    									
                  <a id="réalisations"></a>
					<h4>Exemples de réalisations</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Télécommande avec retour d'informations</h6>                            
							<img src="../img/product-RCB700/rcb700_bot1.jpg?v=1" alt="Télécommande avec scanner">    
						</div>
						<div class="span3">
							<h6>Radiocommande avec lecteur code-barres</h6>
							<img src="../img/product-RCB700/rcb700_bot2.jpg" alt="Radiocommande avec lecteur code-barres">
                         <p><a href="<?php echo Site::relativeUrl('SCAN.pdf');?>">Consulter la fiche technique</a></p>
						</div>
						<div class="span3">
							<h6>RCB700 - fonctions digitales</h6>
							<img src="../img/product-RCB700/rcb700_bot3.jpg" alt="Radio télécommande solide">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Télécommande sur-mesure</h6>
							<img src="../img/product-RCB700/rcb700_bot4.jpg" alt="Télécommande sur-mesure">
						</div>
						<div class="span3">
							<h6>Radiocommande avec afficheur graphique</h6>
							<img src="../img/product-RCB700/rcb700_bot5.jpg" alt="Radiocommande avec afficheur graphique">
						</div>						
						<div class="span3">
							<h6>Arêt de sécurité haute performance</h6>
							<img src="../img/product-RCB700/rcb700_bot6.jpg" alt="Arrêt d'urgence télécommande">
						</div>                        
					</div>                  
				</div>
			</div>
<?php include 'footer.php';?>
