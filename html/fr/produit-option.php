<?php
	include 'common.php';
	$title = 'JMei - Clé mémoire - Démarrage sécurisé - Système tandem';
	$description = 'Options pour les radiocommandes JMei. Clé mémoire émetteur, système de sécurité, coordination d\'équipements';
	  $keywords = 'Clé mémoire,adresse émetteur,clé d\'identification,adresses fréquences stand-by paramétrables,clé d\'identification hardware,mémoire de la radiocommande,émetteur de réserve,démarrage sécurisé,TCA27,système de sécurité,système tandem';
	$pageId = 'OPTION';
	$swiper = new Medias('/img/product-option/swiper/');		
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Options disponibles pour vos radiocommandes JMei</h3>
					<div class="row">
<?php echo $swiper->html; ?>                     
					</div>
					<p></p>                
					<p><a href="<?php echo Site::relativeUrl('KEY.pdf');?>" class="btn btn-success btn-large"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<hr>
<a href="#hardkey">Clé hardware <i class="icon-hand-down"></i></a><br>
<a href="#TCA27">Démarrage sécuritaire <i class="icon-hand-down"></i></a><br>
<a href="#tandem">Commande de systèmes complexes <i class="icon-hand-down"></i></a>
					<hr>                  
					<a class="anchor" id="hardkey"></a>
					<h3>Clé hardware</h3>    
						<a id="clef-description"></a>                
						<h4>Description</h4>
							<p>Toutes les émetteurs de la gamme des radiocommandes JMei sont paramétrables en adresses, fréquences et stand-by par leurs manipulateurs.<br>
							Ces données mémoire peuvent être modifiées aisément par le personnel de maintenance dans le cas de permutation ou remplacement d'un émetteur (en cas de panne ou de casse).</p>
					<p>Afin de simplifier ces opérations et de minimiser les interventions de la maintenance, <strong>les paramètres essentiels de fonctionnement (adresse, fréquence, stand-by, ...) peuvent être inscrits dans une "clé d'identification hardware", véritable clé mémoire de la radiocommande</strong>.</p>
					<p>Cette mémoire externe, amovible, est aisément interchangeable par l'opérateur et est unique pour un engin donné.</p>
					<p>En cas de défaillance d'un émetteur, l'opérateur peut retirer aisément (dévisser sans outillage spécialisé), la clé d'identification et la replacer sur l'émetteur de secours. L'ensemble des paramètres de l'engin concerné sera transféré dans l'émetteur de réserve ainsi configuré et prêt à être utilisé. De plus, cette clé est <strong>placée sur chaque type d’émetteur JMei en un endroit protégé (contre les risques de casses) mais facile d’accès</strong>.</p>
						<a id="clef-avantages"></a>                
						<h4>Avantages</h4>
							<ul>
								<li>Permet d’échanger un émetteur de travail par un émetteur de réserve rapidement et par un personnel non qualifié.</li>
								<li>Permet de sécuriser une application avec un émetteur défini par la clé d’identification.</li>
								<li>Clé robuste, placée en un endroit protégé contre les casses éventuelles.</li>
						</ul>
					<div class="row">
						<div class="span3">
							<h6>Clé mémoire pour boîte à boutons RCB90</h6>
							<img src="../img/product-option/key_bot1.jpg" alt="Clé mémoire pour boîte à boutons RCB90">
						</div>
						<div class="span3">
							<h6>Clé mémoire pour radiocommande RCB3000</h6>
							<img src="../img/product-option/key_bot2.jpg" alt="Clé mémoire pour radiocommande RCB3000">
						</div>
						<div class="span3">
							<h6>Clé mémoire pour radiocommande RCB1000</h6>
							<img src="../img/product-option/key_bot3.jpg" alt="Clé mémoire pour radiocommande RCB1000">
						</div>                                                
					</div>                        
					<hr> 
					<a class="anchor" id="TCA27"></a>
					<h3>Démarrage sécuritaire</h3>    
						<a id="tca27-description"></a>                
						<h4>Description</h4>
