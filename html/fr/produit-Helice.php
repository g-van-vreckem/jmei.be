<?php
	include 'common.php';
	$title = 'JMei - Hélice - Radio forestière';
	$description = 'Radiocommande entièrement personnalisable. Robuste, légère et étanche, cette télécommande aura sa place dans vos applications forestières et agricoles, mine et carrière, génie civile. ';
	$keywords = 'Radiocommande hélice,télécommande,commande de machines forestières,commande de machines de construction,boutons à bascule';

	$pageId = 'Helice';
	include 'header.php';
	include 'nav.php';

?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a name="highlight"></a>
					<h3>Radiocommande de type Hélice</h3>
					<div class="row">
						<div class="span4">
							<img class="img-polaroid" src="../img/product-Helice/helice.jpg" alt="Radio Commande Type HELICE" />
						</div>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('Helice.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>

					<a name="features"></a><h4>Caractéristiques</h4>
<p>Boîtier émetteur ultra léger (+/-250g), de taille réduite (140x140x70mm), très robuste, réalisé en matière plastique renforcée, très ergonomique, adapté spécialement aux environnements agressifs et facilement personnalisable.<br>
Alimentation : par batterie interchangeable (autonomie est supérieure à 20h).<br>
Protection par housse en nylon<br>
Les pictogrammes du pupitre émetteur sont gravés et adaptés aux besoins du client et permettent une
excellente visualisation des commandes.</p>
					<a name="uses"></a><h4>Utilisations</h4>
<p>Télécommandes prévues pour de multiples applications industrielles qui nécessitent un appareil robuste et
fiable comme par exemple le domaine du levage et de la manutention, les machines forestière, machines de
construction, pompe à béton. Elle est particulièrement bien étudiée pour toute application dans le domaine
industriel telle que mines et carrières, machines forestières et agricoles.</p>

					<a name="specifications"></a><h4>Spécifications</h4>
					<ul>
					  <li>Gamme de fréquence:  434 MHz (64 canaux) ou 868MHz.</li>
                        <li>Adresses et fréquences paramétrables par les boutons de l'émetteur. Aucune intervention nécessaire sur le récepteur.</li>
                        <li>Puissance d'émission: < 10 mW</li>
                        <li>Modulation: FM : FSK</li>
                        <li>Portée de la radiocommande: 200m</li>
                        <li>Codage de la transmission: adresses 32 bits et CRC 16 bits.</li>
                        <li>Option bidirectionnelle sur 1 seule fréquence.</li>
						<li>Poids et encombrement réduits combinés avec une utilisation très confortable.</li>
						<li>Arrêt d’urgence, type coup-de-poing de sécurité.</li>
						<li>Batterie interchangeable.</li>
						<li>Batterie NiMH à grande autonomie (&gt;20h), sans effet mémoire.</li>
                        <li>Chargeur à micro-contrôleur de conception JMei (temps de charge: 4h).</li>
                        <li>Possibilité d'alimentation fixe en 12 ou 24V DC (en option).</li>
                        <li>Possibilité d'options: <a href="<?php echo Site::relativeUrl('KEY');?>">clé mémoire</a>, <a href="<?php echo Site::relativeUrl('TCA27');?>">démarrage sécurisé</a>, <a href="<?php echo Site::relativeUrl('TANDEM');?>">coordination d'équipements</a>.</li>
                        <li>Récepteur RecB JMei, possibilité de commandes analogiques, digitales, série (RS232 ou RS485) ou bus de terrain (CANOpen, Profibus, Ethernet,...)</li>
						<li>Protection: IP 65.</li>
					</ul>
					<a name="gamme"></a><h4>Gamme</h4>
					<ul>
						<li>Jusqu'à 8 boutons à bascule.</li>
						<li>Possibilité de fonction analogique.</li>
						<li>Possibilité de placer un ou deux sticks uniaxe ou multiaxes.</li>
						<li>Un bouton-poussoir arrêt d’urgence, coup-de-poing.</li>
						<li>Retour d’informations sous forme de témoins LED ou afficheur.</li>
						<li>Toute forme de personnalisation possible.</li>
					</ul>
					<a name="uses"></a><h4>Accesoires et options</h4>
					<ul>
						<li>Housse de protection</li>
						<li>Harnais de portage</li>
						<li><a href="<?php echo Site::relativeUrl('KEY');?>">Clé d’identification</a> : associe l’émetteur au récepteur. Permet une interchangeabilité rapide des émetteurs.</li>
						<li><a href="<?php echo Site::relativeUrl('TCA27');?>">Démarrage sécurisé TCA27</a> : ce système permet le démarrage sécurisé de tout engin. Une séquence lumineuse aléatoire émise par le récepteur doit être encodée à l’émetteur par l’opérateur. L’opérateur doit se trouver dans la zone de visibilité de la balise.</li>
						<li><a href="<?php echo Site::relativeUrl('TANDEM');?>">Systèmes maître/esclave</a></li>
						<li>Afficheur</li>
					</ul>
				</div>
			</div>
 <?php include 'footer.php';?>
