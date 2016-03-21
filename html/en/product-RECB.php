<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	
	$pageId = 'RECB';
	$swiper = new Medias('/img/product-RECB/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>RECB radio receiver unit</h3>
					<div class="row">
<?php echo $swiper->html; ?>                    
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RECB.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i>  Download PDF</a></p>
					<hr>
					<a id="description"></a>
					<h4>Description</h4>
						<p>Receiver unit associated with the entire range of JMei transmitters.</p>
						<p>Fully configurable, this HF radio receiver allows the control of any industrial machinery.</p>
						<p>Motherboard with high-tech relay, proven and highly resistant, this unit is suitable for all industrial applications.</p>
						<p>Meeting the latest industry standards, the receiver unit can be installed in the the most restrictive technical areas at all levels.</p>
					<a id="avantages"></a>
                  <h4>Advantages</h4>
                  <ul>
					  <li>Pre-wired or not. </li>
                      <li>Transparent cover for easy diagnostics. </li>
                      <li>22 digital outputs. </li>
                      <li>Safety relays with guided contacts for emergency stop. </li>
                      <li>Optional diagnostics and feedback LED. </li>
                      <li>Optional LCD graphics screen. </li>
                      <li>Exclusive automatic frequency change system.</li>
					</ul>
					<hr>
					<a id="options"></a>
                  <h4>Options</h4>
                  <ul>
					  <li>Transmission in bi-directional mode. </li>
                      <li>Support magnet. </li>
                      <li>Analogue (0-10V 4-20mA +/- 10V +/-20mA). </li>
                      <li>PWM. </li>
                      <li>Digital input card. </li>
                      <li>Analogue input card. </li>
                      <li>Profibus, Ethernet, Canbus, Profinet or other fieldbus connection. </li>
                      <li>Metal housing. </li>
                      <li>Harting plug wiring, or other.</li>
					</ul>                     
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Travelling crane. </li>
                        <li>Tower crane. </li>
                        <li>Hydraulic lorry. </li>
                        <li>Special machinery. </li>
                        <li>PLC, etc.</li>
					</ul> 
                 <hr>									
                  <a id="réalisations"></a>
					<h4>Production examples</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Radio remote control receiver unit</h6>
							<img src="../img/product-RECB/recb_bot1.jpg" alt="Radio remote control receiver unit">
						</div>
						<div class="span3">
							<h6>Radio remote control receiver unit</h6>
							<img src="../img/product-RECB/recb_bot2.jpg" alt="Radio remote control receiver unit">
						</div>
						<div class="span3">
							<h6>Radio remote control receiver unit</h6>
							<img src="../img/product-RECB/recb_bot3.jpg" alt="Radio remote control receiver unit">
						</div>                                                
					</div>                      
				</div>
			</div>
 <?php include 'footer.php';?>
