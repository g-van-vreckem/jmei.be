<?php
	include 'common.php';
	$title .= '';
	$description .='';
	$pageId = 'RECB';
	include 'header.php';
	include 'nav.php';

?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a><h3>Radio Receiver</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-RECB/recb_1.jpg" alt="JMei RECB" />
						</div>
					</div>
					<p></p>
					<!--<p><a href="<?php echo Site::relativeUrl('RECB.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Download PDF</a></p>-->
					<a name="features"></a><h4>Features</h4>
					<p>JMei Radio remote control receiver designed with a high performance radio module unit foreseen for harsh environment in the heavy industry.<br />
					64 possible channels/ frequencies, easy to adapt, in maintenance mode, by using push button functions or joysticks functions.<br />
					Transmitter outputs easy to check regarding correct transmission by signalization LED.<br />
					Receiver connection, either with Han plug, or cable 3 m Length.<br />
					Transceiver designed with galvanic isolated power supply, moreover foreseen to be insensitive of short cut in power supply.</p>
					<p>The whole output relays are controlled by two independent microprocessors which are keeping a continuous supervision dialog and verify the correct operation of the radio remote control.<br />
					In case of system failure of one of these micro processors, the radio remote control set automatically in emergency stop, waiting for a new start up.</p>
					<p>The JMei receiver is designed to be compatible with the whole range of IRC transmitter RCB90, RCB3000, RCB1000, RCB700 and can be also combined with our wireless systems RCB6000 or 7000 in network.</p>
					<a name="specifications"></a><h4>Specifications</h4>
					<ul>
					</ul>
					<h6>Receiver:</h6>
					<ul>
						<li><strong>Receiver foreseen with feed back capability</strong> (serial, digital, or analog mode) by using only one channel.</li>
						<li>Emergency stop category 3.</li>
						<li>Up to 40 digital outputs, 8 analogues proportional/functions.</strong></li>
						<li>Designed for all possible hydraulic proportional electro valves.</li>
						<li>Many different possible interfaces serial, analog (4-20mA, 0-10V, -10V 0 +10V, 3-6-9V/hydraulic, 6-12-18V/ hydraulic) CAN bus, Profibus, Ethernet, RS232 or 485.</li>
						<li>Guided contact relays.</li>
						<li>Housing dimension: 160 x 240 x 90 mm.</li>
						<li>Polycarbonate housing with transparent cover for easy check of maintenance LED, IP65 or 66.</li>
						<li>Processor board with two main micro processors.</li>
						<li>Fixed by silent blocks.</li>
						<li>Protection: IP65/66.</li>
						<li>Weight: approx: 1.5 Kg.</li>
						<li>Working temperature: - 20 °C to + 55°C.</li>
						<li>Power supply 24 to 48V AC/DC or 12VDC (option) or 220 V.</li>
						<li>Relays 8A Max.</li>
						<li>Able to drive contactors max 40A.</li>
					</ul>
					<h6>Radio module :</h6>
					<ul>
						<li>UHF (434 or 866 MHz) - 64 channels programmable from transmitter.</li>
						<li>Transmission codes: Addresses 32bits and CRC 16bits.</li>
						<li>Throughput: < 10mW.</li>
						<li>Modulation: FM: FSK.</li>
					</ul>
<?php if ( SHOW_CERTIFICATION ) : ?>
					<a name="certification"></a><h4>Certification</h4>
					<ul>
						<li>Complies with the R&amp;TTE Directive (EN 300 200, EN 301 389-1/3)</li>
						<li>Electrical safety EN 60950</li>
						<li>Safety of emergency stop EN 60204-32 + EN 954</li>
					</ul>
<?php endif ?>
				</div>
			</div>
 <?php include 'footer.php';?>
