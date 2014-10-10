<?php
	include 'common.php';
	$title = 'JMei - RCB700 - Commande radio forestière';
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
					<ul>
						<li>Boîtier émetteur ultra compact, léger, très robuste, réalisé en fonte d'aluminium.</li>
						<li>Clé de mémoire disponible, pour une interchangeabilité facile des émetteurs.</li>
						<li>Les pictogrammes et les voyants LED de l'émetteur permettent une excellente visualisation des commandes.</li>
					    <li>Cet émetteur offre beaucoup de possibilités de personnalisations.</li>
						<li>Convient pour tous types d'usages industriels nécessitant des fonctions TOR (1 vitesse), boîtier homme-mort, safeball,...</li>
					</ul>
					<a id="avantages"></a>
					<h4>Avantages</h4>
					<ul>
						<li>Portée radio très longue.</li>
						<li>Boîtier extrêmement solide.</li>
						<li>Possibilité d'alimentation fixe en 12 ou 24V DC (en option).</li>
					</ul>
       				<hr>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Led de diagnostique et retour d'information.</li>
						<li>Afficheur 7 segments.</li>
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
						<li>Démarrage sécurisé TCA27.</li>
						<p><a href="<?php echo Site::relativeUrl('OPTION');?>">Plus d'infos...</a></p>
					</ul>  
					<a id="accessoires"></a>
					<h4>Accessoires</h4>
					<ul>
						<li>Housse de protection.</li>
						<li>Chargeur à microprocesseur.</li>
						<li>Accumulateur interchangeable NIMH.</li>
						<p><a href="<?php echo Site::relativeUrl('ACCESSORY');?>">Plus d'infos...</a></p>
					</ul>					
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Pont roulant.</li>
						<li>Grue tour.</li>
						<li>Porte industrielle.</li>
						<li>Pompe, jet d'eau.</li>
					</ul>                  
                  <hr>					                    									
                  <a id="réalisations"></a>
					<h4>Exemple de réalisations</h4>                       
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
