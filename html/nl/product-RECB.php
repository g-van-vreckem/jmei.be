<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';
	$pageId = 'RECB';
	$swiper = new Medias('/img/product-RECB/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>RECB radio-ontvanger</h3>
					<div class="row">
<?php echo $swiper->html; ?>                    
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RECB.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Downloaden in pdf-formaat</a></p>
					<hr>
					<a id="description"></a>
					<h4>Beschrijving</h4>
<p>Ontvanger voor het volledige assortiment zenders van JMei.</p>
						<p>Deze HF-radio-ontvanger is volledig configureerbaar voor de bediening van industriële machines.</p>
						<p>Met een hoogtechnologisch moederbord met relais en bewezen prestaties, uiterst robuust en geschikt voor alle industriële toepassingen.</p>
						<p>De ontvanger voldoet aan de meest recente normen voor de industrie en is geschikt voor gebruik in de moeilijkste technische zones.</p>
					<a id="avantages"></a>
                  <h4>Voordelen </h4>

	  <li>Al dan niet voorbekabeld.</li>
						<li>Doorzichtig deksel voor een gemakkelijke diagnose.</li>
						<li>22 AON-uitgangen.</li>
						<li>Veiligheidsrelais met geleide contacten voor een noodstop.</li>
						<li>Optionele diagnostische ledlampjes en feedback.</li>
						<li>Lcd-scherm optioneel verkrijgbaar.</li>
						<li>Exclusief systeem voor automatische frequentiewijziging.</li>
					<hr>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Bidirectionele gegevenstransmissie.</li>
						<li>Ondersteuningsmagneet.</li>
						<li>Analoog (0-10V 4-20mA +/- 10V +/-20mA).</li>
						<li>PWM.</li>
						<li>AON-ingangskaart.</li>
						<li>Analoge ingangskaart.</li>
						<li>Verbinding met Profibus, Ethernet, Canbus, Profinet of andere veldbussen.</li>
						<li>Metalen behuizing.</li>
						<li>Kabels met Harting-stekker (of andere stekker).</li>                     
					<hr>
					<a id="applications"></a>
<h4>Toepassingen </h4>
<ul>
	<li>Rolbrug.</li>
						<li>Torenkraan.</li>
						<li>Hydraulische vrachtwagens.</li>
						<li>Speciale inrichtingen.</li>
						<li>Automaten,…</li>
					</ul>
                 <hr>									
                  <a id="réalisations"></a>
					<h4>Voorbeelden van uitvoeringen</h4>                       
					<div class="row">
						<div class="span3">
							<h6>Ontvanger voor radiobesturing</h6>
							<img src="../img/product-RECB/recb_bot1.jpg" alt="Récepeur de radiocommande">
						</div>
						<div class="span3">
							<h6>Ontvanger voor radiobesturing</h6>
							<img src="../img/product-RECB/recb_bot2.jpg" alt="Radiocommande industrielle">
						</div>
						<div class="span3">
							<h6>Ontvanger voor radiobesturing</h6>
							<img src="../img/product-RECB/recb_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                               

 <?php include 'footer.php';?>
