<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	
	$pageId = 'RCB90';
	$swiper = new Medias('/img/product-RCB90/swiper/');
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>RCB90 radio remote control</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB90.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Download PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('RCB90-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Browse the technical data sheet</a></p>   
				  <a id="description"></a>
					<h4>Description</h4>
						<p>High-performance pendant-control-type safety transmitter designed for all-or-nothing (binary) controls.</p>
						<p>The RCB90 is a wireless remote control that has proved itself over many years. The buttons on the transmitter are two-stage and enable the corresponding relays on the receiver unit to be controlled.</p>
						<p>Ultra-compact, light and very robust housing, made of reinforced plastic for industrial use, very ergonomic housing, specially adapted for aggressive environments.</p>
						<p>Emergency stop mushroom button, to ensure maximum safety.</p>
						<p>Available in 2 versions: 9-button (RCB90L) or 14-button (RCB90M).</p>
					<a id="avantages"></a>
                  <h4>Advantages</h4>
					<ul>
                    <li>Two-stage buttons. </li>
                    <li>3 configurable buttons on 2- or 3-position fixed or spring-back selectors. </li>
                    <li>Customisable front panel and inscription. </li>
                    <li>Military quality mushroom emergency stop button. </li>
                    <li>Interchangeable NiMH battery. </li>
                    <li>Optional diagnostics and feedback LED. </li>
                    <li>Exclusive system for changes of address, frequency, configuration through the buttons enabling rapid and secure interchangeability of the transmitters (one single reserve transmitter for several pieces of equipment). </li>
					</ul>
                  
<?php if ( SHOW_CERTIFICATION ) : ?>
					<a name="certification"></a>
				  <h4>Certifications</h4>
					<ul>
						<li>EMC: EN61000-6-2 et EN61000-6-4</li>
						<li>Safety: EN 60950</li>
						<li>Spectrum (R&amp;TTE Directive 1999/5/EC): EN300-220.</li>
					</ul>
<?php endif ?>
					<hr>
					<a id="options"></a>
                  <h4>Options</h4>
                  <ul>
					  <li>Transmission in bi-directional mode. </li>
                      <li>Display unit. </li>
                      <li>Identification key (rapid replacement of a damaged transmitter). </li>
                      <li>Master/slave Tandem system. </li>
                      <li>TCA27 secure start. </li>
                      <li>RECB or RCB7000-type receiver unit, can be connected via Profibus, Ethernet, Canbus, Profitnet or other fieldbus. </li>
					  <p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> More info...</a></p> 
					</ul>  
					<a id="accessoires"></a>
				  <h4>Accessories</h4>
					<ul>
					  <li>Protective cover </li>
                      <li>Charger with JMei-designed microprocessor </li>
                      <li>Interchangeable NiMH battery. </li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> More info...</a></p> 
					</ul>					
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
					  <li>Travelling crane. </li>
                      <li>Tower crane. </li>
                      <li>Industrial door. </li>
                      <li>Pump, water jet. </li>
					</ul>                  
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Production examples</h4>                       
					<div class="row">
						<div class="span3">
							<h6>RCB90/L - 9-function pendant control</h6>
							<img src="../img/product-RCB90/rcb90_bot1.jpg" alt="Télécommande grue">
						</div>
						<div class="span3">
							<h6>Customised radio (same colour as the travelling crane)</h6>
							<img src="../img/product-RCB90/rcb90_bot4.jpg" alt="Télécommande pour pont roulant personnalisée">
						</div>
						<div class="span3">
							<h6>RCB90/M - 14-function pendant control</h6>
							<img src="../img/product-RCB90/rcb90_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>High-quality emergency stop</h6>
							<img src="../img/product-RCB90/rcb90_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>
						<div class="span3">
							<h6>Universal industrial radio remote control</h6>
							<img src="../img/product-RCB90/rcb90_bot2.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Remote control address memory key</h6>
							<img src="../img/product-RCB90/rcb90_bot6.jpg" alt="Clé mémoire adresse télécommande">
						</div>                        
					</div>                  
				</div>
			</div>
<?php include 'footer.php';?>
