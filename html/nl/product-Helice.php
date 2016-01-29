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
					<h3>Radiobesturing Helice</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
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
					</ul>  
					<a id="accessoires"></a>
					<h4>Accessoires</h4>
					<ul>
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
							<img src="../img/product-Helice/helice_bot3.jpg" alt="Radiocommande pour bande transporteuse">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Draagriem voor afstandsbediening</h6>
							<img src="../img/product-Helice/helice_bot4.jpg" alt="Ceinture de portage pour télécommande">
						</div>
						<div class="span3">
							<h6>Kwalitatieve noodstop</h6>
							<img src="../img/product-Helice/helice_bot5.jpg" alt="Arrêt d'urgence télécommande">
						</div>						
						<div class="span3">
							<h6>Nylon beschermhoes</h6>
							<img src="../img/product-Helice/helice_bot6.jpg" alt="Housse de protection télécommande">
						</div>                        
					</div> 
				</div>
			</div>
 <?php include 'footer.php';?>
