<?php
	include 'common.php';
	$title = 'JMei - Hélice - Télécommande radio forestière - Radiocommande bidirectionnelle';
	$description = 'Radiocommande entièrement personnalisable. Robuste, légère et étanche, cette télécommande aura sa place dans vos applications forestières et agricoles, mine et carrière, génie civile. ';
	$keywords = 'JMei,Hélice,Télécommande radio forestière,Radiocommande bidirectionnelle,Radiocommande entièrement personnalisable,applications forestières et agricoles,mine et carrière,génie civile,Emetteur sécuritaire,boîtier de commandes,télécommande sans fil,Arrêt d\'urgence,Fonctions analogiques,retour d\'information,Ecran LCD graphique,Profibus,Ethernet,Canbus,Profinet,bus de terrain,Levage et manutention,Domaine forestier,Domaine agricole,Génie civil,pompe à béton,Mines et carrières,Radiocommande avec afficheur,Radio télécommande agricole,Radiocommande,bande transporteuse';
	$pageId = 'Helice';
	$swiper = new Medias('/img/product-Helice/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
<<<<<<< HEAD
					<h3>Radiobesturing Helice</h3>
=======
					<h3>Radiocommande Hélice</h3>
>>>>>>> origin/master
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
<<<<<<< HEAD
					<p><a href="<?php echo Site::relativeUrl('Helice.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Downloaden in pdf-formaat</a></p>
					<p> <a href="<?php echo Site::relativeUrl('Helice-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Raadpleeg de technische productinformatie</a></p>   
					<a id="description"></a>
					<h4>Beschrijving</h4>
					<p>Zender met beveiliging en uitstekende prestaties, type minibedieningspaneel of -behuizing voor de bediening van industriële machines.</p>
						<p>De Helice is een kwalitatieve, draadloze afstandsbediening die naar wens geconfigureerd kan worden.<br>Het praktische ontwerp biedt talrijke mogelijkheden voor de bediening van machines.<br>De ultracompacte, lichte en uiterst stevige behuizing is gemaakt van verstevigd plastic voor industrieel gebruik. De behuizing is heel ergonomisch en met name geschikt voor veeleisende omgevingen.</p>
						<p>Noodstop type vuistslag voor een maximale veiligheid.</p>                   
				  <a id="avantages"></a>
                  <h4>Voordelen</h4>
					<ul>
						<li>Tot 20 configureerbare AON-functies.</li>
						<li>Selectieknoppen met vaste of terugstelpositie.</li>
						<li>Standaard drukknop of met controlelampjes.</li>
						<li>Proportionele analoge functies (MAX. 4).</li>
						<li>Personaliseerbaar voorvlak en opschrift.</li>
						<li>Noodstop type vuistslag van militaire kwaliteit.</li>
						<li>Interne NiMH-batterij.</li>
						<li>Optionele diagnostische ledlampjes en feedback.</li>
						<li>Lcd-scherm optioneel verkrijgbaar.</li>
						<li>Exclusief systeem voor wijziging van het adres, de frequentie en de configuratie met knoppen om snel en veilig van zender te veranderen (één reservezender voor verschillende uitrustingen).</li>
					</ul>
					<hr>
					<a id="options"></a>
                  <h4>Opties</h4>
					<ul>
						<li>Bidirectionele gegevenstransmissie.</li>
						<li>Display.</li>
						<li>Identificatiestick (voor snelle vervanging van een beschadigde zender).</li>
						<li>Ontvanger type RECB of RCB7000, mogelijkheid tot verbinding met Profibus, Ethernet, Canbus, Profinet of een andere veldbus.</li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Meer info...</a></p> 
=======
					<p><a href="<?php echo Site::relativeUrl('Helice.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('Helice-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Consulter la fiche technique</a></p>   
					<a id="description"></a>
					<h4>Description</h4>
					<p>Emetteur sécuritaire de haute performance de type mini-pupitre ou boîtier de commandes conçu pour le contrôle de tout engin industriel.</p>
						<p>L'Hélice est une télécommande sans fil configurable à souhait et de grande qualité.<br>Son design très pratique autorise beaucoup de possibilités de commandes de machine.<br>Boîtier ultra compact, léger, très robuste, réalisé en plastique renforcé pour un usage industriel, boîtier très ergonomique, adapté spécialement aux environnements agressifs.</p>
						<p>Arrêt d'urgence coup-de-poing,  garantit une sécurité maximale.</p>                   
				  <a id="avantages"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Jusqu'à 20 fonctions TOR configurables.</li>
						<li>Sélecteurs à rappel ou positions fixes.</li>
						<li>Bouton-poussoir standard ou avec témoins lumineux.</li>
						<li>Fonctions analogiques proportionnelles (4 MAX).</li>
						<li>Face et inscription personnalisables.</li>
						<li>Arrêt d'urgence coup-de-poing qualité militaire.</li>
						<li>Accumulateur interne NiMH.</li>
						<li>LED de diagnostic et retour d'information en option.</li>
						<li>Ecran LCD graphique en option.</li>
						<li>Système exclusif de changements d'adresse, de fréquence, configuration par les boutons permettant l'interchangeabilité rapide et sécurisante des émetteurs (un seul émetteur de réserve pour plusieurs équipements).</li>
					</ul>
					<hr>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Transmission en mode bidirectionnel.</li>
						<li>Afficheur.</li>
						<li>Clé d'identification (remplacement rapide d'un émetteur endommagé).</li>
						<li>Récepteur type RECB ou RCB7000, possibilité de connexion Profibus, Ethernet, Canbus, Profinet ou autre bus de terrain.</li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