<p>Le système JMei/TCA27 permet d’accroître considérablement la sécurité lors de la commande d’engins dangereux.</p>
<p>Un accident typique qui peut se produire lors de l’utilisation d’une radiocommande est l’emploi d’un émetteur qui ne correspond pas (qui n’est pas appareillé) au pont roulant, grue ou tout type d’application radiocommandée, c'est-à-dire que <strong>l’opérateur peut par inadvertance confondre un émetteur avec un autre</strong>.</p>
<p>Il est dès lors recommandé d’équiper ces radiocommandes d’un système nommé aussi, <strong>clé de prise en main</strong> qui permet au démarrage du système d’assurer à 100% une correspondance émetteur, récepteur, application.</p>
<p>JMei a <strong>développé et breveté un équipement (TCA27)</strong> unique qui permet d’assurer toutes les fonctions de sécurité de la clé de prise en main <strong>sans pour autant devoir utiliser une source infrarouge</strong>.</p><br>
<p>Le système TCA27 consiste en l’installation d’une balise lumineuse composée de 4 diodes de 4 couleurs différentes (rouge, jaune, bleu et vert) en un endroit visible et dans l’environnement proche de l’application (pont roulant, grue ou autre).</p>
<p>Cette balise est <strong>commandée par la radiocommande sur la même fréquence et adresse</strong> que pour les autres fonctions de celle-ci.</p>
<p>Au démarrage de la radiocommande, la balise génère un code couleur composé de 2 couleurs, <strong>ce code est aléatoire c’est-à-dire qu’il sera différent à chaque démarrage.
</strong>.</p>
<p>Sur l’émetteur, 4 touches de fonction standard sont cependant pourvues des couleurs rouge, jaune, bleue et verte. L’opérateur confirme donc la couleur vue sur la balise successivement par pression sur la touche correspondante de l’émetteur, l’opération de validation des deux couleurs aléatoires peut prendre 5 secondes au maximum.</p>
<p>Le code aléatoire de 2 couleurs est tout a fait suffisant pour la majorité des applications, mais JMei peut aussi configurer le système pour une confirmation d’un code de 3 couleurs ou quatre si le besoin s’en faisait sentir.</p>
						<a id="tca27-avantages"></a>                
						<h4>Avantages</h4>
					<ul>
						<li>Pas d’interférences possibles avec d’autres sources électromagnétiques, la fréquence utilisée par le système de démarrage est identique à celle employée pour les autres fonctions de la radiocommande.</li>
						<li>Système totalement insensible à l’environnement industriel où est placée la radiocommande.</li>
						<li>Pas de maintenance de capteur ou autres appareils servant à capter une source lumineuse placée sur le
pont roulant et qui doit servir à la clé de démarrage.</li>
						<li>Pas de câblage compliqué, la balise est placée dans l’environnement proche du récepteur.</li>
						<li><strong>Le système de démarrage JMei peut même être placé sur des radiocommandes qui ne seraient pas de fabrication JMei.</strong></li>
					</ul>
					<div class="row">
						<div class="span3">
							<h6>RCB90 - Démarrage sécurisé</h6>
							<img src="../img/product-option/tca27_bot1.jpg" alt="Démarrage sécurisé pour radiocommande">
						</div>
						<div class="span3">
							<h6>RCB3000 - Démarrage sécurisé</h6>
							<img src="../img/product-option/tca27_bot2.jpg" alt="Sécurité de télécommande industrielle">
						</div>
						<div class="span3">
							<h6>RCB1000 - Démarrage sécurisé</h6>
							<img src="../img/product-option/tca27_bot3.jpg" alt="Sécurité de radiocommande industrielle">
						</div>                                                
					</div>                    
					<hr>
					<a class="anchor" id="tandem"></a>
					<h3>Commande de systèmes complexes</h3>    
						<a id="tandem-description"></a>                
						<h4>Description</h4>
				  <p>Ce système permet la commande simultanée de deux engins (par exemple : ponts roulants) par un seul émetteur. Ceci permet le transport de longues charges en toute sécurité. Avec l’option « bidirectionnel » le système assure également la gestion des fins de course rendant ainsi le couplage très sécuritaire.</p>
					<p><strong>Fonctionnement "seul"</strong><br>
					  Soit le pont "maître" commandé par l'émetteur "maître".
