<?php
	include 'common.php';
	$title = 'JMei - RECB - Récepteur radio';
	$description .= '';
	$keywords .= '';

	$pageId = 'RECB';
	include 'header.php';
	include 'nav.php';

?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
					<h3>Récepteur radio de type RECB</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-RECB/recb_1.jpg" alt="JMei RECB, récepteur de télécommande" />
						</div>
					</div>
					<p></p>

					<p><a href="pdf/JMei%20Récepteur.pdf" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<a name="features"></a><h4>Caractéristiques</h4>
					<p>Le récepteur JMei de type &quot;RECB&quot; est prévu pour fonctionner avec l&rsquo;entièreté de la gamme des télécommandes JMei, soit les systèmes RCB90, RCB700, RCB1000, RCB3000, Hélice, RCB6000 et RCB7000.
</p>
					<p>Il est doté des caractéristiques suivantes<em>&nbsp;</em>:</p>
					<ul>
					  <li><strong>22 sorties digitales optocouplées en standard (40 en option)</strong>.</li>
					  <li><strong>8 sorties analogiques</strong>					</li>
					  <li><strong>Relais arrêt de sécurité, à contact guidé.</strong><br>
				      Lecture des messages, analyses, décodages effectués par 2 microcontrôleurs indépendants qui agissent directement sur l&rsquo;arrêt d&rsquo;urgence.					  </li>
					  <li><strong>Jusqu'à 40 entrées digitales optocouplées et 8 entrées analogiques.</strong><br>
				      Le récepteur pouvant être prévu en version bidirectionnelle (le récepteur peut émettre et recevoir  des données et <strong>ceci sur la même fréquence</strong>), il peut transmettre tous types d&rsquo;informations (ex: poids, température, vitesse, débit pression,...) vers l&rsquo;émetteur sous forme d&rsquo;alarmes ou de messages qui seront indiqués par un afficheur LCD, voyant LED, buzzer,..</li>
					  <li><strong>Codage de la transmission: adresse 32bits et CRC 16bits</strong>.</li>
					  <li><strong>Extensions possibles</strong>:<br>
					    Analogique (maxi 16 bits), du type 4-20mA,0-10V,-10V 0 +10V. <br>
				        Analogique 3-6-9V (application tous types hydrauliques, machines forestières, machine génie civil, machine industrielle ou agricole).<br>
				        Analogique 6-12-18V (application machines avec composants hydrauliques). <br>
				        Mode de communication possible entre le récepteur JMei et l&rsquo;application client&nbsp;: RS232/RS485,  Profibus, Ethernet, Can bus, Can open ou tout autre bus de terrain.					    <br>
				        <br>
				        <a name="specifications"></a>				      </li>
				  </ul>
				  <h4>Spécifications</h4>
				  <p>Le récepteur JMei utilise un système de transmission radio synthétisé à haute performance dont la fréquence de travail se situe dans la gamme des 434MHz (64 canaux possibles) ou 868MHz..<br>
Le canal  de transmission peut facilement être reprogrammé (par l&rsquo;émetteur ou par PC) et ceci pour éviter tout risque de perturbations.<br>
Chaque sortie ou entrée est pourvue d'un témoin (LED) permettant la vérification du bon fonctionnement. <br>
Il possède une alimentation isolée galvaniquement, de plus il a été étudié pour être insensible aux chutes de tension ainsi qu'aux microcoupures</p>
				  <h6><strong>Caractéristiques mécaniques et électriques</strong>:</h6>
<ul>
	  <li>		  
		  <h6>Récepteur:</h6>
	  </li>
	  <li>	    Dimensions boîtier : 160 x 240 x 90 mm (dimensions sans antenne et silent blocs)</li>
	  <li>Fixation par 4 silent blocs M6.</li>
	  <li>Protection: IP65</li>
	  <li>Poids: 1.5 Kg</li>
	  <li>Température d&rsquo;utilisation : - 20 °C à + 55 °C</li>
	  <li>Alimentation de 24 à 48V AC/DC ou 12VDC ( option)      </li>
</ul>
<ul>
  <li>
    <h6><strong>Partie radio</strong> :</h6>
    </li>
  <li>UHF (433.125 à 434.750 MHz)– synthétiseur 64 canaux de  fréquence programmable par l'émetteur</li>
  <li>Codage de la transmission: Adresse 32bits et CRC 16bits.</li>
  <li>Puissance : &lt; 10mW</li>
  <li>Modulation : FM&nbsp;: FSK                    </li>
</ul>
<h6>&nbsp;</h6>
<?php if ( SHOW_CERTIFICATION ) : ?>
					<a name="certification"></a>
				  <h4>Certifications</h4>
					<ul>
						<li>EMC: EN61000-6-2 et EN61000-6-4.</li>
                        <li>Safety: EN 60950.</li>
                        <li>Spectrum (R&amp;TTE Directive 1999/5/EC): EN300-220.</li>
					</ul>
<?php endif ?>
				</div>
			</div>
 <?php include 'footer.php';?>
