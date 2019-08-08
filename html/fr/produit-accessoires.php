<?php
	include 'common.php';
	$title = 'JMei - accessoires pour télécommandes industrielles';
	$description = 'Accessoires pour les radiocommandes JMei. Chargeur de batteries, accumulateur, housse de protection, ceinture de portage';
	$keywords = 'JMei,accessoires pour télécommandes industrielles,Chargeur de batteries,accumulateur,housse de protection,ceinture de portage,Bandoulière de portage pour radiocommande,Ceinture de portage pour radiocommande,Harnais de portage pour radiocommande,Housse de protection,Chargeur à microprocesseur,Rosace directionnelle';
	$pageId = 'ACCESSORY';
	$swiper = new Medias('/img/product-accessories/swiper/');		
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'products-solutions-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Accessoires disponibles pour vos radiocommandes JMei</h3>
					<div class="row">
<?php echo $swiper->html; ?>                     
					</div>
					<p></p>
					<hr>
					<h4>Pad/Harnais de portage</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB3000</h5>
							<img src="../img/product-accessories/pad3000.jpg" alt="Ceinture pour télécommande industrielle">  
							<p>Ceinture de portage pour radiocommande RCB3000.</p>
						</div>
						<div class="span3">
							<h5>RCB1000</h5>
							<img src="../img/product-accessories/pad1000.jpg" alt="Harnais pour télécommande industrielle"> 
							<p>Harnais de portage pour radiocommande RCB1000.</p>
						</div>
						<div class="span3">
							<h5>RCB1000</h5>
							<img src="../img/product-accessories/pad1000c.jpg" alt="Harnais pour télécommande industrielle"> 
							<p>Harnais confort pour radiocommande RCB1000.</p>
						</div>
					</div>                                     
					<hr>
					<h4>Housse de protection</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90</h5>
							<img src="../img/product-accessories/houssercb90.jpg" alt="Housse de protection télécommande RCB90"> 
							<p>Housse de protection en nylon pour les modèles RCB90.</p>
						</div>
						<div class="span3">
							<h5>RCB3000</h5>
							<img src="../img/product-accessories/houssercb3000.jpg" alt="Housse de protection télécommande RCB3000"> 
							<p>Housse de protection en nylon pour les modèles RCB3000.</p>
						</div>
						<div class="span3">
							<h5>RCB1000</h5>
							<img src="../img/product-accessories/houssercb1000.jpg" alt="Housse de protection télécommande RCB1000"> 
							<p>Housse de protection en cuir pour les modèles RCB1000.</p>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<h5>RCB700</h5>
							<img src="../img/product-accessories/houssercb700.jpg" alt="Housse portage radiocommande forestière"> 
							<p>Housse de protection en nylon pour les modèles RCB700.</p>
						</div>
						<div class="span3">
							<h5>Hélice</h5>
							<img src="../img/product-accessories/houssehelice.jpg" alt="Housse de protection télécommande pour l'industrie"> 
							<p>Housse de protection en nylon pour les modèles Hélice.</p>
						</div>
						<div class="span3">
							<h5>Boîtier Ceinture (BC)</h5>
							<img src="../img/product-accessories/houssebc.jpg" alt="Housse de protection radiocommande">
							<p>Housse de protection en cuir pour les modèles JMei Sadamec-BC.</p>
						</div>
					</div>
				<hr>
					<h4>Chargeur/Batterie</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90 / Hélice</h5>
							<img src="../img/product-accessories/charger90.jpg" alt="Chargeur radiocommande RCB90"> 
							<p>Chargeur JMei à microprocesseur pour batteries NiMH RCB90 / Hélice.</p>
						</div>
						<div class="span3">
							<h5>RCB3000 / RCB1000</h5>
							<img src="../img/product-accessories/charger3000.jpg" alt="Chargeur radiocommande RCB3000"> 
							<p>Chargeur JMei à microprocesseur pour batteries NiMH RCB3000 / RCB10000.</p>
						</div>
						<div class="span3">
							<h5>RCB700</h5>
							<img src="../img/product-accessories/charger700.jpg" alt="Chargeur radiocommande RCB700">
								<p>Chargeur à microprocesseur pour batteries NiMH RCB700.</p>
						</div>
					</div> 
					<div class="row">
						<div class="span3">
							<h5>S-LYT</h5>
							<img src="../img/product-accessories/chargerslyt.jpg" alt="Chargeur radiocommande S-LYT"> 
							<p>Chargeur JMei à microprocesseur pour batteries S-LYT.</p>
						</div>
						<div class="span3">
							<h5>SADamec-JMei</h5>
							<img src="../img/product-accessories/chargersad.jpg" alt="Chargeur radiocommande SADamec-JMei"> 
							<p>Chargeur JMei à microprocesseur pour batteries SADamec-JMei.</p>
						</div>   
						<div class="span3">
							<h5>RCB700</h5>
							<img src="../img/product-accessories/charger700support.jpg" alt="Chargeur radiocommande RCB700"> 
							<p>Chargeur + support JMei à microprocesseur pour batteries NiMH RCB700.</p>
						</div> 
					</div> 
				<hr>
					<h4>Accessoires divers</h4>
					<div class="row">
						<div class="span3">
							<h5>Rosace directionnelle</h5>
							<img src="../img/product-accessories/rosace.jpg" alt="Rosace directionnelle pour pont roulant"> 
							<p>Rosace directionnelle qui indique les directions du pont roulant.</p>
						</div>
						<div class="span3">
							<h5>Safeball</h5>
							<img src="../img/product-accessories/safeball.jpg" alt="Homme mort pour télécommande de sécurité "> 
							<p>Le système "homme-mort" radio-commandé.</p>
						</div>
						<div class="span3">
							<h5>Valise de transport</h5>
							<img src="../img/product-accessories/caseradio.jpg" alt="Valise de rangement pour radiocommande"> 
							<p>Système de transport pour vos radiocommandes.</p>
						</div>
					</div>                                                              
				</div>
			</div>
 <?php include 'footer.php';?>