Soit le pont "esclave" commandé par l'émetteur "esclave".
Dans ce mode de fonctionnement les ponts sont indépendants et travaillent sur deux fréquences séparées.</p>
				  <p><strong>Fonctionnement "tandem"</strong><br>
					  Soit l'émetteur "esclave" éteint.
Soit l'émetteur "maître" démarré avec le mode "Tandem" activé (ce mode s'active via une combinaison simple de touches au démarrage de l'émetteur; ceci pour éviter toute activation non-intentionnelle).<br>
Dans ce mode de fonctionnement, les deux ponts sont pilotés par l'émetteur "maître".
<br>
L'émetteur maître est pourvu d'un sélecteur 1, 1+2, 2 qui permet de choisir quel pont est piloté : le "maître" (1), l' "esclave" (2) ou les deux simultanément (1+2).
<br>
La fréquence de travail est alors unique pour les deux ponts et est celle du "maître".
<br>
L'activation du pont esclave par les deux émetteurs simultanément est impossible.
<br>
Lorsqu’un pont est piloté par l'émetteur "maître" mais n'est pas sélectionné par le sélecteur 1,1+2,2 seul le contacteur général reste enclenché. La commande "klaxon" reste toutefois active.				  </p>
				  <p>Diverses variantes de "prise en main" du pont "esclave" sont possibles:</p>
					<ul>
					  <li>Extinction de l'émetteur "esclave" (système standard).</li>
						<li>Autorisation préalable par l'émetteur "esclave" puis extinction de celui-ci.</li>
						<li>Autorisation préalable par l'émetteur "esclave" ce dernier restant allumé et son arrêt de sécurité est alors actif sur les deux ponts!</li>
					</ul>
					<p>Le système "Tandem" présenté ici peut être réalisé avec 2, 3 ou 4 engins simultanément. <br>
				    Dans ce cas, les ponts sont activés deux-à-deux (ponts contigus) ou tous ensemble.</p>
				  <p>Le système peut être avantageusement complété par l'option "bidirectionnel" qui permet le dialogue entre les récepteurs (et éventuellement entre les émetteurs).
Dans ce cas, les fins de course des différents ponts peuvent être raccordées aux récepteurs correspondants et transmises vers l'autre pont. En mode "Tandem" avec les deux ponts actifs en même temps (sélecteur en 1+2), les fins de course du deuxième pont agissent sur le premier et inversement. Ceci permet par exemple de stopper la translation des DEUX ponts lorsque l'un des ponts arrive en fin de course. Ce système permet également la gestion conjointe des limiteurs de charge. Avec cette option, les deux ponts sont accouplés "logiquement" pour ne plus former qu'un seul et ce, en toute sécurité.</p> 
						<a id="tandem-avantages"></a>                
						<h4>Avantages</h4>
							<ul>
								<li>Permet d’échanger un émetteur de travail par un émetteur de réserve rapidement et par un personnel non qualifié.</li>
								<li>Permet de sécuriser une application avec un émetteur défini par la clé d’identification.</li>
								<li>Clé robuste, placée en un endroit protégé contre les casses éventuelles.</li>
						</ul>
					<div class="row">
						<div class="span3">
							<h6>Radiocommandes multi-émetteurs</h6>
							<img src="../img/product-option/tandem_1.jpg" alt="Radiocommandes multi-émetteurs">
						</div>
						<div class="span3">
							<h6>Radiocommandes multi-récepteurs</h6>
							<img src="../img/product-option/tandem_2.jpg" alt="Radiocommandes multi-récepteurs">
						</div>
						<div class="span3">
							<h6>Radiocommandes en réseau</h6>
							<img src="../img/product-option/tandem_3.jpg" alt="Radiocommandes en réseau">
						</div>                                                
					</div>                        
				</div>
 <?php include 'footer.php';?>
