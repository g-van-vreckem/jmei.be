<?php
	include 'common.php';
	$title = 'JMei - RCB3000 - Radiocommande analogique';
	$description = 'Pupitre de commande à joystick,  entièrement parsonnalisable, pour la commande de machines mobiles et tout type d\'équipements industriels';
	$keywords = 'Radiocommande,RCB3000,pupitre ventral,radio analogique,ultra-compact,léger,radiocommande,radiocommandes,radio commande,radio commandes,ponts roulant,commande à joystick,équipements de génie civil,manutention,équipement de levage mobile,Manitou,camion de remorquage,pompe à béton,camions de mélange,pont roulant,grue,grue hydraulique mobile,application mobile de transport de voiture,toutes applications de manutention';
	$pageId = 'RCB3000';
	$swiper = new Medias('/img/product-RCB3000/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Radiocommande RCB3000</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB3000.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p><a href="<?php echo Site::relativeUrl('RCB3000-datasheet.pdf');?>">Consulter la fiche technique</a></p>       
					<a id="description"></a>
					<h4>Description</h4>
					<ul>
						<li>Emetteur conçu avec une grande surface d'accès pour une utilisation confortable.</li>
						<li>Joystick à contacts ou analogiques (max 8 canaux).</li>                        
						<li>Léger, ergonomique et très robuste, réalisé en plastique renforcé pour usages industriels.</li>
						<li>Arceau souple conçu pour absorber les chocs, protège efficacement les manipulateurs (joysticks) contre toute fausse manoeuvre accidentelle.</li>
						<li>Très facile à personnaliser grâce à sa grande surface disponible.</li>
						<li>Arrêt d'urgence coup-de-poing (qualité militaire), garantit une sécurité maximale.</li>
					</ul>
					<a id="avantages"></a>
					<h4>Avantages</h4>
					<ul>
						<li>Pictogrammes du pupitre émetteur entièrement personnalisables.</li>                    
						<li>Rétro-éclairage possible (d'ambiance ou dynamique).</li>    
						<li>Possibilité d'alimentation fixe (12 ou 24V DC).</li>                        
						<li>Système exclusif de changement d'adresse et de fréquence.</li>              
					</ul>
					<hr>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Led de diagnostique et retour d'information.</li>
						<li>Afficheur 7 segments, alphanumérique ou graphique couleur.</li> 
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
						<li>Démarrage sécurisé TCA27.</li>
						<p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
					</ul>   					
                  <a id="accessoires"></a>
					<h4>Accessoires</h4>
					<ul>
						<li>Housse de protection en nylon.</li>
						<li>Chargeur à microprocesseur.</li>
						<li>Accumulateur interchangeable NIMH.</li>
						<li>Alimentation fixe (12/24V DC).</li>                        
						<p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
					</ul>	 
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Equipement de levage (pont roulant, grue tour, portique).</li>
						<li>Equipement de manutention.</li>
						<li>Carrière (concasseur, brise-roches, bande transporteuse).</li>                        
						<li>Toutes commandes hydrauliques (grue sur camion).</li>
						<li>Machine mobile (agricole et forestière).</li>
						<li>Génie civil - BTP.</li>
						<li>Applications minières.</li>						
						<li>Applications maritimes.</li>                                                              
					</ul>                      
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Exemple de réalisations</h4>                       
					<div class="row">
						<div class="span3">
							<h6>RCB3000 bidirectionnelle</h6>
							<img src="../img/product-RCB3000/rcb3000_bot1.jpg" alt="Télécommande avec retour d'informations">
						</div>
						<div class="span3">
							<h6>Radiocommande avec afficheur LCD</h6>
							<img src="../img/product-RCB3000/rcb3000_bot2.jpg" alt="Radiocommande avec afficheur">
						</div>
						<div class="span3">
							<h6>Télécommande suivant cahier des charges</h6>
							<img src="../img/product-RCB3000/rcb3000_bot3.jpg" alt="Télécommande industrielle personnalisée">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Radiocommande analogique</h6>
							<img src="../img/product-RCB3000/rcb3000_bot4.jpg" alt="Radio télécommande analogique">
						</div>
						<div class="span3">
							<h6>Housse de protection en nylon</h6>
							<img src="../img/product-RCB3000/rcb3000_bot5.jpg" alt="Housse de protection radiocommande">
						</div>						
						<div class="span3">
							<h6>Radiocommande pour locotracteur</h6>
							<img src="../img/product-RCB3000/rcb3000_bot6.jpg" alt="Télécommande pour locotracteur">
						</div>                        
					</div>                      
				</div>
			</div>
<?php include 'footer.php';?>
