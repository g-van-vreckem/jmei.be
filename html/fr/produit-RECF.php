<?php
	include 'common.php';
	$title = 'JMei - RECF - Récepteur radio sécuritaire - Répéteur de télécommande';
	$description = 'Récepteur radio JMei compact pour bus de terrain. Connunication Modbus, Sérial RS232/485, USB, Ethernet, CANbus, CANopen, Profibus ou Profinet. Arrêt de sécurité certifié.';
	$keywords = 'JMei,RECF,Récepteur radio sécuritaire,Répéteur de télécommande,Récepteur de radiocommande industrielle,récepteur radio HF,commande de tout engin industriel,normes industrielles,Relais de sécurité,arrêt d\'urgence,Modbus,Sérial,USB,Profibus,Ethernet,Canbus,,Canopen,Profinet,bus de terrain,génie civil,nacelle,tracteur,manitou,treuil,débardeuse,locotracteur,pont roulant,pont polaire,presse,locotracteur,engin militaire,données sans fil,Automate';
	$pageId = 'RECF';
	$pageHeaderCss = <<<END
<style>
section {
    margin-bottom: 15px;
    padding: 10px;
    background-color: #FAFAFA;
}

container, hr {
    display: none;
}
img.blog {
margin-bottom: 10px;
}
</style>
END;
	$swiper = new Medias('/img/product-RECF/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'products-solutions-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<section>
					<h3>RECF - Le récepteur radio compact pour bus de terrain</h3>
					<div class="row">
<?php echo $swiper->html; ?>                    
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('RECF.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('RECF-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Consulter la fiche technique</a></p> 
				</section>
				<hr>
				<section>
					<a id="description"></a>
					<h4>Description</h4>
						<p>Récepteur associé à toute la gamme des émetteurs JMei.</p>
						<p>Le récepteur RECF  de JMei est la nouvelle interface de commande idéale pour vos applications embarquées et industrielles.</p>
						<p> Créez votre récepteur RECF sur base des options proposées dans le fiche technique téléchargeable via les liens ci-dessus.</p>
						<p>Répondant aux dernières normes industrielles, le récepteur peut être installé dans les zones techniques les plus contraignantes à tous les niveaux.</p>
				</section>
				<hr>
				<section>
					<a id="avantages"></a>
                  <h4>Avantages</h4>
					<ul>
						<li>Compatible avec tous les émetteurs JMei.</li>
						<li>Nombreux bus disponibles : CANopen, Ethenet/IP, Profibus, Profinet, RS232/485, USB.</li>
						<li>Niveau de performance sécurité élevé certifié (PLd ou PLe).</li>
						<li>Encombrement réduit.</li>
						<li>Indice de protection élevé : boitier et connectique IP66.</li>
						<li>Interface de contrôle et de diagnostic intuitive sur le couvercle.</li>
						<li>Multi-tension : 4.5 à 36VDC.</li>
						<li>Multi-fréquence : gammes 434MHz à 2.4Ghz.</li>
						<li>Sorties relais : 1 relais de sécurité double contacts + 1 relais de fonction.</li>
					</ul>
				</section>
				<hr>
				<section>
					<a id="options"></a>
                  <h4>Applications embarquées</h4>
					<ul>
					  <li>Engin de génie civil : grue, bulldozer, camion, nacelle télescopique…</li>
						<li>Engin agricole : tracteur, machine attelée, Manitou, camion vidange….</li>
						<li>Engin forestier : treuil, débardeuse, Timber Jack, taille haie…</li>
						<li>Engin de manutention : élévateur, plateau transporteur automoteur, camion-grue…</li>
						<li>Engin nautique et aéronautique : bateau télécommandé, sous-marin, drone…</li>
						<li>Engin ferroviaire : locotracteur d’assemblage…</li>
						<li>Engin militaire.</li>
				  </ul>                     
				</section>
				<hr>
				<section>
					<a id="applications"></a>
					<h4>Applications industrielles</h4>
					<ul>
						<li>Pont roulant, pont polaire, presse…</li>
						<li>Process étendu ou dispersé : système d’arrosage, commande de portes….</li>
						<li>Transfert de données sans fil.</li>
						<li>Interface homme-machine (IHM) déportée sécurisée, arrêt d’urgence déporté.</li>
						<li>Automate,…</li>
					</ul> 
				</section>
				<hr>
				<section>
					<a id="réalisations"></a>
					<h4>Exemples de réalisations</h4> 
				</section>                     
					<div class="row">
						<div class="span3">
				<section>
							<h6>Récepteur Fieldbus</h6>
							<img src="../img/product-RECF/recf_bot1.png?v=1" alt="Récepeur Fieldbus">
				</section>
						</div>
						<div class="span3">
				<section>
							<h6>Connecteurs industriels</h6>
							<img src="../img/product-RECF/recf_bot2.png?v=1" alt="Radiocommande industrielle">
				</section>
						</div>
						<div class="span3">
				<section>
							<h6>Quick support RECF </h6>
							<img src="../img/product-RECF/recf_bot3.png?v=1" alt="Radiocommande industrielle">
				</section>
						</div>                                                
					</div>                      
				</div>
			</div>
 <?php include 'footer.php';?>
