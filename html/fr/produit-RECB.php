<?php
	include 'common.php';
	$title = 'JMei - RECB - Récepteur radio';
	$description = 'Récepteur de radiocommande industrielle JMei. Fonctions TOR, analogiques, CANbus, CANopen, Profibus ou Profinet. Arrêt de sécurité certifié.';
	$keywords = 'récepteur,bus de terrain,profibus, CANbus,CANopen,Profinet,fonctions TOR,ralais,analogique,radiocommande,radio commandes,télécommande de ponts roulant';
	$pageId = 'RECB';
	$swiper = new Medias('/img/product-RECB/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
					<h3>Récepteur radio RECB</h3>
					<div class="row">
<?php echo $swiper->html; ?>                    
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RECB.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p><a href="<?php echo Site::relativeUrl('KEY');?>">Consulter la fiche technique</a></p>					<a name="features"></a>
					<h4>Description</h4>
					<ul>                      
						<li>Fonctionne avec l'entièreté de la gamme des télécommandes JMei.</li>
						<li>22 sorties digitales optocouplées en standard (40 en option).</li>
						<li>Relais arrêt de sécurité, à contacts guidés.</li>
						<li>Bi-processeurs.</li>                    
					</ul>
					<a name="specifications"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Alimentation étendue (12VDC / 24..48V AC/DC).</li>
						<li>Reconnaissance automatique des fréquences.</li>
						<li>Entièrement modulable.</li>
					</ul>
					<hr>
					<a name="accessories"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>8 sorties analogiques.</li>
						<li>40 entrées digitales optocouplées.</li>
						<li>8 entrées analogiques.</li>
						<li>Bus de terrain (Fieldbus:CANbus, CANopen, Profibus, Profinet).</li>
						<li>Liaison série optocouplée (RS232, RS485).</li>                        
					</ul>                      
					<hr>
					<a name="uses"></a>
					<h4>Applications</h4>
					<ul>
						<li>Toutes les applications industrielles.</li>
					</ul> 
                 <hr>									
                  <a name="accessories"></a>
					<h4>Exemple de réalisation</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Récepeur de radiocommande</h6>
							<img src="../img/product-RECB/recb_bot1.jpg" alt="Récepeur de radiocommande">
						</div>
						<div class="span3">
							<h6>Récepeur de radiocommande</h6>
							<img src="../img/product-RECB/recb_bot2.jpg" alt="Radiocommande industrielle">
						</div>
						<div class="span3">
							<h6>Récepeur de radiocommande</h6>
							<img src="../img/product-RECB/recb_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>                      
				</div>
			</div>
 <?php include 'footer.php';?>
