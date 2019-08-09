<?php
	include 'common.php';
	$title = 'JMei - Télécommande industrielle compacte - Radio télécommande RF';
	$description = 'Commande à distance économique et légère, JMei radio mini. La commande industrielle à petit prix, ultra-compacte';
	$keywords = 'JMei,Télécommande industrielle compacte,Radio télécommande RF,télécommande,applications de manutention,grues,dépanneuses,camions de pompe à béton,équipement de levage,machines de construction,barrières d\'accès,émetteur compact,récepteur à commandes intégrées,systèmes radio,autorisation d\'accès,Récepteur avec commandes intégrées,Remorques,Treuils,Hydraulique,Contrôle industriel,Porte,barrière d\'accès industriel';
	$pageId = 'JMMINI';
	$pageHeaderCss = <<<END
<style>
section {
    margin-bottom: 15px;
    padding: 10px;
    background-color: #FAFAFA;
}

container, hr {
    display: none;
}
img.blog {
margin-bottom: 10px;
}
</style>
END;
	$swiper = new Medias('/img/product-JMMINI/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'products-radios-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<section>
					<h3>Télécommande industrielle compacte - JMei Mini</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('MINI.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
				</section>
				<hr>
				<section>
					<a id="description"></a>
					<h4>Description</h4>
						<p>La télécommande JMei Mini peut être utilisée comme dispositif standard pour des applications de manutention diverses comme les grues, dépanneuses, camions de pompe à béton, équipement de levage, machines de construction, barrières d'accès, etc.</p>
						<p>Son émetteur ultra compact a été conçu pour une utilisation ergonomique et pour améliorer la performance opérationnelle et la sécurité.</p>
				  <p>Les fonctions de l'émetteur sont programmables via les boutons-poussoirs / DIP-SWITCHS (ON/OFF, interverrouillage) et les étiquettes de fonctions personnalisables.</p>
				  <p>Chaque système possède un code d’identification unique, 32 canaux RF (configurables via les boutons-poussoirs) et un codage     avancé sécurisé par un CRC 32 bits. 	<br>
Son système de reprogrammation possible à distance (entre 2 émetteurs ou entre un émetteur et un récepteur), son support de fixation unique au récepteur pour un montage et démontage rapide et son autonomie de plus de 100 heures d’utilisation font de ce produit la radiocommande la plus performante de sa catégorie.</p>
				</section>
				<hr>
				<section>
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
               </section>
				<hr>
				<section>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Remorques.</li>
						<li>Treuils.</li>
						<li>Hydraulique.</li>
						<li>Contrôle industriel.</li>
                      <li>Porte - barrière d'accès industriel.</li>
					</ul>                  
				</section>
				<hr>							
                  <a id="réalisations"></a>
				<section>	
					<h4>Exemples de réalisations</h4>  
				</section>                 
					<div class="row">
	
						<div class="span3">
				<section>
							<h6>JMei Mini - clips de portage</h6>
							<img src="../img/product-JMMINI/mini_bot1.png" alt="Télécommande JMei">
				</section>  
						</div>
						<div class="span3">
				<section>
							<h6>Emetteur ultra-compact</h6>
							<img src="../img/product-JMMINI/mini_bot2.png" alt="Télécommande industrielle de poche">
				</section> 
						</div>
						<div class="span3">
				<section>
							<h6>Aimant de fixation</h6>
							<img src="../img/product-JMMINI/mini_bot3.png" alt="Radiocommande industrielle">
				</section>
						</div>
              
					</div>
					<div class="row">
						<div class="span3">
				<section>
							<h6>Récepteur compact</h6>
							<img src="../img/product-JMMINI/mini_bot4.png" alt="Récepteur radiocommande">
				</section>
						</div>
						<div class="span3">
				<section>
							<h6>Clavier presonnalisable</h6>
							<img src="../img/product-JMMINI/mini_bot5.png" alt="Boîte à boutons industrielle">
				</section>
						</div>						
						<div class="span3">
				<section>
							<h6>Support récepteur</h6>
							<img src="../img/product-JMMINI/mini_bot6.png" alt="Télécommande industrielle sécurisée">
				</section>
						</div>   
					</div>  
				</div>
			</div>

 <?php include 'footer.php';?>
