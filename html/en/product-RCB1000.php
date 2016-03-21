<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	
	$pageId = 'RCB1000';
	$swiper = new Medias('/img/product-RCB1000/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>RCB1000 radio remote control</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB1000.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Download PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('RCB1000-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Browse the technical data sheet</a></p>  
                  <a id="description"></a>
                  <h4>Description</h4>
				  <p>Extremely robust and secure high-performance control panel-type radio remote control, designed for controlling any industrial machinery in heavy environments.</p>
						<p>The RCB1000 is a freely configurable and high-quality wireless remote control. <br>Its design and the endless configuration possibilities allow all possibilities for machine control.</p>
						<p>Ultra-compact and very robust housing, made of reinforced plastic for industrial use, very ergonomic housing, specially adapted for aggressive environments.</p>
						<p>Emergency stop mushroom button, to ensure maximum safety.</p>
					<a id="avantages"></a>
				  <h4>Advantages</h4>
					<ul>
						<li>2, 3 or 4 x 2-axis switches. </li>
                        <li>Up to 8 single axis switches. </li>
                        <li>Spring-back or fixed-position selector switches. </li>
                        <li>Standard push-button or with warning lights. </li>
                        <li>Binary functions up to 6 speeds by joystick. </li>
                        <li>Proportional analogue functions. </li>
                        <li>Customisable front panel and inscription. </li>
                        <li>Optional inclinometer function. </li>
                        <li>Joysticks with dead-man function. </li>
                        <li>Military quality mushroom emergency stop button. </li>
                        <li>Interchangeable NiMH battery. </li>
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
                      <li>Master/slave Tandem system. </li>
                      <li>TCA27 secure start. </li>
                      <li>RECB or RCB7000-type receiver unit, can be connected via Profibus, Ethernet, Canbus, Profitnet or other fieldbus.</li>
					  <p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> More info...</a></p> 
					</ul>  
					<a id="accessoires"></a>
				  <h4>Accessories</h4>
				  <ul>
					  <li>Leather protective cover. </li>
                      <li>Charger with JMei-designed microprocessor </li>
                      <li>Interchangeable NiMH battery. </li>
					  <p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> More info...</a></p> 
					</ul>					
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Travelling crane. </li>
                        <li>Marine. </li>
                        <li>Hydraulic lorry. </li>
                        <li>Special machinery, etc. </li>
					</ul>                  
                  <hr>
                  <a id="réalisations"></a>
					<h4>Production examples</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Radio remote control - safe to handle</h6>
							<img src="../img/product-RCB1000/rcb1000_bot1.jpg" alt="Radio remote control - safe to handle">
						</div>
						<div class="span3">
							<h6>Radio remote control - customised joysticks</h6>
							<img src="../img/product-RCB1000/rcb1000_bot2.jpg" alt="Radio remote control - customised joysticks">
						</div>
						<div class="span3">
							<h6>Analogue industrial radio remote control</h6>
							<img src="../img/product-RCB1000/rcb1000_bot3.jpg" alt="Analogue industrial radio remote control">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Electronic memory key for radio control</h6>
							<img src="../img/product-RCB1000/rcb1000_bot4.jpg" alt="Electronic memory key for radio control">
						</div>
						<div class="span3">
							<h6>Radio remote control with display</h6>
							<img src="../img/product-RCB1000/rcb1000_bot5.jpg" alt="Radio remote control with display">
						</div>						
						<div class="span3">
							<h6>Secure Start-up for remote control</h6>
							<img src="../img/product-RCB1000/rcb1000_bot6.jpg" alt="Secure Start-up for remote control">
						</div>                        
					</div>
					</div>
				</div>
<?php include 'footer.php';?>