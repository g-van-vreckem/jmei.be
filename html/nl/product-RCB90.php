<?php
	include 'common.php';
	$title = 'JMei - RCB90 - Boîte à boutons industrielle - Télécommande pour pont roulant';
	$description = 'Télécommande sans fil - boîte à boutons double vitesses pour la commande de pont roulant';
	$keywords = 'RCB90,Boîte à boutons industrielle,Télécommande pour pont roulant,Télécommande sans fil,Radiocommande,Emetteur sécuritaire,usage industriel,Arrêt d\'urgence,Boutons double enfoncement,retour d\'information,émetteur de réserve,Clé d\'identification,Système Tandem,Démarrage sécurisé,Profibus,Ethernet,Canbus,Profinet,bus de terrain,Radio personnalisée,Arrêt d\'urgence haute qualité,Radiocommande industrielle universelle,Pont roulant,Grue tour,Porte industrielle,Pompe,jet d\'eau,JMei';
	$pageId = 'RCB90';
	$swiper = new Medias('/img/product-RCB90/swiper/');
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
<<<<<<< HEAD
					<h3>Radiobesturing RCB90</h3>
=======
					<h3>Radiocommande RCB90</h3>
>>>>>>> origin/master
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
<<<<<<< HEAD
					<p><a href="<?php echo Site::relativeUrl('RCB90.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i>  Downloaden in pdf-formaat</a></p>
					<p> <a href="<?php echo Site::relativeUrl('RCB90-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Raadpleeg de technische productinformatie</a></p>   
				  <a id="description"></a>
					<h4>Beschrijving</h4>
						<p>Zender met beveiliging voor uitstekende prestaties, type knoppendoos voor alles-of-niets-opdrachten (AON).</p>
						<p>De RCB90 is een draadloze afstandsbediening die al meerdere jaren zijn verdienstelijkheid bewijst. De toetsen (knoppen) van de zender zijn tweefasig en geschikt voor bediening van de overeenstemmende relais op de ontvanger.</p>
						<p>De ultracompacte, lichte en uiterst stevige behuizing is gemaakt van verstevigd plastic voor industrieel gebruik. De behuizing is heel ergonomisch en met name geschikt voor veeleisende omgevingen.</p>
						<p>Noodstop type vuistslag voor een maximale veiligheid.</p>
						<p>Verkrijgbaar in 2 versies: 9 knoppen (RCB90L) of 14 knoppen (RCB90M).<a id="avantages"></a>
                  <h4>Voordelen</h4>
					<ul>
						<li>Tweefasige knoppen.</li>
						<li>3 configureerbare knoppen en selectieknoppen met 2 of 3 vaste of terugstelposities.</li>
						<li>Personaliseerbaar voorvlak en opschrift.</li>
						<li>Noodstop type vuistslag van militaire kwaliteit.</li>
						<li>Verwisselbare NiMH-batterij.</li>
                      <li>Optionele diagnostische ledlampjes en feedback.</li>
<li>Exclusief systeem voor wijziging van het adres, de frequentie en de configuratie met knoppen om snel en veilig van zender te veranderen (één reservezender voor verschillende uitrustingen).</li>
=======
					<p><a href="<?php echo Site::relativeUrl('RCB90.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('RCB90-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Consulter la fiche technique</a></p>   
				  <a id="description"></a>
					<h4>Description</h4>
						<p>Emetteur sécuritaire de haute performance de type boîte à boutons conçu pour des commandes en Tout Ou Rien (TOR).</p>
						<p>La RCB90 est une télécommande sans fils éprouvée depuis plusieurs années. Les touches (boutons) de l'émetteur sont à double enfoncement et permettent la commande des relais correspondants sur le récepteur.</p>
						<p>Boîtier ultra compact, léger, très robuste, réalisé en plastique renforcé pour un usage industriel, boîtier très ergonomique, adapté spécialement aux environnements agressifs.</p>
						<p>Arrêt d'urgence coup-de-poing,  garantit une sécurité maximale.</p>
						<p>Disponible en 2 versions: 9 boutons (RCB90L) ou 14 boutons (RCB90M).</p>
					<a id="avantages"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Boutons double enfoncement.</li>
						<li>3 boutons configurables en sélecteurs 2 ou 3 positions fixes ou à rappel.</li>
						<li>Face et inscription personnalisables.</li>
						<li>Arrêt d'urgence coup-de-poing qualité militaire.</li>
						<li>Accumulateur interchangeable NiMH.</li>
                      <li>LED de diagnostic et retour d'information en option.</li>
<li>Système exclusif de changements d'adresse, de fréquence, configuration par les boutons permettant l'interchangeabilité rapide et sécurisante des émetteurs (un seul émetteur de réserve pour  plusieurs équipements).</li>
>>>>>>> origin/master
					</ul>
                  
