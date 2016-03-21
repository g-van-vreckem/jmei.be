<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	
	$pageId = 'RCB700';
	$swiper = new Medias('/img/product-RCB700/swiper/');
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>RCB700 radio remote control</h3>
					<div class="row">
<?php echo $swiper->html; ?>                        
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB700.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i>  Download PDF</a></p>

					<a id="description"></a>
					<h4>Description</h4>
						<p>High-performance secure pendant-control-type transmitter designed for the controls of any industrial machine.<br>The RCB700 is a freely configurable and high-quality wireless remote control.<br>
					    Produced in aluminium housing, extremely robust, it offers a multitude of possibilities.</p>
						<p>The size of the housing is flexible and enables our product to be customised depending on the customer's wishes.</p>
						<p>Emergency stop mushroom button, to ensure maximum safety.</p>
					<a id="avantages"></a>
				  <h4>Advantages</h4>
					<ul>
						<li>Up to 20 configurable binary functions. </li>
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
                      <li>Barcode reader </li>
                      <li>Identification key (rapid replacement of a damaged transmitter). </li>
					  <p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i>
 More info...</a></p> 
					</ul>  
					<a id="accessoires"></a>
				  <h4>Accessories</h4>
					<ul>
						<li>Protective cover. </li>
                        <li>Charger with JMei-designed microprocessor. </li>
                        <li>Belt fastening clips. </li>
                        <li>Charging station. </li>
                        <li>RECB or RCB7000-type receiver unit, can be connected via Profibus, Ethernet, Canbus, Profitnet or other fieldbus. </li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i>More info...</a></p> 
					</ul>					
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Forestry forwarders. </li>
                        <li>Pump. </li>
                        <li>Saw. </li>
                        <li>Agricultural Machinery. </li>
                        <li>Forestry Machinery. </li>
                        <li>Iron and steel industry equipment.</li>
					</ul>                  
                  <hr>					                    									
                  <a id="réalisations"></a>
					<h4>Production examples</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Remote Control with feedback</h6>                            
							<img src="../img/product-RCB700/rcb700_bot1.jpg?v=1" alt="Télécommande avec scanner">    
						</div>
						<div class="span3">
							<h6>Radio remote control with barcode reader</h6>
							<img src="../img/product-RCB700/rcb700_bot2.jpg" alt="Radiocommande avec lecteur code-barres">
                         <p><a href="<?php echo Site::relativeUrl('SCAN.pdf');?>">Browse the technical data sheet</a></p>
						</div>
						<div class="span3">
							<h6>Forestry remote control (winch control)</h6>
							<img src="../img/product-RCB700/rcb700_bot3.jpg?v=1" alt="télécommande forestière pour treuil">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Customised remote control</h6>
							<img src="../img/product-RCB700/rcb700_bot4.jpg" alt="Télécommande sur-mesure">
						</div>
						<div class="span3">
							<h6>Radio remote control with graphical display</h6>
							<img src="../img/product-RCB700/rcb700_bot5.jpg" alt="Radiocommande avec afficheur graphique">
						</div>						
						<div class="span3">
							<h6>High-performance emergency stop</h6>
							<img src="../img/product-RCB700/rcb700_bot6.jpg" alt="Arrêt d'urgence télécommande">
						</div>                        
					</div>                  
				</div>
			</div>
<?php include 'footer.php';?>
