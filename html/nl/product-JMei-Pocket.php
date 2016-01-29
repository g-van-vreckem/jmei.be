<?php
	include 'common.php';
	$title = 'JMei - Télécommande industrielle compacte - Radio télécommande RF';
	$description = 'Commande à distance économique et légère, JMei radio pocket. La commande industrielle à petit prix, ultra-compacte';
	$keywords = 'JMei,Télécommande industrielle compacte,Radio télécommande RF,télécommande,applications de manutention,grues,dépanneuses,camions de pompe à béton,équipement de levage,machines de construction,barrières d\'accès,émetteur compact,récepteur à commandes intégrées,systèmes radio,autorisation d\'accès,Récepteur avec commandes intégrées,Remorques,Treuils,Hydraulique,Contrôle industriel,Porte,barrière d\'accès industriel';
	$pageId = 'JMPOCKET';
	$swiper = new Medias('/img/product-JMPOCKET/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
			<div class="row">
<?php include 'product-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<h3>Compacte industriële afstandsbediening - JMei Pocket</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('POCKET.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Downloaden in pdf-formaat</a></p>
					<p> <a href="<?php echo Site::relativeUrl('POCKET-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Raadpleeg de technische productinformatie</a></p>  
					<a id="description"></a>
					<h4>Beschrijving</h4>
						<p>De afstandsbediening JMei Pocket kan gebruikt worden als standaardvoorziening voor verschillende laad- en losinrichtingen zoals kranen, takelwagens, vrachtwagens met betonpompen, hijsinrichtingen, bouwmachines, slagbomen, enz.</p>
						<p>De compacte zender heeft een ergonomisch ontwerp voor betere operationele prestaties en extra veiligheid.</p>
						<p>De ontvanger met ingebouwde bedieningen biedt een oplossing in afwezigheid van de zender (verloren of beschadigd).</p>
						<p>Het toetsenbord van de ontvanger kan beschermd worden met een wachtwoord.<br>De automatische selectie van het frequentiekanaal voorkomt interferentie met andere radiosystemen.<br>Er kunnen meerdere zenders gekoppeld worden aan één enkele ontvanger, een groot voordeel bij gebruik voor toegangscontrole.</p>
					<a id="avantages"></a>
                  <h4>Voordelen</h4>
					<ul>
						<li>Ontvanger met ingebouwde bedieningen.</li>
						<li>Automatische selectie van frequentiekanalen.</li>
						<li>Snelle koppeling van zenders.</li>
						<li>Mogelijkheid voor gebruik van een wachtwoord.</li>
						<li>Snel en gemakkelijk te installeren.</li>
						<li>Ergonomisch - licht.</li>
						<li>Heel concurrentieel.</li>
					</ul>                          
					<hr>
					<a id="applications"></a>
					<h4>Toepassingen</h4>
					<ul>
						<li>Aanhangwagens.</li>
						<li>Boslieren.</li>
						<li>Hydraulica.</li>
						<li>Industriële controle.</li>
                      <li>Industriële toegangspoorten/-slagbomen.</li>
					</ul>                  
                  <hr>									
                  <a id="réalisations"></a>
					<h4>Voorbeelden van uitvoeringen</h4>                       
					<div class="row">
						<div class="span3">
							<h6>JMei Pocket - riemclips</h6>
							<img src="../img/product-JMPOCKET/pocket_bot1.jpg" alt="Télécommande JMei">
						</div>
						<div class="span3">
							<h6>Ultracompacte zender</h6>
							<img src="../img/product-JMPOCKET/pocket_bot2.jpg" alt="Télécommande industrielle de poche">
						</div>
						<div class="span3">
							<h6>Bescherming in silicone</h6>
							<img src="../img/product-JMPOCKET/pocket_bot3.jpg" alt="Radiocommande industrielle">
						</div>                                                
					</div>
					<div class="row">
						<div class="span3">
							<h6>Compacte ontvanger</h6>
							<img src="../img/product-JMPOCKET/pocket_bot4.jpg" alt="Récepteur radiocommande">
						</div>
						<div class="span3">
							<h6>Universele set voor radiobesturing</h6>
							<img src="../img/product-JMPOCKET/pocket_bot5.jpg" alt="Boîte à boutons industrielle">
						</div>						
						<div class="span3">
							<h6>Ontvanger met toegangscode</h6>
							<img src="../img/product-JMPOCKET/pocket_bot6.jpg" alt="Télécommande industrielle sécurisée">
						</div>                        
					</div>                     
				</div>
			</div>
 <?php include 'footer.php';?>
