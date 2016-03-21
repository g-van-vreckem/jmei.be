<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	
	$pageId = 'JMPOCKET';
	$swiper = new Medias('/img/product-JMPOCKET/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Compact industrial remote control - JMei Pocket</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('POCKET.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Download PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('POCKET-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Browse the technical data sheet</a></p>  
					<a id="description"></a>
					<h4>Description</h4>
						<p>The JMei Pocket remote control can be used as a standard device for various handling applications such as cranes, breakdown lorries, concrete-pump lorries, lifting equipment, construction machinery, access gates, etc.</p>
						<p>Its compact transmitter has been designed for ergonomic use and to improve operational performance and safety.</p>
						<p>Its receiver unit with integrated commands compensates for the disadvantages of not having a transmitter (lost or damaged).</p>
				  <p>The receiver unit keyboard may be protected by a password.<br>Automatic selection of the frequency channel avoids interference with other radio systems.<br>Several transmitters can be combined with a single receiver unit, which is a great advantage for use in access authorisation.</p>
					<a id="avantages"></a>
                  <h4>Advantages</h4>
					<ul>
						<li>Receiver unit with integrated controls. </li>
                        <li>Automatic RF channel selection. </li>
                        <li>Rapid pairing of transmitters. </li>
                        <li>Can be password-protected. </li>
                        <li>Fast and easy installation. </li>
                        <li>Ergonomics - lightness. </li>
                        <li>Very competitive. </li>
					</ul>                          
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
                      <li>Trailers. </li>
                      <li>Winches. </li>
                      <li>Hydraulics. </li>
                      <li>Industrial control. </li>
                      <li>Door - industrial access barrier. </li>
					</ul>                  
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Production examples</h4>                       
					<div class="row">
						<div class="span3">
							<h6>JMei Pocket - carrying clips</h6>
							<img src="../img/product-JMPOCKET/pocket_bot1.jpg" alt="Télécommande JMei">
						</div>
						<div class="span3">
							<h6>Ultra-compact transmitter </h6>
							<img src="../img/product-JMPOCKET/pocket_bot2.jpg" alt="Télécommande industrielle de poche">
						</div>
						<div class="span3">
							<h6>Silicone protection</h6>
							<img src="../img/product-JMPOCKET/pocket_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Compact receiver unit</h6>
							<img src="../img/product-JMPOCKET/pocket_bot4.jpg" alt="Récepteur radiocommande">
						</div>
						<div class="span3">
							<h6>Universal radio control assembly</h6>
							<img src="../img/product-JMPOCKET/pocket_bot5.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Receiver unit with access code</h6>
							<img src="../img/product-JMPOCKET/pocket_bot6.jpg" alt="Télécommande industrielle sécurisée">
						</div>                        
					</div>                     
				</div>
			</div>
 <?php include 'footer.php';?>
