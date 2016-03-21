<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';

	$pageId = 'RCB6000';
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a><h3>RCB6000-type industrial transmission module</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-RCB6000/rcb6000_1.jpg" alt="RCB6000 Transmission industrielle" />
						</div>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB6000.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Download PDF</a></p>

					<a name="features"></a><h4>Characteristics</h4>
					<p>JMei wireless transmission equipment enables all types of digital or analogue signals to be transmitted over distances <strong>of up to 5000m</strong>, and thus allow for significant reductions in all types of control or measurement cables between devices and PLC/automatic control system or between the devices themselves.
RCB6000 modules also enables RS232 or 485 type signals or other to also be exchanged.</p>
					<p>Furthermore, JMei/ RCB 6000 modules are designed with <strong>a processor card that includes two microcontrollers that each relay messages continuously</strong> and which thus provide greater security in the event of system failure.
                      <br>
                  In effect these two microcontrollers are acting simultaneously on an emergency stop relay mounted on the processor card and which instantly cut all possible signal exchanges.</p>

					<a name="specifications"></a>
					<h4>Spécifications</h4>
					<img src="../img/product-RCB6000/rcb6000_2_en.gif" alt="RCB6000 transmission unidirectionnelle ou bidirectionnelle - Multicanaux, fréquence industrielle" />
					<p>The BCR6000 base system is composed of a transmitter unit and a receiver unit; these devices allow all types of signals to be sent or received by radio frequency, whether binary, or also analogue signals.
                      <br>
                  These radio modules can communicate in uni-directional mode but also in bi-directional mode while using a single frequency (technology based on a transceiver).</p>
					<p>The transmission modules employ a technology based on our long experience in this area ( + /- 15 years), that is, proven within <strong>industrial environments such as. for example, steel plants, foundries, and areas where the electromagnetic environment can be very disturbing</strong>.<br />
				  They work either in the 434MHz or 868MHz frequency band (frequency that is rights-free for the user) while using low-level power (less than 10mW), in order <strong>not to disrupt the other radio control applications installed on the customer's site</strong>.</p>
					
					<a name="uses"></a><h4>Applications</h4>
					<ul>
						<li>Wireless remote transmission of all types of analogue measurement signals, e.g. weight, pressure, temperature, speed, or other to a central PC or management PLC. </li>
                        <li><strong>Secure wireless communication between mobile machines, provided with emergency stop transmission</strong>. </li>
                        <li>Transmission of information to all types of displays. </li>
                        <li>Transmission of all binary or digital signals, for example the position of mobile machinery, zoning of travelling cranes or all mobile machinery, machine remote control of pumps, motors or other, transmission of information between mobile equipment (Clark, charger on tyres) and a fixed work station.</li>
					</ul>

					<a name="uses"></a><h4>Making transfer reliable, safety of use</h4>
					<p>JMei/RCB6000 modules are fitted with devices and control codes developed in order to ensure very high reliability with respect to disturbances or cuts that can originate from other sources of radio frequencies installed on the site and by the following means:</p>
					<ul>
						<li>Identifying address of the receiver unit and the JMei programmed transmitter (32-bit encoding). </li>
                        <li>Encoding of the frame sent by 16-bit CRC code </li>
                        <li>Continuous re-reading through internal protocol and message checking. </li>
                        <li>In the event there is disturbance, the transmission channel can easily be reprogrammed by PC on site - 64 channels are possible. </li>
                        <li>In bidirectional mode, there is also the possibility of checking if the binary switch signals have been executed. </li>
                        <li>Enhanced security: the set of output relays is controlled by two independent microprocessors which interact with each other and check that they are operating properly. In the event of a failure or malfunction of one of them, the system is placed in safety mode and awaits a new start-up coming from the transmitter.</li>
					</ul>

					<a name="uses"></a><h4>Composition of the system</h4>
					<ul>
						<li>2 transmitter or receiver units made of polycarbonate (or aluminium, as an option). </li>
                        <li>IP65 sealing protection, which can be placed on the outside or on the inside of buildings, can also be installed in electrical cabinets. </li>
                        <li>24 or 48 V AC/DC power supply, (battery power supply available). </li>
                        <li>Housing provided with fixing screws and silent block. </li>
                        <li>Omni-directional antenna that does not require special precautions for its installation and insensitive to the presence of metal mass in the flow field. </li>
                        <li>Multiple transmitter/receiver units can be coupled to each other in order to make up a network . </li>
                        <li>Option: at the receiver unit module, communication to the client application and of an Ethernet or Profibus or any other fieldbus type is possible.</li>
					</ul>

					<a name="uses"></a><h4>References for this type of equipment</h4>
					<p>This type of equipment has already been installed recently at: Arcelor Mittal, Riva Sidérurgie, Manoir Industrie, Asco Métal, Burgo Ardenne, SAM Neuvemaison, Iton seine, Automotive Industry: Peugeot/SA group, Glaverbel, Sidmar Gent, Airbus  industrie, SNCF.</p>
				</div>
			</div>
 <?php include 'footer.php';?>