<?php if ( SHOW_CERTIFICATION ) : ?>
					<a name="certification"></a>
				  <h4>Certifications</h4>
					<ul>
						<li>EMC: EN61000-6-2 et EN61000-6-4</li>
						<li>Safety: EN 60950</li>
						<li>Spectrum (R&amp;TTE Directive 1999/5/EC): EN300-220.</li>
					</ul>
<?php endif ?>
					<hr>
					<a id="options"></a>
<<<<<<< HEAD
                  <h4>Opties</h4>
					<ul>
						<li>Bidirectionele gegevenstransmissie.</li>
						<li>Display.</li>
						<li>Identificatiestick (voor snelle vervanging van een beschadigde zender).</li>
						<li>Tandemsysteem meester/slaaf.</li>
						<li>Beveiligde start TCA27.</li>
						<li>Ontvanger type RECB of RCB7000, mogelijkheid tot verbinding met Profibus, Ethernet, Canbus, Profinet of een andere veldbus.</li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i>Meer info...</a></p> 
=======
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Afficheur.</li>
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
						<li>Système Tandem maître/esclave.</li>
						<li>Démarrage sécurisé TCA27.</li>
						<li>Récepteur type RECB ou RCB7000, possibilité de connexion Profibus, Ethernet, Canbus, Profinet ou autre bus de terrain.</li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
>>>>>>> origin/master
					</ul>  
					<a id="accessoires"></a>
				  <h4>Accessoires</h4>
					<ul>
<<<<<<< HEAD
						<li>Beschermhoes.</li>
						<li>Lader met microprocessor naar een ontwerp van JMei.</li>
						<li>Verwisselbare NiMH-batterij.</li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i>Meer info...</a></p> 
					</ul>					
					<hr>
					<a id="applications"></a>
					<h4>Toepassingen</h4>
					<ul>
						<li>Rolbrug.</li>
						<li>Torenkraan.</li>
						<li>Industriële poorten.</li>
						<li>Pomp, waterstraal.</li>
					</ul>                  
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Voorbeelden van uitvoeringen </h4>
<div class="row">
		<div class="span3">
							<h6>RCB90/L - Knoppendoos met 9 functies</h6>
							<img src="../img/product-RCB90/rcb90_bot1.jpg" alt="Télécommande grue">
						</div>
						<div class="span3">
							<h6>Gepersonaliseerde radiobesturing (kleur van de rolbrug)</h6>
							<img src="../img/product-RCB90/rcb90_bot4.jpg" alt="Télécommande pour pont roulant personnalisée">
						</div>
						<div class="span3">
							<h6>RCB90/M - Knoppendoos met 14 functies</h6>
=======
						<li>Housse de protection.</li>
						<li>Chargeur à microprocesseur de conception JMei.</li>
						<li>Accumulateur interchangeable NiMH.</li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
					</ul>					
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Pont roulant.</li>
						<li>Grue tour.</li>
						<li>Porte industrielle.</li>
						<li>Pompe, jet d'eau.</li>
					</ul>                  
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Exemples de réalisations</h4>                       
					<div class="row">
						<div class="span3">
							<h6>RCB90/L - Boîte à boutons 9 fonctions</h6>
							<img src="../img/product-RCB90/rcb90_bot1.jpg" alt="Télécommande grue">
						</div>
						<div class="span3">
							<h6>Radio personnalisée (couleur du pont roulant)</h6>
							<img src="../img/product-RCB90/rcb90_bot4.jpg" alt="Télécommande pour pont roulant personnalisée">
						</div>
						<div class="span3">
							<h6>RCB90/M - Boîte à boutons 14 fonctions</h6>
>>>>>>> origin/master
							<img src="../img/product-RCB90/rcb90_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
<<<<<<< HEAD
							<h6>Kwalitatieve noodstop</h6>
							<img src="../img/product-RCB90/rcb90_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>
						<div class="span3">
							<h6>Universele industriële radiobesturing</h6>
							<img src="../img/product-RCB90/rcb90_bot2.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Geheugenstick met het adres van de afstandsbediening</h6>
=======
							<h6>Arrêt d'urgence haute qualité</h6>
							<img src="../img/product-RCB90/rcb90_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>
						<div class="span3">
							<h6>Radiocommande industrielle universelle</h6>
							<img src="../img/product-RCB90/rcb90_bot2.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Clé mémoire adresse télécommande</h6>
>>>>>>> origin/master
							<img src="../img/product-RCB90/rcb90_bot6.jpg" alt="Clé mémoire adresse télécommande">
						</div>                        
					</div>                  
				</div>
			</div>
<?php include 'footer.php';?>
