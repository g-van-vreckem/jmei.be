<?php
	include 'common.php';
	$title = 'JMei - Télécommande industrielle compacte - Radio télécommande RF';
	$description = 'Commande à distance économique et légère, JMei radio pocket. La commande industrielle à petit prix, ultra-compacte';
	$keywords = 'JMei,Télécommande industrielle compacte,Radio télécommande RF,télécommande,applications de manutention,grues,dépanneuses,camions de pompe à béton,équipement de levage,machines de construction,barrières d\'accès,émetteur compact,récepteur à commandes intégrées,systèmes radio,autorisation d\'accès,Récepteur avec commandes intégrées,Remorques,Treuils,Hydraulique,Contrôle industriel,Porte,barrière d\'accès industriel';
	$pageId = 'JMPOCKET';
	$swiper = new Medias('/img/product-JMPOCKET/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Télécommande industrielle compacte - JMei Pocket</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('POCKET.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('POCKET-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Consulter la fiche technique</a></p>  
					<a id="description"></a>
					<h4>Description</h4>
						<p>La télécommande JMei Pocket peut être utilisée comme dispositif standard pour des applications de manutention diverses comme les grues, dépanneuses, camions de pompe à béton, équipement de levage, machines de construction, barrières d'accès, etc.</p>
						<p>Son émetteur compact a été conçu pour une utilisation ergonomique et pour améliorer la performance opérationnelle et la sécurité.</p>
						<p>Son récepteur à commandes intégrées permet de pallier aux désavantages de l'absence de l'émetteur (perdu ou endommagé).</p>
						<p>Le clavier du récepteur peut être protégé par un mot de passe.<br>Une sélection automatique du canal de fréquence évite les interférences avec les autres systèmes radio.<br>Possibilité de jumeler plusieurs émetteurs avec un seul récepteur, grand avantage pour l'utilisation en autorisation d'accès.</p>
					<a id="avantages"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Récepteur avec commandes intégrées.</li>
						<li>Sélection automatique des canaux RF.</li>
						<li>Jumelage rapide des émetteurs.</li>
						<li>Possibilité de mot de passe.</li>
						<li>Installation rapide et facile.</li>
						<li>Ergonomie - légèreté.</li>
						<li>Très compétitif.</li>
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
