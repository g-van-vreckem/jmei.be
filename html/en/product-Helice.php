<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	
	$pageId = 'Helice';
	$swiper = new Medias('/img/product-Helice/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Hélice Radio remote control</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('Helice.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i>  Download PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('Helice-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Browse the technical data sheet</a></p>   
					<a id="description"></a>
					<h4>Description</h4>
					<p>Mini-console-type high-performance secure transmitter or control box designed to control any industrial machinery.</p>
						<p>The Hélice is a freely configurable and high-quality wireless remote control.<br>Its highly practical design allows many opportunities for machine control.<br>Ultra-compact, light and very robust housing, made of reinforced plastic for industrial use, very ergonomic housing, specially adapted for aggressive environments.</p>
						<p>Emergency stop mushroom button, to ensure maximum safety.</p>                   
				  <a id="avantages"></a>
                  <h4>Advantages</h4>
					<ul>
						<li>Up to 20 configurable binary functions </li>
                        <li>Spring-back or fixed-position selector switches. </li>
                        <li>Standard push-button or with warning lights. </li>
                        <li>Proportional analogue functions (4 MAX). </li>
                        <li>Customisable front panel and inscription. </li>
                        <li>Military quality mushroom emergency stop button. </li>
                        <li>Internal NiMH battery. </li>
                        <li>Optional diagnostics and feedback LED. </li>
                        <li>Optional LCD graphics screen. </li>
                        <li>Exclusive system for changes of address, frequency, configuration through the buttons enabling rapid and secure interchangeability of the transmitters (one single reserve transmitter for several pieces of equipment). </li>
					</ul>
					<hr>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission in bi-directional mode. </li>
                        <li>Display unit. </li>
                        <li>Identification key (rapid replacement of a damaged transmitter). </li>
                        <li>RECB or RCB7000-type receiver unit, can be connected via Profibus, Ethernet, Canbus, Profitnet or other fieldbus. </li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> More info...</a></p> 
					</ul>  
					<a id="accessoires"></a>
				  <h4>Accessories</h4>
					<ul>
						<li>Nylon protective cover. </li>
                        <li>Charger with JMei-designed microprocessor </li>
                        <li>Interchangeable NiMH battery. </li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> More info...</a></p> 
					</ul> 
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Lifting and handling. </li>
                        <li>Forestry sector. </li>
                        <li>Agricultural sector. </li>
                        <li>Civil Engineering, concrete pump. </li>
                        <li>Mines and quarries. </li>
					</ul>                                        
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Production examples</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Radio remote control with display</h6>
							<img src="../img/product-Helice/helice_bot1.jpg" alt="Radiocommande avec afficheur">
						</div>
						<div class="span3">
							<h6>Agricultural radio remote control </h6>
							<img src="../img/product-Helice/helice_bot2.jpg" alt="Radio télécommande agricole">
						</div>
						<div class="span3">
							<h6>Radio remote control - conveyor belt</h6>
							<img src="../img/product-Helice/helice_bot3.jpg" alt="Radiocommande pour bande transporteuse">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Carry belt for remote control</h6>
							<img src="../img/product-Helice/helice_bot4.jpg" alt="Ceinture de portage pour télécommande">
						</div>
						<div class="span3">
							<h6>High-quality emergency stop</h6>
							<img src="../img/product-Helice/helice_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>						
						<div class="span3">
							<h6>Nylon protective cover</h6>
							<img src="../img/product-Helice/helice_bot6.jpg" alt="Housse de protection télécommande">
						</div>                        
					</div> 
				</div>
			</div>
 <?php include 'footer.php';?>
