<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	$pageId = 'OPTION';
	$swiper = new Medias('/img/product-option/swiper/');		
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Onze opties</h3>
					<div class="row">
<?php echo $swiper->html; ?>                     
					</div>
					<p></p>                
					<hr>
					<p> <a href="#hardkey" class="btn btn-info btn-mini"><i class="icon-white icon-hand-down"></i>Hardware key</a></p> 
					<p> <a href="#TCA27" class="btn btn-info btn-mini"><i class="icon-white icon-hand-down"></i>Beveiligde start</a></p> 
					<p> <a href="#tandem" class="btn btn-info btn-mini"><i class="icon-white icon-hand-down"></i>Bediening van complexe systemen</a></p> 
					<hr>                  
					<a class="anchor" id="hardkey"></a>
					<h3>Hardware key</h3>    
						<a id="clef-description"></a>                
						<h4>Beschrijving</h4>
							<p>Voor alle zenders van het assortiment radiobesturingen van JMei is het adres, de frequentie en de stand-by configureerbaar.<br>
				  Deze gegevens kunnen gemakkelijk aangepast worden door het onderhoudspersoneel bij verplaatsing of vervanging van een zender (door een defect of beschadiging).</p>
					<p>Om deze handelingen te vereenvoudigen en de noodzaak aan onderhoud te beperken, <strong>kunnen de belangrijkste bedrijfswaarden (adres, frequentie, stand-by, ...) geregistreerd worden op een ‘stick voor hardware-identificatie’, een geheugenstick voor de radiobesturing</strong>.</p>
					<p>Dit externe, afneembare geheugen kan vlot verwisseld worden door de operator en is uniek voor een bepaalde inrichting.</p>
					<p>Wanneer er sprake is van een storing aan een zender, kan de operator gemakkelijk de identificatiestick verwijderen (losschroefbaar zonder speciaal gereedschap) om deze op de reservezender te plaatsen. Alle gegevens van de inrichting in kwestie worden overgebracht naar de reservezender, die meteen geconfigureerd en gebruiksklaar is. Bovendien zit deze stick <strong>bij elk type JMei-zender op een beschermde plaats (om beschadiging te voorkomen) die echter gemakkelijk toegankelijk is</strong>.</p>
						<a id="clef-avantages"></a>                
						<h4>Voordelen</h4>
							<ul>
								<li>Snelle vervanging van een zender door niet-gekwalificeerd personeel. </li>
                                <li>Beveiliging van een toepassing met een bepaalde zender overeenkomstig de identificatiestick. </li>
                                <li>Robuuste stick op een plaats die bescherming biedt tegen mogelijke beschadiging. </li>
					    </ul>
					<div class="row">
						<div class="span3">
							<h6>Geheugenstick voor knoppendoos RCB90</h6>
							<img src="../img/product-option/key_bot1.jpg" alt="Clé mémoire pour boîte à boutons RCB90">
						</div>
						<div class="span3">
							<h6>Geheugenstick voor radiobesturing RCB3000</h6>
							<img src="../img/product-option/key_bot2.jpg" alt="Clé mémoire pour radiocommande RCB3000">
						</div>
						<div class="span3">
							<h6>Geheugenstick voor radiobesturing RCB1000</h6>
							<img src="../img/product-option/key_bot3.jpg" alt="Clé mémoire pour radiocommande RCB1000">
						</div>                                                
					</div>                        
					<hr> 
					<a class="anchor" id="TCA27"></a>
					<h3>Beveiligde start</h3>    
						<a id="tca27-description"></a>                
						<h4>Beschrijving</h4>
