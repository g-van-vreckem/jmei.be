<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	$pageId = 'RCB700';
	$swiper = new Medias('/img/product-RCB700/swiper/');
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Radiobesturing RCB700</h3>
					<div class="row">
<?php echo $swiper->html; ?>                        
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RCB700.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Downloaden in pdf-formaat</a></p>

					<a id="description"></a>
					<h4>Beschrijving</h4>
						<p>Zender type knoppendoos met beveiliging voor uitstekende prestaties, bestemd voor bediening van allerlei industriële machines.<br>De RCB700 is een kwalitatieve, draadloze afstandsbediening die naar wens geconfigureerd kan worden. <br>Uitgevoerd in een bijzonder robuuste aluminium behuizing. Talrijke mogelijkheden.</p>
						<p>De grootte van de behuizing is moduleerbaar en aanpasbaar volgens de wensen van de klant.</p>
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
						<li>Barcodelezer.</li>
						<li>Identificatiestick (voor snelle vervanging van een beschadigde zender).</li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Meer info...</a></p> 
					</ul>  
					<a id="accessoires"></a>
					<h4>Accessoires</h4>
					<ul>
						<li>Beschermhoes.</li>
						<li>Lader met microprocessor naar een ontwerp van JMei.</li>
						<li>Riemclip.</li>
                      <li>Laadstation.</li>
						<li>ntvanger type RECB of RCB7000, mogelijkheid tot verbinding met Profibus, Ethernet, Canbus, Profinet of een andere veldbus.</li>
						<p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Meer info...</a></p> 
					</ul>	
					<hr>
					<a id="applications"></a>
					<h4>Toepassingen</h4>
					<ul>
						<li>Uitsleepmachine.</li>
						<li>Pomp.</li>
						<li>Zaag.</li>
						<li>Landbouwmachines.</li>
						<li>Bosbouwmachines.</li>
						<li>Uitrustingen van de staalindustrie.</li>
					</ul>                  
                  <hr>					                    									
                  <a id="réalisations"></a>
					<h4>Voorbeelden van uitvoeringen</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Afstandsbediening met feedback</h6>                            
							<img src="../img/product-RCB700/rcb700_bot1.jpg?v=1" alt="Télécommande avec scanner">    
						</div>
						<div class="span3">
							<h6>Radiobesturing met barcodelezer</h6>
							<img src="../img/product-RCB700/rcb700_bot2.jpg" alt="Radiocommande avec lecteur code-barres">
                         <p><a href="<?php echo Site::relativeUrl('SCAN.pdf');?>">Raadpleeg de technische productinformatie</a></p>
						</div>
						<div class="span3">
							<h6>Afstandsbediening voor bosbouw (boslierbediening)</h6>
							<img src="../img/product-RCB700/rcb700_bot3.jpg?v=1" alt="télécommande forestière pour treuil">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Afstandsbediening op maat</h6>
							<img src="../img/product-RCB700/rcb700_bot4.jpg" alt="Télécommande sur-mesure">
						</div>
						<div class="span3">
							<h6>Radiobesturing met grafisch display</h6>
							<img src="../img/product-RCB700/rcb700_bot5.jpg" alt="Radiocommande avec afficheur graphique">
						</div>						
						<div class="span3">
							<h6>Kwalitatieve noodstop</h6>
							<img src="../img/product-RCB700/rcb700_bot6.jpg" alt="Arrêt d'urgence télécommande">
						</div>                        
					</div>                  
				</div>
			</div>
<?php include 'footer.php';?>
