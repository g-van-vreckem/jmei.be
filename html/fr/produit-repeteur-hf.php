<?php
	include 'common.php';
	$title = 'JMei - Répéteur ondes radio HF - Relais de signal radio pour télécommande';
	$description = 'Prolonge la distance de fonctionnement des radiocommandes sécuritaires JMei.';
	$keywords = 'JMei,répéteur,répéteur ondes HF,répéteur radio,prolongateur ondes,transmission radio très longue distance';
	$pageId = 'REPHF';
	$swiper = new Medias('/img/product-REPHF/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'products-solutions-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Répéteur ondes radio HF - Relais de signal radio pour télécommande</h3>
					<div class="row">
<?php echo $swiper->html; ?>                    
					</div>
					<p></p>
<!--					<p><a href="<?php echo Site::relativeUrl('REPHF.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>-->
					<a id="description"></a>
					<h4>Description</h4>
						<p>Le répéteur d'ondes HF est utilisé pour prolonger la distance de fonctionnement des radiocommandes sécuritaires JMei.</p>
						<p>Configurable pour l’ensemble de la gamme de radiocommande JMei, le répéteur relaye le signal radio en mode uni ou bidirectionnel.</p>
						<p>Répondant aux dernières normes industrielles, le répéteur peut être installé dans les zones techniques les plus contraignantes à tous les niveaux.</p>
					<a id="avantages"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Compatible avec tous les émetteurs JMei.</li>
						<li>Permet de doubler la distance de fonctionnement.</li>
						<li>Encombrement réduit.</li>
						<li>Indice de protection élevé : boitier et connectique IP66.</li>
						<li>Multi-tension : 4.5 à 36VDC.</li>
						<li>Système autonome sur batterie : en option.</li>
						<li>Multi-fréquence : Possibilité de travail dans les gammes 434MHz, 868MHz ou 2.4Ghz.</li>
					</ul>
					<hr>
					<a id="applications"></a>
                  <h4>Applications</h4>
					<ul>
					  <li>Réalisation de transmission radio très longue distance.</li>
						<li>Passage d’endroit contraignant au niveau radio : Cave, égout, silo, hall industrielle, montagne, …</li>
						<li>Transfert de données sans fil.</li>
						<li>Automate.</li>
				  </ul>
					<hr>
					<a id="réalisations"></a>
					<h4>Exemples de réalisations</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Répéteur HF portable</h6>
							<img src="../img/product-REPHF/rephf_bot1.jpg?v=2" alt="Répéteur HF">
						</div>
						<div class="span3">
							<h6>Prolongateur d'ondes</h6>
							<img src="../img/product-REPHF/rephf_bot2.jpg?v=2" alt="Radiocommande industrielle">
						</div>
						<div class="span3">
							<h6>Répéteur diagnostique</h6>
							<img src="../img/product-REPHF/rephf_bot3.jpg?v=2" alt="Répéteur d'ondes">
						</div>                                                
					</div>                      
				</div>
			</div>
 <?php include 'footer.php';?>
