<?php
	include 'common.php';
	$title = 'JMei - Hélice - Télécommande radio forestière';
	$description = 'Radiocommande entièrement personnalisable. Robuste, légère et étanche, cette télécommande aura sa place dans vos applications forestières et agricoles, mine et carrière, génie civile. ';
	$keywords = 'Radiocommande hélice,télécommande,commande de machines forestières,commande de machines de construction,boutons à bascule';
	$pageId = 'Helice';
	$swiper = new Medias('/img/product-Helice/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
					<h3>Radiocommande Hélice</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('Helice.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p><a href="<?php echo Site::relativeUrl('KEY');?>">Consulter la fiche technique</a></p> 
					<a name="features"></a>
					<h4>Description</h4>
					<ul>
						<li>Boîtier émetteur ultra léger (+/-250g)</li>
						<li>Taille réduite (140x140x70mm).</li>
						<li>Entièrement personnalisable.</li>                   
					</ul>                    
					<a name="specifications"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Boutons TOR ou analogiques.</li>
						<li>Accumulateur interchangeable NIMH.</li>
						<li>Led de diagnostic et retour d'information en option.</li>
						<li>Système exclusif de changement d'adresse et de fréquence.</li>
					</ul>
					<hr>
					<a name="accessories"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Led de diagnostique et retour d'information.</li>
						<li>Afficheur 7 segments.</li>
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
						<li>Démarrage sécurisé TCA27.</li>
						<p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
					</ul>  
					<a name="accessories"></a>
					<h4>Accessoires</h4>
					<ul>
						<li>Housse de protection en nylon.</li>
						<li>Chargeur à microprocesseur.</li>
						<li>Accumulateur interchangeable NIMH.</li>
						<p><a href="<?php echo Site::relativeUrl('KEY');?>">Plus d'infos...</a></p>
					</ul> 
					<hr>
					<a name="uses"></a>
					<h4>Applications</h4>
					<ul>
						<li>Levage et manutention.</li>
						<li>Domaine forestier.</li>
						<li>Domaine agricole.</li>                        
						<li>Génie civil, pompe à béton.</li>
						<li>Mines et carrières.</li>
					</ul>                                        
                  <hr>									
                  <a name="accessories"></a>
					<h4>Exemple de réalisation</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Radiocommande avec afficheur</h6>
							<img src="../img/product-Helice/helice_bot1.jpg" alt="Radiocommande avec afficheur">
						</div>
						<div class="span3">
							<h6>Radio télécommande agricole</h6>
							<img src="../img/product-Helice/helice_bot2.jpg" alt="Radio télécommande agricole">
						</div>
						<div class="span3">
							<h6>Radiocommande - bande transporteuse</h6>
							<img src="../img/product-Helice/helice_bot3.jpg" alt="Radiocommande pour bande transporteuse">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Ceinture de portage pour télécommande</h6>
							<img src="../img/product-Helice/helice_bot4.jpg" alt="Ceinture de portage pour télécommande">
						</div>
						<div class="span3">
							<h6>Arrêt d'urgence haute qualité</h6>
							<img src="../img/product-Helice/helice_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>						
						<div class="span3">
							<h6>Housse de protection en nylon</h6>
							<img src="../img/product-Helice/helice_bot6.jpg" alt="Housse de protection télécommande">
						</div>                        
					</div> 
				</div>
			</div>
 <?php include 'footer.php';?>
