<?php
	include 'common.php';
	$title = 'JMei - Télécommande industrielle compacte - Radio télécommande RF';
	$description = 'Commande à distance économique et légère, JMei radio mini. La commande industrielle à petit prix, ultra-compacte';
	$keywords = 'JMei,Télécommande industrielle compacte,Radio télécommande RF,télécommande,applications de manutention,grues,dépanneuses,camions de pompe à béton,équipement de levage,machines de construction,barrières d\'accès,émetteur compact,récepteur à commandes intégrées,systèmes radio,autorisation d\'accès,Récepteur avec commandes intégrées,Remorques,Treuils,Hydraulique,Contrôle industriel,Porte,barrière d\'accès industriel';
	$pageId = 'JMMINI';
	$swiper = new Medias('/img/product-JMMINI/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'products-radios-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Télécommande industrielle compacte - JMei Mini</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('MINI.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<a id="description"></a>
					<h4>Description</h4>
						<p>La télécommande JMei Mini peut être utilisée comme dispositif standard pour des applications de manutention diverses comme les grues, dépanneuses, camions de pompe à béton, équipement de levage, machines de construction, barrières d'accès, etc.</p>
						<p>Son émetteur ultra compact a été conçu pour une utilisation ergonomique et pour améliorer la performance opérationnelle et la sécurité.</p>
				  <p>Les fonctions de l'émetteur sont programmables via les boutons-poussoirs / DIP-SWITCHS (ON/OFF, interverrouillage) et les étiquettes de fonctions personnalisables.</p>
				  <p>Chaque système possède un code d’identification unique, 32 canaux RF (configurables via les boutons-poussoirs) et un codage     avancé sécurisé par un CRC 32 bits. 	<br>
Son système de reprogrammation possible à distance (entre 2 émetteurs ou entre un émetteur et un récepteur), son support de fixation unique au récepteur pour un montage et démontage rapide et son autonomie de plus de 100 heures d’utilisation font de ce produit la radiocommande la plus performante de sa catégorie.</p>
					<a id="avantages"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Emetteur compact et léger.</li>
						<li>32 canaux programmables.</li>
						<li>Installation rapide et facile.</li>
						<li>IP66.</li>
						<li>Reprogrammation (jumelage) à distance sans fil.</li>
						<li>Plus de 16.000.000 de codes d’identification.</li>
						<li>Fonctions programmables.</li>
					</ul>                          
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Remorques.</li>
						<li>Treuils.</li>
						<li>Hydraulique.</li>
						<li>Contrôle industriel.</li>
                      <li>Porte - barrière d'accès industriel.</li>
					</ul>                  
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Exemples de réalisations</h4>                       
					<div class="row">
						<div class="span3">
							<h6>JMei Mini - clips de portage</h6>
							<img src="../img/product-JMMINI/mini_bot1.jpg" alt="Télécommande JMei">
						</div>
						<div class="span3">
							<h6>Emetteur ultra-compact</h6>
							<img src="../img/product-JMMINI/mini_bot2.jpg" alt="Télécommande industrielle de poche">
						</div>
						<div class="span3">
							<h6>Aimant de fixation</h6>
							<img src="../img/product-JMMINI/mini_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Récepteur compact</h6>
							<img src="../img/product-JMMINI/mini_bot4.jpg" alt="Récepteur radiocommande">
						</div>
						<div class="span3">
							<h6>Clavier presonnalisable</h6>
							<img src="../img/product-JMMINI/mini_bot5.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Support récepteur</h6>
							<img src="../img/product-JMMINI/mini_bot6.jpg" alt="Télécommande industrielle sécurisée">
						</div>                        
					</div>                     
				</div>
			</div>
 <?php include 'footer.php';?>