<p>Het JMei-/TCA27-systeem verhoogt aanzienlijk de veiligheid bij de bediening van gevaarlijke inrichtingen.</p>
<p>Een typisch ongeval met betrekking tot radiobesturing is het gebruik van een zender die niet overeenstemt (niet gekoppeld is aan) de rolbrug, kraan of andere radiogestuurde toepassing. In dergelijke gevallen kan <strong>de operator ongewild de ene zender met een andere verwarren</strong>.</p>
<p>Het is daarom aanbevolen om de radiobesturing te voorzien van een systeem met <strong>een speciale stick</strong> waarmee men bij het opstarten kan nagaan of de zender, ontvanger of toepassing ermee overeenstemt.</p>
<p>JMei heeft <strong>een unieke voorziening (TCA27) ontwikkeld en gepatenteerd</strong> die alle veiligheidsfuncties van deze stick biedt <strong>zonder gebruik te maken van een infraroodbron</strong>.</p><br>
<p>Het systeem TCA27 bestaat uit de installatie van een rood lichtbaken met 4 dioden in 4 verschillende kleuren (rood, geel, blauw en groen) op een zichtbare plaats in de buurt van de toepassing (rolbrug, kraan enz.).</p>
<p>Dit baken wordt <strong>door de radiobesturing bediend op dezelfde frequentie en hetzelfde adres</strong> van de andere functies ervan.</p>
<p>Bij inschakeling van de radiobesturing genereert het baken een kleurcode met 2 kleuren. <strong>Deze code wordt willekeurig bepaald en zal dus bij elke inschakeling anders zijn</strong>.</p>
<p>Op de zender zijn 4 standaard functieknoppen met een rode, gele, blauwe en groene kleur. De operator bevestigt de kleurcode die het baken weergeeft door op de betreffende knoppen te drukken op de zender. De validatie van de twee willekeurig gekozen kleuren duurt maximaal 5 seconden.</p>
<p>De willekeurige kleurcode volstaat voor de meeste toepassingen, maar JMei kan ook het systeem configureren voor een code met 3 of zelfs 4 kleuren indien nodig.</p>
						<a id="tca27-avantages"></a>                
						<h4>Voordelen</h4>
					<ul>
						<li>Er is geen interferentie mogelijk met andere elektromagnetische bronnen, de frequentie die het startsysteem gebruikt, is identiek aan die voor de andere functies van de radiobesturing. </li>
                        <li>Het systeem is totaal ongevoelig voor de industriële omgeving waarin de radiobesturing geplaatst wordt. </li>
                        <li>Er dient geen onderhoud uitgevoerd te worden aan sensoren of andere apparaten die de lichtbron op de rolbrug moeten detecteren voor de startstick. </li>
                        <li>Er is geen ingewikkelde bekabeling: het baken wordt geplaatst in de omgeving van de ontvanger. </li>
                        <li><strong>Het JMei-startsysteem kan zelfs geplaatst worden op radiobesturingen die niet afkomstig zijn van JMei.</strong></li>
					</ul>
					<div class="row">
						<div class="span3">
							<h6>RCB90 - Beveiligde start</h6>
							<img src="../img/product-option/tca27_bot1.jpg" alt="Démarrage sécurisé pour radiocommande">
						</div>
						<div class="span3">
							<h6>RCB3000 - Beveiligde start</h6>
							<img src="../img/product-option/tca27_bot2.jpg" alt="Sécurité de télécommande industrielle">
						</div>
						<div class="span3">
							<h6>RCB1000 - Beveiligde start</h6>
							<img src="../img/product-option/tca27_bot3.jpg" alt="Sécurité de radiocommande industrielle">
						</div>                                                
					</div>                    
					<hr>
					<a class="anchor" id="tandem"></a>
					<h3>Bediening van complexe systemen</h3>    
						<a id="tandem-description"></a>                
						<h4>Beschrijving</h4>
				  <p>Dit systeem biedt de mogelijkheid om twee inrichtingen (bijvoorbeeld rolbruggen) tegelijk te besturen met één enkele zender. Zo kunnen lange lasten veilig verplaatst worden. Dankzij de optie ‘bidirectioneel’ beheert het systeem ook de eindstand waardoor koppelingen heel veilig verlopen.</p>
					<p><strong>Onafhankelijke werking</strong><br>
				  De ‘meesterbrug’ bestuurd door de ‘meesterzender’, of de ‘slaafbrug’ bestuurd door de ‘slaafzender’. In deze bedrijfsmodus zijn de bruggen onafhankelijk en werken ze op twee afzonderlijke frequenties</p>
				  <p><strong>Tandemwerking</strong><br>
					  Ofwel is de ‘slaafzender’ uitgeschakeld, ofwel start de ‘meesterzender’ met de tandemmodus ingeschakeld (inschakeling met een eenvoudige toetsencombinatie bij inschakeling van de zender om ongewilde activering te vermijden).
