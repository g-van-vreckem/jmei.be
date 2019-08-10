<?php
	include 'common.php';
	$title = 'JMei - RCB1000 - Télécommande industrielle robuste - Radiocommande avec joystick';
	$description = 'Pupitre de commande industriel haut de gamme, entièrement parsonnalisable, pour des applications industrielles les plus rudes';
	$keywords = 'JMei,RCB1000,Télécommande,Télécommande industrielle robuste,Radiocommande,Radiocommande avec joystick,radiocommande sécuritaire,télécommande de haute performance,pupitre ventral,télécommande sans fil,Boîtier ultra compact,Arrêt d\'urgence coup-de-poing,manipulateurs 2 axes,manipulateurs uniaxes,Sélecteurs à rappel,Sélecteurs à positions fixes,Fonctions analogiques,inclinomètre,Joystiques avec fonction homme-mort,LED de diagnostic,retour d\'information,Pont roulant,Marine,Camion hydraulique,Engins spéciaux,Transmission bidirectionnel,Afficheur,Clé d\'identification,Système Tandem maître/esclave,Démarrage sécurisé TCA27,Profibus,Ethernet,Canbus,Profinet,bus de terrain,Housse de protection en cuir,Chargeur à microprocesseur,Accumulateur NiMH</li>';
	$pageId = 'RCB1000';
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
	$swiper = new Medias('/img/product-RCB1000/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'products-radios-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<section>
					<h3>Radiocommande RCB1000</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB1000.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('RCB1000-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Consulter la fiche technique</a></p>  
				</section>
				<hr>
				<section>
                  <a id="description"></a>
                  <h4>Description</h4>
				  <p>Radiocommande extrêmement robuste et sécuritaire de haute performance de type pupitre ventral conçu pour les commandes de tout engin industriel dans les environnements lourds.</p>
						<p>La RCB1000 est une télécommande sans fil configurable à souhait et de grande qualité. <br>Son design et les possibilités infinies de configuration autorisent toutes les possibilités de commandes de machines.</p>
						<p>Boîtier ultra compact, très robuste, réalisé en plastique renforcé pour un usage industriel, boîtier très ergonomique, adapté spécialement aux environnements agressifs.</p>
						<p>Arrêt d'urgence coup-de-poing, garantit une sécurité maximale.</p>
				</section>
				<hr>
				<section>
					<a id="avantages"></a>
					<h4>Avantages</h4>
					<ul>
						<li>2, 3 ou 4 manipulateurs 2 axes.</li>
						<li>Jusque 8 manipulateurs uniaxes.</li>
						<li>Sélecteurs à rappel ou positions fixes.</li>
						<li>Bouton-poussoir standard ou avec témoins lumineux.</li>
						<li>Fonctions TOR jusqu'à 6 vitesses par joystick.</li>
						<li>Fonctions analogiques proportionnelles.</li>
						<li>Face et inscription personnalisables.</li>
						<li>Fonction inclinomètre en option.</li>
						<li>Joysticks avec fonction homme-mort.</li>
						<li>Arrêt d'urgence coup-de-poing qualité militaire.</li>
						<li>Accumulateur interchangeable NiMH.</li>
						<li>LED de diagnostic et retour d'information en option.</li>
						<li>Ecran LCD graphique en option.</li>
						<li>Système exclusif de changements d'adresse, de fréquence, configuration par les boutons permettant l'interchangeabilité rapide et sécurisante des émetteurs (un seul émetteur de réserve pour plusieurs équipements).</li>
					</ul>
				</section>
				<hr>
				<section>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Afficheur.</li>
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>  
						<li>Système Tandem maître/esclave.</li>
						<li>Démarrage sécurisé TCA27.</li>
						<li>Récepteur type RECB ou RCB7000, possibilité de connexion Profibus, Ethernet, Canbus, Profinet ou autre bus de terrain.</li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
					</ul>  
				</section>
				<hr>
				<section>	
					<a id="accessoires"></a>
					<h4>Accessoires</h4>
					<ul>
						<li>Housse de protection en cuir.</li>
						<li>Chargeur à microprocesseur de conception JMei.</li>
						<li>Accumulateur interchangeable NiMH.</li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
					</ul>					
				</section>
				<hr>
				<section>	
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Pont roulant.</li>
						<li>Marine.</li>
						<li>Camion hydraulique.</li>
						<li>Engins spéciaux, …</li>
					</ul>                  
				</section>
				<hr>
				<section>	
                  <a id="réalisations"></a>
					<h4>Exemples de réalisations</h4>        
				</section>            
					<div class="row">
						<div class="span3">
							<h6>Radiocommande - prise en main sécuritaire</h6>
							<img src="../img/product-RCB1000/rcb1000_bot1.jpg" alt="Radiocommande avec prise en main sécuritaire">
						</div>
						<div class="span3">
							<h6>Radiocommande - joysticks personnalisés</h6>
							<img src="../img/product-RCB1000/rcb1000_bot2.jpg" alt="Radiocommande - joysticks personnalisés">
						</div>
						<div class="span3">
							<h6>Radiocommande industrielle analogique</h6>
							<img src="../img/product-RCB1000/rcb1000_bot3.jpg" alt="Radiocommande industrielle analogique">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Clé mémoire électronique pour radiocommande</h6>
							<img src="../img/product-RCB1000/rcb1000_bot4.jpg" alt="Clé mémoire électronique pour radiocommande">
						</div>
						<div class="span3">
							<h6>Radiocommande avec afficheur</h6>
							<img src="../img/product-RCB1000/rcb1000_bot5.jpg" alt="Radiocommande avec afficheur">
						</div>						
						<div class="span3">
							<h6>Démarrage sécurisé pour télécommande</h6>
							<img src="../img/product-RCB1000/rcb1000_bot6.jpg" alt="Démarrage sécurisé pour télécommande">
						</div>                        
					</div>
					</div>
				</div>
<?php include 'footer.php';?>