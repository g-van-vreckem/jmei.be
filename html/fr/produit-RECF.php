<?php
	include 'common.php';
	$title = 'JMei - RECF - Récepteur radio sécuritaire - Répéteur de télécommande';
	$description = 'Récepteur de radiocommande industrielle JMei. Fonctions TOR, analogiques, CANbus, CANopen, Profibus ou Profinet. Arrêt de sécurité certifié.';
	$keywords = 'JMei,RECF,Récepteur radio sécuritaire,Répéteur de télécommande,Récepteur de radiocommande industrielle,récepteur radio HF,commande de tout engin industriel,normes industrielles,Relais de sécurité,arrêt d\'urgence,PWM,entrée TOR,entrée analogique,Profibus,Ethernet,Canbus,Profinet,bus de terrain,fiche Harting,Pont roulant,Grue tour,Camion hydraulique,Engins spéciaux,Automate';
	$pageId = 'RECF';
	$swiper = new Medias('/img/product-RECF/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'products-solutions-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Récepteur radio RECF</h3>
					<div class="row">
<?php echo $swiper->html; ?>                    
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RECF.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('RECF-datasheet-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Consulter la fiche technique</a></p> 
					<a id="description"></a>
					<h4>Description</h4>
						<p>Récepteur associé à toute la gamme des émetteurs JMei.</p>
						<p>Entièrement configurable, ce récepteur radio HF permet la commande de tout engin industriel.</p>
						<p>Carte mère à relais de haute technologie, éprouvée et très résistante, ce boîtier s'adapte à toutes les applications industrielles.</p>
						<p>Répondant aux dernières normes industrielles, le récepteur peut être installé dans les zones techniques les plus contraignantes à tous les niveaux.</p>
					<a id="avantages"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Pré-câblé ou non.</li>
						<li>Couvercle transparent pour diagnostique facile.</li>
						<li>22 sorties TOR.</li>
						<li>Relais de sécurité à contacts guidés pour l'arrêt d'urgence.</li>
						<li>LED de diagnostic et retour d'information en option.</li>
						<li>Ecran LCD graphique en option.</li>
						<li>Système exclusif de changements de fréquence automatique.</li>
					</ul>
					<hr>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Aimant de support.</li>
						<li>Analogique (0-10V 4-20mA +/- 10V +/-20mA).</li>
						<li>PWM.</li>
						<li>Carte d'entrée TOR.</li>
						<li>Carte d'entrée analogique.</li>
						<li>Connexion Profibus,  Ethernet, Canbus, Profinet ou autre bus de terrain.</li>
						<li>Boîtier métallique.</li>
						<li>Câblage fiche Harting, ou autre.</li>
					</ul>                     
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Pont roulant.</li>
						<li>Grue tour.</li>
						<li>Camion hydraulique.</li>
						<li>Engins spéciaux.</li>
						<li>Automate,…</li>
					</ul> 
					<hr>
					<a id="réalisations"></a>
					<h4>Exemples de réalisations</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Récepeur de radiocommande</h6>
							<img src="../img/product-RECF/recf_bot1.jpg" alt="Récepeur de radiocommande">
						</div>
						<div class="span3">
							<h6>Récepeur de radiocommande</h6>
							<img src="../img/product-RECF/recf_bot2.jpg" alt="Radiocommande industrielle">
						</div>
						<div class="span3">
							<h6>Récepeur de radiocommande</h6>
							<img src="../img/product-RECF/recf_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>                      
				</div>
			</div>
 <?php include 'footer.php';?>