In deze bedrijfsmodus worden beide bruggen bestuurd door de ‘meesterzender’
.
<br>
De ‘meesterzender’ is voorzien van een keuzeknop 1, 1+2, 2 om te selecteren welke brug er bestuurd wordt: de ‘meester’ (1), de ‘slaaf’ (2) of de twee tegelijk (1+2).
<br>
De bedrijfsfrequentie is dan voor beide bruggen dezelfde, met name die van de ‘meester’.
<br>
Het is onmogelijk om de ‘slaafbrug’ door beide zenders tegelijk te activeren.
<br>
Wanneer een brug bestuurd wordt door de ‘meesterzender’ maar niet geselecteerd werd met de keuzeknop 1,1+2,2 blijft alleen het algemene relais ingeschakeld. De ‘claxon’ blijft echter actief.				  </p>
				  <p>Er zijn verschillende aanpakken mogelijk voor de ‘slaafbrug’:</p>
					<ul>
						<li>Uitschakeling van de &lsquo;slaafzender&rsquo; (standaardsysteem). </li>
                        <li>Voorafgaande goedkeuring en vervolgens uitschakeling van de &lsquo;slaafzender&rsquo;. </li>
                        <li>Voorafgaande goedkeuring van de &lsquo;slaafzender&rsquo; die ingeschakeld blijft met de veiligheidsstop geactiveerd voor beide bruggen! </li>
					</ul>
					<p>Het tandemsysteem dat hier voorgesteld wordt, is mogelijk met 2, 3 of 4 inrichtingen tegelijk. <br>
			      In dat geval worden de bruggen twee per twee geactiveerd (naast elkaar liggende bruggen) of allemaal samen.</p>
				  <p>Het systeem kan aangevuld worden met de optie ‘bidirectioneel’ om te dialogeren tussen de zenders (en eventueel ook tussen de ontvangers). In dat geval kan de eindstand van de verschillende bruggen verbonden worden aan de betreffende ontvangers en overgebracht worden naar de andere brug. Wanneer beide bruggen in tandemmodus tegelijk geactiveerd zijn (keuzeknop op 1+2), ageert de eindstand van de tweede brug op de eerste en omgekeerd. Zo kan bijvoorbeeld de translatie van BEIDE bruggen gestopt worden wanneer een van beide bruggen de eindstand bereikt. Dit systeem biedt ook de mogelijkheid om de overbelastingzekeringen samen te beheren. Bij deze optie worden de twee bruggen op logisch niveau en in alle veiligheid gekoppeld tot één element.</p> 
						<a id="tandem-avantages"></a>                
						<h4>Voordelen</h4>
							<ul>
								<li>Snelle vervanging van een zender door niet-gekwalificeerd personeel. </li>
                                <li>Beveiliging van een toepassing met een bepaalde zender overeenkomstig de identificatiestick. </li>
                                <li>Robuuste stick op een plaats die bescherming biedt tegen mogelijke beschadiging. </li>
					    </ul>
					<div class="row">
						<div class="span3">
							<h6>Radiobesturing met meerdere zenders</h6>
							<img src="../img/product-option/tandem_1.jpg" alt="Radiocommandes multi-émetteurs">
						</div>
						<div class="span3">
							<h6>Radiobesturing met meerdere ontvangers</h6>
							<img src="../img/product-option/tandem_2.jpg" alt="Radiocommandes multi-récepteurs">
						</div>
						<div class="span3">
							<h6>Radiobesturing in een netwerk</h6>
							<img src="../img/product-option/tandem_3.jpg" alt="Radiocommandes en réseau">
						</div>                                                
					</div>                        
				</div>
 <?php include 'footer.php';?>
