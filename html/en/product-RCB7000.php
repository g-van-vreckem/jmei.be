<?php
	include 'common.php';
	$title .= '';
	$description .='';
	$pageId = 'RCB7000';
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a><h3>Wireless industrial data transmission RCB 7000</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-RCB7000/rcb7000_1.jpg" alt="RCB 7000" />
						</div>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB7000.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Download PDF</a></p>

					<a name="features"></a><h4>Features</h4>
					<p>IRC multichannel wireless transmission systems RCB7000, are designed for a reliable transmission of all types of digital or analogue signal over distances of <strong>up to 5000 m in industrial environment</strong>, thus enabling a significant reduction in all types of control and measurement cables between units and the PLC/automatic controller and between units themselves.<br />
					RCB7000 transmission systems can be used to exchange all types of signal, whether RS232 or 485 or others.</p>

					<a name="specifications"></a><h4>Specifications</h4>
					<img src="../img/product-RCB7000/rcb7000_2_en.gif" alt="RCB 7000 Unidirectional or bi-directional transmission - Multichannel 64 channels available" />
					<p>The basic RCB7000 transmission system includes a transmitter unit and a receiver unit.<br />
					These units can be used to send or receive all types of digital signal, and also analogue signal, using radio frequencies.<br />
					The radio units can communicate in unidirectional or bi-directional mode using a single frequency (technology based on a transceiver).</p>
					<p>The transmission systems use a technology based on our extensive experience in this field (+/- 15 years), i.e. tried and tested in <strong>industrial applications such as steel works and foundries and in an environment where the electromagnetic interference may be very strong</strong>.<br />
					They operate either in the frequency band 434 MHz or 868/870 MHz (license-free frequency) using a low power output (less than 10mW) as standard, in order not to interfere with other radio controlled applications on the client’s site.</p>
					
					<a name="uses"></a><h4>Uses</h4>
					<ul>
						<li>Remote wireless transmission of all types of analogue measurement signal, for example weight, pressure, temperature, speeds, etc. to a central PC or automatic controller.</li>
						<li>Transmission of all digital or analogue signals, for example position of mobile machinery, zoning of overhead cranes or other mobile plant, remote control of machinery, pumps, motors etc., transmission of information between a mobile machine (Clark/or equivalent industrial forklift) and a fixed unit., foreseen with possibility of emergency stop class 3 transmission.</li>
						<li>Transmission of information of all types from display screens.</li>
						<li>Control and access authorisation management, remote barrier opening and closing, transmission of access badge information, access control.</li>
					</ul>

					<a name="uses"></a><h4>Transmission reliability and safety in use</h4>
					<p>The IRC /RCB7000 units have control systems and codes designed to ensure a high level of reliability against interference or interruptions, which could be caused by other radio frequency sources on the site, by means of the following :</p>
					<ul>
						<li>Address codes identifying the IRC receiver and transmitter (32-bit codes).</li>
						<li>Frame coding sent by 16-bit CRC /IRC code.</li>
						<li>Continuous re-reading by internal protocol and message verification.</li>
						<li>In the event of interference, the transmission channel can easily be re-programmed by PC on site, 64 channels are available.</li>
						<li>In bi-directional mode, there is also the option to check if the digital contact signals have been processed properly.</li>
					</ul>

					<a name="uses"></a><h4>System composition</h4>
					<ul>
						<li>2 transmitter or receiver units, housing either in polycarbonate (or aluminium, as an option).</li>
						<li>IP65 waterproof housing can be installed outside or inside buildings may also be installed in an electrical cabinet.</li>
						<li>24 or 48 V AC/DC power supply (powered by batteries also possible).</li>
						<li>Unit supplied with fixing screws and rubber bushing.</li>
						<li>Omni-directional antenna fixed inside the housing, no particular installation requirements, i.e. not sensitive to the presence of a metal mass in the propagation field.</li>
						<li>Option to connect several transmitters and receivers together to create a network.</li>
						<li>Option : Receiver type RCB 7000, can be inter connected with Profibus, Ethernet, CAN bus or any other fieldbus connection to the PLC customer application.</li>
					</ul>

					<a name="uses"></a><h4>Mechanic and electric specifications</h4>
					<h6>Transmitter/receiver</h6>
					<ul>
						<li>Housing size : 220x270x90 mm (antenna and silent blocs not included).</li>
						<li>Electrical protection level: IP65.</li>
						<li>Weight : 1.5kg.</li>
						<li>Temperature working range: from -20° to + up to 55°.</li>
						<li>Feeding power 24 or 48 AC/DC or 12VDC ( optional).</li>
						<li>Input digital opt coupled (from 12or 24V AC or DC) of free of potential or trough isolated feeder foreseen for this application.</li>
						<li>Output Digital 8A(resistance),250 VAC max.</li>
						<li>Input/output analog, 0/10V, 4/20mA, 0/20mA</li>
						<li>RCB 7000 system is also able to translate data ( ex 0/10Vto 4/20mA, 0/5Vto RS232, ...)</li>
					</ul>
					<h6>Radio modem</h6>
					<ul>
						<li>UHF(433,125 to 434,750 MHz)64 Channels programmable by PC.</li>
						<li>Power : less then 10mW( distance transmission from 100m to 500 m and depending to the environment).</li>
						<li>Modulation FM or FSK.</li>
						<li>Transmission codes: Address 32 bits and CRC 16 bits.</li>
					</ul>
				</div>
			</div>
 <?php include 'footer.php';?>