>>>>>>> origin/master
					</ul>  
					<a id="accessoires"></a>
					<h4>Accessoires</h4>
					<ul>
<<<<<<< HEAD
						<li>Nylon beschermhoes.</li>
						<li>Lader met microprocessor naar een ontwerp van JMei.</li>
						<li>Verwisselbare NiMH-batterij.</li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Meer info...</a></p> 
					</ul> 
					<hr>
					<a id="applications"></a>
					<h4>Toepassingen</h4>
					<ul>
						<li>Hijswerkzaamheden, laden en lossen.</li>
						<li>Bosbouw.</li>
						<li>Landbouw.</li>                        
						<li>Burgerlijke bouwkunde, betonpompen.</li>
						<li>Mijnbouw en steengroeves.</li>
					</ul>                                        
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Voorbeelden van uitvoeringen</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Radiobesturing met display</h6>
							<img src="../img/product-Helice/helice_bot1.jpg" alt="Radiocommande avec afficheur">
						</div>
						<div class="span3">
							<h6>Radiobesturing voor landbouwtoepassingen</h6>
							<img src="../img/product-Helice/helice_bot2.jpg" alt="Radio télécommande agricole">
						</div>
						<div class="span3">
							<h6>Radiobesturing voor transportband</h6>
=======
						<li>Housse de protection en nylon.</li>
						<li>Chargeur à microprocesseur de conception JMei.</li>
						<li>Accumulateur interchangeable NiMH.</li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
					</ul> 
					<hr>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
						<li>Levage et manutention.</li>
						<li>Domaine forestier.</li>
						<li>Domaine agricole.</li>                        
						<li>Génie civil, pompe à béton.</li>
						<li>Mines et carrières.</li>
					</ul>                                        
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Exemples de réalisations</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Radiocommande avec afficheur</h6>
							<img src="../img/product-Helice/helice_bot1.jpg" alt="Radiocommande avec afficheur">
						</div>
						<div class="span3">
							<h6>Radio télécommande agricole</h6>
							<img src="../img/product-Helice/helice_bot2.jpg" alt="Radio télécommande agricole">
						</div>
						<div class="span3">
							<h6>Radiocommande - bande transporteuse</h6>
>>>>>>> origin/master
							<img src="../img/product-Helice/helice_bot3.jpg" alt="Radiocommande pour bande transporteuse">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
<<<<<<< HEAD
							<h6>Draagriem voor afstandsbediening</h6>
							<img src="../img/product-Helice/helice_bot4.jpg" alt="Ceinture de portage pour télécommande">
						</div>
						<div class="span3">
							<h6>Kwalitatieve noodstop</h6>
							<img src="../img/product-Helice/helice_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>						
						<div class="span3">
							<h6>Nylon beschermhoes</h6>
=======
							<h6>Ceinture de portage pour télécommande</h6>
							<img src="../img/product-Helice/helice_bot4.jpg" alt="Ceinture de portage pour télécommande">
						</div>
						<div class="span3">
							<h6>Arrêt d'urgence haute qualité</h6>
							<img src="../img/product-Helice/helice_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>						
						<div class="span3">
							<h6>Housse de protection en nylon</h6>
>>>>>>> origin/master
							<img src="../img/product-Helice/helice_bot6.jpg" alt="Housse de protection télécommande">
						</div>                        
					</div> 
				</div>
			</div>
 <?php include 'footer.php';?>
