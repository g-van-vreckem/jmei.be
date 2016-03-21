<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	
	$pageId = 'RCB3000';
	$swiper = new Medias('/img/product-RCB3000/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>RCB3000 radio remote control</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB3000.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Download PDF</a></p>      
					<p> <a href="<?php echo Site::relativeUrl('RCB3000-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Browse the technical data sheet</a></p>   
					<a id="description"></a>
					<h4>Description</h4>
						<p>Control-panel-type high-performance secure transmitter designed to control any industrial machinery.</p>
						<p>The RCB3000 is a freely configurable and high-quality wireless remote control.<br>Its design and the endless configuration possibilities allow all possibilities for machine control.</p>
						<p>Ultra-compact, light and very robust housing, made of reinforced plastic for industrial use, very ergonomic housing, specially adapted for aggressive environments.</p>
						<p>Emergency stop mushroom button, to ensure maximum safety.</p>
					<a id="avantages"></a>
				  <h4>Advantages</h4>
					<ul>
						<li>2 or 3 x 2-axis switches. </li>
                        <li>Up to 7 single axis switches. </li>
                        <li>Spring-back or fixed-position selector switches. </li>
                        <li>Standard push-button or with warning lights. </li>
                        <li>Binary functions up to 6 speeds by joystick. </li>
                        <li>Proportional analogue functions. </li>
                        <li>Customisable front panel and inscription. </li>
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
                      <li>LED diagnostics and feedback. </li>
                      <li>7-Segment display, alphanumeric or colour graphic. </li>
                      <li>Identification key (rapid replacement of a damaged transmitter). </li>
                      <li>Master/slave Tandem system. </li>
                      <li>TCA27 secure start. </li>
                      <li>RECB or RCB7000-type receiver unit, can be connected via Profibus, Ethernet, Canbus, Profitnet or other fieldbus. </li>
					  <p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> 
 More info...</a></p> 
					</ul>   					
                  <a id="accessoires"></a>
				  <h4>Accessories</h4>
					<ul>
						<li>Nylon protective cover. </li>
                        <li>Charger with JMei-designed microprocessor </li>
                        <li>Interchangeable NiMH battery. </li>
                        <li>Fixed power supply (12/24 V DC). </li>              
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> More info...</a></p> 
					</ul>	 
					<hr>
					<a id="applications"></a>
				  <h4>Applications</h4>
				  <ul>
					  <li>Lifting equipment (travelling crane, tower crane, gantry). </li>
                      <li>Handling equipment. </li>
                      <li>Quarry (crusher, rock breaker, conveyor belt). </li>
                      <li>All hydraulic controls (crane on lorry). </li>
                      <li>Mobile machinery (agricultural and forestry). </li>
                      <li>Civil engineering - buildings and public works. </li>
                      <li>Mining applications. </li>
                      <li>Maritime applications.</li>    
					</ul>                      
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Production examples</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Bi-directional RCB3000</h6>
							<img src="../img/product-RCB3000/rcb3000_bot1.jpg" alt="Bi-directional RCB3000">
						</div>
						<div class="span3">
							<h6>Radio remote control with LCD display</h6>
							<img src="../img/product-RCB3000/rcb3000_bot2.jpg" alt="Radio remote control with LCD display">
						</div>
						<div class="span3">
							<h6>Remote control according to specifications</h6>
							<img src="../img/product-RCB3000/rcb3000_bot3.jpg" alt="Remote control according to specifications">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Analogue radio remote control</h6>
							<img src="../img/product-RCB3000/rcb3000_bot4.jpg" alt="Analogue radio remote control">
						</div>
						<div class="span3">
							<h6>Nylon protective cover</h6>
							<img src="../img/product-RCB3000/rcb3000_bot5.jpg" alt="Nylon protective cover">
						</div>						
						<div class="span3">
							<h6>Radio remote control for shunters</h6>
							<img src="../img/product-RCB3000/rcb3000_bot6.jpg" alt="Radio remote control for shunters">
						</div>                        
					</div>                      
				</div>
			</div>
<?php include 'footer.php';?>
