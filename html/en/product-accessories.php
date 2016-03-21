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
					<h3>Accessories available for your JMei radio remote controls</h3>
					<div class="row">
<?php echo $swiper->html; ?>                     
					</div>
					<p></p>
					<hr>
					<h4>Carrying Pad/Harness</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90</h5>
							<img src="../img/product-accessories/houssercb90.jpg" alt="Shoulder Carry Strap for RCB90 radio remote control"> 
							<p>Shoulder Carry Strap for RCB90 radio remote control.</p>
						</div>
						<div class="span3">
							<h5>RCB3000</h5>
							<img src="../img/product-accessories/pad3000.jpg" alt="Carry belt for RCB3000 radio remote control">  
							<p>Carry belt for RCB3000 radio remote control.</p>
						</div>
						<div class="span3">
							<h5>RCB1000</h5>
							<img src="../img/product-accessories/pad1000.jpg" alt="Carry harness for RCB1000 radio remote control"> 
							<p>Carry harness for RCB1000 radio remote control.</p>
						</div>
					</div>                                     
					<hr>
					<h4>Protective cover</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90</h5>
							<img src="../img/product-accessories/houssercb90.jpg" alt="Nylon protective cover for RCB90 models"> 
							<p>Nylon protective cover for RCB90 models.</p>
						</div>
						<div class="span3">
							<h5>RCB3000</h5>
							<img src="../img/product-accessories/houssercb3000.jpg" alt="Nylon protective cover for RCB3000 models"> 
							<p>Nylon protective cover for RCB3000 models.</p>
						</div>
						<div class="span3">
							<h5>RCB1000</h5>
							<img src="../img/product-accessories/houssercb1000.jpg" alt="Leather protective cover for RCB1000 models"> 
							<p>Leather protective cover for RCB1000 models.</p>
						</div>
					</div>
					<div class="row">
						<div class="span3">
							<h5>RCB700</h5>
							<img src="../img/product-accessories/jmei.jpg" alt="Nylon protective cover for RCB700 models"> 
							<p>HNylon protective cover for RCB700 models.</p>
						</div>
						<div class="span3">
							<h5>Hélice</h5>
							<img src="../img/product-accessories/houssehelice.jpg" alt="Nylon protective cover for Hélice models"> 
							<p>HNylon protective cover for Hélice models.</p>
						</div>
						<div class="span3">
							<h5>JMei Pocket</h5>
							<img src="../img/product-accessories/houssepocket.jpg" alt="Silicon protective cover for JMei Pocket models">
							<p>Silicon protective cover for JMei Pocket models.</p>
						</div>
					</div>
				<hr>
					<h4>Charger/Battery</h4>
					<div class="row">
						<div class="span3">
							<h5>RCB90 / Hélice</h5>
							<img src="../img/product-accessories/charger90.jpg" alt="JMei Charger with microprocessor for RCB90/Hélice NiMH batteries"> 
							<p>JMei Charger with microprocessor for RCB90/Hélice NiMH batteries.</p>
						</div>
						<div class="span3">
							<h5>RCB3000 / RCB1000</h5>
							<img src="../img/product-accessories/charger3000.jpg" alt="JMei Charger with microprocessor for RCB3000/RCB1000 NiMH batteries"> 
							<p>JMei Charger with microprocessor for RCB3000/RCB1000 NiMH batteries.</p>
						</div>
						<div class="span3">
							<h5>RCB700</h5>
							<img src="../img/product-accessories/charger700.jpg" alt="Charger with microprocessor for RCB700 NiMH batteries">
								<p>Charger with microprocessor for RCB700 NiMH batteries.</p>
						</div>
					</div> 
				<hr>
					<h4>Miscellaneous Accessories</h4>
					<div class="row">
						<div class="span3">
							<h5>Directional Escutcheon</h5>
							<img src="../img/product-accessories/rosace.jpg" alt="Directional Rosette which indicates the directions of the travelling crane"> 
							<p>Directional Escutcheon which indicates the directions of the travelling crane.</p>
						</div>
						<div class="span3">
							<h5>Safeball</h5>
							<img src="../img/product-accessories/safeball.jpg" alt="The radio-controlled dead-man system"> 
							<p>The radio-controlled "dead-man" system.</p>
						</div>
					</div>                                                              
				</div>
			</div>
 <?php include 'footer.php';?>
