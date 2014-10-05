<?php
	include 'common.php';
	$title = 'JMei - RCB700 - Commande radio forestière';
	$description = 'Radiocommande ultra-compacte, rigidité accrue de part son boîtier en aluminium, cette commande à distance prendra facilement place dans vos applications forestières et agricoles';
	$keywords = 'RCB700,commande radio,radiocommande ultra-compacte,applications agricoles,usages industriels,homme-mort,safeball,applications industrielles et forestières';
	$pageId = 'RCB700';
	$swiper = new Medias('/img/product-RCB700/swiper/');
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
					<h3>Radiocommande RCB700</h3>
					<div class="row">
<?php echo $swiper->html; ?>                        
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB700.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p><a href="<?php echo Site::relativeUrl('KEY');?>">Consulter la fiche technique</a></p>                      
					<a name="features"></a>
					<h4>Description</h4>
					<ul>
						<li>Boîtier émetteur ultra compact, léger, très robuste, réalisé en fonte d&rsquo;aluminium, structure renforcée pour usages industriels, boîtier très ergonomique, adapté spécialement aux environnements agressifs. </li>
						<li>Clé de mémoire disponible, pour une interchangeabilité facile des émetteurs.</li>
						<li>Les pictogrammes et les voyants LED de l'émetteur sont placés selon les exigences du client et permettent ainsi une excellente visualisation des commandes.<br>
					    En mode bidirectionnel, les informations provenant du récepteur sont affichées sur voyants LED ou afficheur 7 segments. Cet émetteur offre beaucoup de possibilités de personnalisations.</li>
						<li>Convient pour tous types d'usages industriels nécessitant des fonctions TOR (1 vitesse), boîtier &quot;homme-mort&quot;, safeball,...</li>
					</ul>
					<a name="specifications"></a>
					<h4>Avantages</h4>
					<ul>
						<li>Gamme de fréquences:  434 MHz (64 canaux) ou 868MHz.</li>
						<li>Adresses et fréquences paramétrables par les boutons de l'émetteur. Aucune intervention nécessaire sur le récepteur.</li>
                        <li>Puissance d'émission: < 10 mW</li>
                        <li>Modulation: FM : FSK</li>
                        <li>Portée de la radiocommande: 200m</li>
                        <li>Codage de la transmission: adresses 32 bits et CRC 16 bits.</li>
                        <li>Option bidirectionnelle sur 1 seule fréquence.</li>
                        <li>Batterie NiMH à grande autonomie (&gt;20h), sans effet mémoire.</li>
                        <li>Chargeur à micro-contrôleur à fiche, ou chargeur sur support de conception JMei (temps de charge: 4h).</li>
                        <li>Possibilité d'alimentation fixe en 12 ou 24V DC (en option).</li>
                        <li>Possibilité d'options: <a href="<?php echo Site::relativeUrl('KEY');?>">clé mémoire</a>, <a href="<?php echo Site::relativeUrl('TCA27');?>">démarrage sécurisé</a>, <a href="<?php echo Site::relativeUrl('TANDEM');?>">coordination d'équipements</a>.</li>
                        <li>Récepteur RECB JMei, possibilité de commandes analogiques, digitales, série (RS232 ou RS485) ou bus de terrain (CAN, Profibus, Ethernet,...).</li>						</ul>
       <hr>									
                  <a name="accessories"></a>
					<h4>Exemple de réalisation</h4>                       
					<div class="row">
						<div class="span3">
							<h6>RCB700 avec scanner intégré</h6>
 
                    
					<a name="features"></a>                            
							<img src="../img/product-RCB700/rcb700_bot1.jpg" alt="Télécommande avec scanner">
					<p><a href="<?php echo Site::relativeUrl('SCAN.pdf');?>">Consulter la fiche technique</a></p>                              
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
