<?php
	include 'common.php';
	$title = 'JMei - accessoires pour télécommandes industrielles';
	$description = 'Accessoires pour les radiocommandes JMei. Chargeur de batteries, accumulateur, housse de protection, ceinture de portage';
	$keywords = 'chargeur,batterie,housse de protection,ceinture de portage,harnais pour télécommande';
	$pageId = 'ACCESSORY';
	$swiper = new Medias('/img/product-accessories/swiper/');		
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
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
							<h5>RCB90</h5>
							<img src="../img/product-accessories/houssercb90.jpg" alt="Bandoulière pour télécommande industrielle"> 
							<p>Bandoulière de portage pour radiocommande RCB90.</p>
						</div>
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
							<img src="../img/product-accessories/jmei.jpg" alt="Chargeur radiocommande RCB90"> 
							<p>Housse de protection en nylon pour les modèles RCB700.</p>
						</div>
						<div class="span3">
							<h5>Hélice</h5>
							<img src="../img/product-accessories/houssehelice.jpg" alt="Housse de protection télécommande pour l'industrie"> 
							<p>Housse de protection en nylon pour les modèles Hélice.</p>
						</div>
						<div class="span3">
							<h5>JMei Pocket</h5>
							<img src="../img/product-accessories/houssepocket.jpg" alt="Housse de protection en silicone">
							<p>Housse de protection en silicone pour les modèles JMei Pocket.</p>
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
				<hr>
					<h4>Accessoires divers</h4>
					<div class="row">
						<div class="span3">
							<h5>Rosace directionnelle</h5>
							<img src="../img/product-accessories/rosace.jpg" alt="Rosace directionnelle pour pont roulant"> 
							<p>Rosace directionnelle qui indique les directions du pont roulant.</p>
						</div>
					</div>                                                              
				</div>
			</div>
 <?php include 'footer.php';?>
