<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	$pageId = 'ACCESSORY';
	$swiper = new Medias('/img/product-accessories/swiper/');		
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Verkrijgbare accessoires voor JMei-radiobesturingen</h3>
					<div class="row">
<?php echo $swiper->html; ?>                     
					</div>
					<p></p>
					<hr>
					<h4>Pad/Draagharnas</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90</h5>
							<img src="../img/product-accessories/houssercb90.jpg" alt="Schouderriem voor radiobesturing RCB90"> 
							<p>Schouderriem voor radiobesturing RCB90.</p>
						</div>
						<div class="span3">
							<h5>RCB3000</h5>
							<img src="../img/product-accessories/pad3000.jpg" alt="Draagriem voor radiobesturing RCB3000">  
							<p>Draagriem voor radiobesturing RCB3000.</p>
						</div>
						<div class="span3">
							<h5>RCB1000</h5>
							<img src="../img/product-accessories/pad1000.jpg" alt="Draagharnas voor radiobesturing RCB1000"> 
							<p>Draagharnas voor radiobesturing RCB1000.</p>
						</div>
					</div>                                     
					<hr>
					<h4>Beschermhoes</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90</h5>
							<img src="../img/product-accessories/houssercb90.jpg" alt="Nylon beschermhoes voor de modellen RCB90"> 
							<p>Nylon beschermhoes voor de modellen RCB90.</p>
						</div>
						<div class="span3">
							<h5>RCB3000</h5>
							<img src="../img/product-accessories/houssercb3000.jpg" alt="Nylon beschermhoes voor de modellen RCB3000"> 
							<p>Nylon beschermhoes voor de modellen RCB3000.</p>
						</div>
						<div class="span3">
							<h5>RCB1000</h5>
							<img src="../img/product-accessories/houssercb1000.jpg" alt="Leren beschermhoes voor de modellen RCB1000"> 
							<p>Leren beschermhoes voor de modellen RCB1000.</p>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<h5>RCB700</h5>
							<img src="../img/product-accessories/jmei.jpg" alt="Nylon beschermhoes voor de modellen RCB700"> 
							<p>Nylon beschermhoes voor de modellen RCB700.</p>
						</div>
						<div class="span3">
							<h5>Hélice</h5>
							<img src="../img/product-accessories/houssehelice.jpg" alt="Nylon beschermhoes voor de modellen Helice"> 
							<p>Nylon beschermhoes voor de modellen Helice.</p>
						</div>
						<div class="span3">
							<h5>JMei Pocket</h5>
							<img src="../img/product-accessories/houssepocket.jpg" alt="Silicone beschermhoes voor de modellen JMei Pocket">
							<p>Silicone beschermhoes voor de modellen JMei Pocket.</p>
						</div>
					</div>
				<hr>
					<h4>Lader/batterij</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90 / Hélice</h5>
							<img src="../img/product-accessories/charger90.jpg" alt="JMei-lader met microprocessor voor NiMH-batterijen van de RCB90/Helice"> 
							<p>JMei-lader met microprocessor voor NiMH-batterijen van de RCB90/Helice.</p>
						</div>
						<div class="span3">
							<h5>RCB3000 / RCB1000</h5>
							<img src="../img/product-accessories/charger3000.jpg" alt="JMei-lader met microprocessor voor NiMH-batterijen van de RCB3000/RCB10000"> 
							<p>JMei-lader met microprocessor voor NiMH-batterijen van de RCB3000/RCB10000.</p>
						</div>
						<div class="span3">
							<h5>RCB700</h5>
							<img src="../img/product-accessories/charger700.jpg" alt="Lader met microprocessor voor NiMH-batterijen van de RCB700">
								<p>Lader met microprocessor voor NiMH-batterijen van de RCB700.</p>
						</div>
					</div> 
				<hr>
					<h4>Diverse accessoires</h4>
					<div class="row">
						<div class="span3">
							<h5>Richtingaanwijzer</h5>
							<img src="../img/product-accessories/rosace.jpg" alt="Richtingaanwijzer voor de richtingen van de rolbrug"> 
							<p>Richtingaanwijzer voor de richtingen van de rolbrug.</p>
						</div>
						<div class="span3">
							<h5>Safeball</h5>
							<img src="../img/product-accessories/safeball.jpg" alt="Radiogestuurd dodeman-systeem"> 
							<p>Radiogestuurd ‘dodeman-systeem’.</p>
						</div>
					</div>                                                              
				</div>
			</div>
 <?php include 'footer.php';?>
