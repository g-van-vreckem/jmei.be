<?php
	include 'common.php';
	$title = 'JMei - RCB7000 - Transmission de données industrielles';
	$description .= '';
	$keywords .= '';

	$pageId = 'RCB7000';
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a><h3>Module de transmission industrielle de type RCB7000</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-RCB7000/rcb7000_1.jpg" alt="RCB7000 Transmission industrielle" />
						</div>
					</div>
					<p></p>		
					<p><a href="<?php echo Site::relativeUrl('RCB7000.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>

					<a name="features"></a><h4>Caractéristiques</h4>
					<p>Les équipements de transmission sans fil JMei permettent de transmettre tous types de signaux digitaux ou analogiques sur des distances <strong>pouvant atteindre 5000m</strong>, et permettent  ainsi de réduire fortement tous types de câbles de contrôle ou de mesure entre appareils et PLC/Automate ou entre appareils eux-mêmes.
Les modules RCB7000 permettent aussi d’échanger les signaux du type RS232 ou 485 ou autres
.</p>

					<a name="specifications"></a><h4>Spécifications</h4>
					<img src="../img/product-RCB7000/rcb7000_2_en.gif" alt="RCB7000 transmission unidirectionnelle ou bidirectionnelle - Multicanaux, fréquence industrielle" />
                    
<p>Le système de base RCB7000 est composé d’un boîtier émetteur et d’un boîtier récepteur, ces appareils permettent d’envoyer ou de recevoir par radio fréquence tous types de signaux soit tout-ou-rien, mais aussi les signaux analogiques.
                      <br>
                  Ces modules radio peuvent communiquer en mode unidirectionnel mais aussi en mode bidirectionnel tout en utilisant une seule fréquence (technologie basée sur un tranceiver). </p>
					<p>Les modules de transmission emploient une technologie basée sur notre longue expérience dans ce domaine (+/- 15ans), cad éprouvée dans <strong>des milieux industriels tels que par exemple les sidérurgies, les fonderies, et/ou l’environnement électromagnétique peut être très perturbant</strong>.<br />
				  Ils travaillent soit dans la bande de fréquence 434MHz ou 868MHz (fréquence libre de droit pour l’utilisateur) tout en utilisant une puissance de faible niveau (inf. à 10mW) et ceci afin de ne <strong>pas perturber les autres applications radiocommandées installées sur le site du client</strong>.</p>
					
					<a name="uses"></a><h4>Applications</h4>
<ul>
						<li>Transmission à distance sans câblage de tous types signaux analogiques de mesure, par exemple poids, pression, température, vitesse, ou autres vers un PC Central ou automate de gestion.</li>
						<li>Transmission d'informations vers tout types d'afficheurs.</li>
						<li>Transmission de tous signaux TOR ou digitaux, par exemple position d’engins mobiles, zonage de ponts roulants ou tous engins mobiles, commande de machine à distance pompes, moteurs ou autres, transmission d’information entre un engin mobile (Clark, chargeur sur pneus) et un poste fixe.</li>
					</ul>

					<a name="uses"></a><h4>Fiabilisation du transfert, sécurité d’utilisation</h4>
					<p>Les modules JMei/RCB6000 sont pourvus de dispositifs et de codes de contrôle développés afin de garantir une très grande fiabilité quant aux perturbations ou coupures pouvant provenir d’autres sources de radiofréquences installées sur le site et par les moyens suivants:</p>
					<ul>
					  <li>Adresse identifiante du récepteur et de l’émetteur codées JMei (codage 32 Bits).</li>
						<li>Codage de la trame envoyé par code 16 bits CRC.</li>
						<li>Relecture permanente par protocole interne et vérification des messages.</li>
						<li>En cas de perturbation, le canal de transmission peut facilement être reprogrammé par PC sur site, 64 canaux sont possibles.</li>
						<li>En mode bidirectionnel, il existe aussi la possibilité de vérifier si les signaux de contacts TOR ont bien été exécutés.</li>
					</ul>

					<a name="uses"></a><h4>Composition du système</h4>
					<ul>
						<li>2 boîtiers émetteur ou récepteur en  polycarbonate (ou aluminium, en option).</li>
						<li>Protection étanchéité  IP65, pouvant être placé à l’extérieur ou à l’intérieur de bâtiments, possibilité d’installation en armoire électrique aussi prévue.</li>
						<li>Alimentation 24 ou 48 V AC/DC, (alimentation par batteries disponible).</li>
						<li>Boîtier prévu avec vis de fixation et silent bloc.</li>
						<li>Antenne omnidirectionnelle  qui ne nécessite pas de précaution particulière pour son installation et insensible à la présence de masse métallique dans le champ de propagation.</li>
						<li>Possibilité de coupler plusieurs boîtiers émetteur récepteur entre eux  afin de constituer un réseau .</li>
						<li>Option : Au niveau du module récepteur, une communication vers l’application client et du type Ethernet ou Profibus ou tout autre bus de terrain est possible.</li>
					</ul>

					<a name="uses"></a><h4>Références pour ce type d’équipements</h4>
					<p>Ce type d’équipement a déjà été installé récemment chez :  Arcelor Mittal, Riva Sidérurgie, Manoir industrie, Asco Métal, Burgo Ardenne, SAM Neuvemaison, Iton seine, Industrie automobile groupe Peugeot/SA, Glaverbel, Sidmar Gent, Airbus industrie, Caterpillar, SNCF.</p>
				</div>
			</div>
 <?php include 'footer.php';?>
