<?php
	include 'common.php';
	$title = 'JMei - Relais SMS - Commande radio longue portée - Pilotage par smartphone';
	$description = 'Radiocommande ultra-compacte, rigidité accrue de part son boîtier en aluminium, cette commande à distance prendra facilement place dans vos applications forestières et agricoles';
	$keywords = 'JMei,RCB700,Commande radio longue portée,Télécommande robuste,Radiocommande ultra-compacte,boîtier en aluminium,commande à distance,applications forestières et agricoles,boîte à boutons sécuritaire,télécommande sans fil,Arrêt d\'urgence,Fonctions analogiques proportionnelles,retour d\'information,LCD graphique,émetteur de réserve,Lecteur code barre,Profibus,Ethernet,Canbus,Profinet,bus de terrain,Télécommande avec retour d\'informations,Radiocommande avec lecteur code-barres,Télécommande sur-mesure,Radiocommande avec afficheur graphique,Arêt de sécurité haute performance,télécommande forestière,commande de treuils';
	$pageId = 'SMSCMD';
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
	$swiper = new Medias('/img/product-SMS/swiper/');
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'products-solutions-nav.php'; ?>
				<div class="span9">
					<section>
					<a id="highlight"></a>
					<h3>Commande par SMS</h3>
					<div class="row">
<?php echo $swiper->html; ?>                        
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RELAIS-SMS.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
				</section>
				<hr>
				<section>
					<a id="description"></a>
					<h4>Description</h4>
						<p>Dans de nombreuses applications industrielles ou domestiques, nous avons le désir de surveiller et de maintenir le control d’une machine à distance.<br>Lorsqu’il est nécessaire d’étendre la portée de commande à de très longues distances, le choix de l’utilisation du réseau GSM (mondial) nous enlève toute limite de distance.<br>Via un simple message SMS, nous avons la possibilité de visualiser l’état des entrées analogiques ou digitales (pompe en marche, vitesse du vent, …),ou de manière automatique, lorsqu’il y a un changement d’état au niveau des entrées, nous pouvons recevoir un SMS (pour une alarme ou autre).<br>Inversement, nous pouvons commander toujours via un simple SMS les sorties du module de transmission (acquittement d’une alarme, commande d’un chauffage ou d’un pompage) et ainsi réagir sur l’état du process.</p>
				</section>
				<hr>
				<section>
					<a id="avantages"></a>
				  <h4>Avantages</h4>
					<ul>
						<li>Pas de limite de distance.</li>
						<li>Fonctionne par tous les temps.</li>
						<li>Visibilité temps réel.</li>
						<li>Réception d’alarme.</li>
						<li>Personnalisation.</li>
						<li>Traçabilité.</li>
						<li>Pré-programmé.</li>
					</ul>
				</section>
				<hr>
				<section>
					<a id="options"></a>
                  <h4>Caractéristiques</h4>
					<ul>
						<li>Interface radio: GSM.</li>
						<li>Connecteur d'antenne: femelle SMA impédance 50 Ω.</li>
						<li>Plage de tension d'alimentation: 12 V DC ... 48 V DC.</li>
						<li>Courant absorbé typique: < 15 mA (24 V DC).</li>
                      <li>Compatibilité électromagnétique: Conformité à la directive R&TTE 1999/5/CE.</li>
                      <li>Température ambiante  de fonctionnement: 25 °C ... 55 °C.</li>
                      <li>Dimensions mm: 88/90/60.</li>
					</ul>  				
				</section>
				<hr>
				<section>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Irrigation.</li>
						<li>Contrôle d'accès.</li>
						<li>Alarmes.</li>
						<li>Machines agricoles.</li>
						<li>Machines forestières.</li>
					</ul>                  
				</section>
				<hr>
				<section>				                    									
                  <a id="réalisations"></a>
					<h4>Exemples de réalisations</h4> 
				</section>                   
					<div class="row">
						<div class="span3">
				<section>
							<h6>Commande via SMS</h6>                            
							<img src="../img/product-SMS/sms_bot1.png?v=1" alt="Commande SMS"> 
				</section>  
						</div>
						<div class="span3">
				<section>
							<h6>Pilotage via smartphone</h6>
							<img src="../img/product-SMS/sms_bot2.png" alt="Commande Smartphone">
				</section>
						</div>
						<div class="span3">
				<section>
							<h6>Retour d'info via SMS</h6>
							<img src="../img/product-SMS/sms_bot3.png?v=1" alt="Relai SMS">
				</section>
						</div>                                                
					</div>         
				</div>
			</div>
<?php include 'footer.php';?>
