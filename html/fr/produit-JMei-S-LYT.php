<?php
	include 'common.php';
	$title = 'JMei - S-LYT - Télécommande industrielle robuste - Radiocommande 2 vitesses';
	$description = 'Boîte à boutons industrielle haut de gamme, entièrement parsonnalisable, pour des applications industrielles de lavage';
	$keywords = 'JMei,SLYT,Télécommande,Télécommande industrielle robuste,radiocommande,boutons-poussoirs,radiocommande sécuritaire,S-LYT,ergonomique,boutons-poussoirs,émetteur industriel,étanche (IP66),résistant aux saletés,fonctions programmables,S-LYT4,S-LYT8,S-LYT12,canaux programmables,scan automatique des fréquences,I-Chip,boitier IP66,boutons double vitesse,touches personnalisables,tandem,sélecteur rotatif,Pitch & Catch,multi-récepteurs,pont roulant,grue tour,porte industrielle,pompe,bande transporteuse';
	$pageId = 'JMSLYT';
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
	$swiper = new Medias('/img/product-SLYT/swiper/');	
	include 'header.php';
	include 'nav.php';
?>
 			<div class="row">
<?php include 'products-radios-nav.php'; ?>
				<div class="span9">
					<a id="highlight"></a>
					<section>
					<h3>Radiocommande JMei S-LYT</h3>
					<div class="row">
<?php echo $swiper->html; ?>
					</div>
					<p></p>
					<p><a href="<?php echo Site::relativeUrl('S-LYT.pdf');?>" class="btn btn-success btn-small"><i class="icon-white icon-arrow-down"></i> Télécharger le PDF</a></p>
					<p> <a href="<?php echo Site::relativeUrl('S-LYT-datasheet.pdf');?>" class="btn btn-info btn-small"><i class="icon-white icon-arrow-down"></i>Consulter la fiche technique</a></p>
				</section>
				<hr>
				<section>
                  <a id="description"></a>
                  <h4>Description</h4>
				  <p>La télécommande JMei S-LYT est une boîte à boutons (HF) ergonomique munie de fonctions (boutons-poussoirs) à double vitesse.</p>
						<p>Son émetteur industriel, léger, ultra-robuste et étanche (IP66), est composé de nylon et de fibre de verre.
Il est très résistant aux saletés, liquide, acide, graisse et infiltration d'huile.</p>
						<p>Le système S-LYT est composé de plus de 200 fonctions programmables par l'utilisateur pour convenir à tous types d'applications.</p>
						<p>4 déclinaisons possibles : S-LYT4, S-LYT6, S-LYT8 et S-LYT12 (4/6/8/12 fonctions double vitesse).</p>
				</section>
				<hr>
				<section>   
					<a id="avantages"></a>
				  <h4>Avantages</h4>
					<ul>
					<li>Choix de fréquence automatique (scan de fréquence libre)</li>
					<li>Retour d'informations</li>
					<li>Système sécurisé par accéléromètre</li>
					<li>Autorisation de manipulations par système RFID</li>
					<li>Système à double microprocesseur</li>
					<li>Codage avancé avec CRC 32 bits</li>
					<li>Reprogrammation des équipements sans contact</li>
					<li>Boitier IP66</li>
					<li>Boutons double vitesse (&gt;1 million de cycles)</li>
					<li>Touches personnalisables</li>
					<li>Commutateur de démarrage à clé</li>
					<li>Boutons «&nbsp;Snap-action&nbsp;» étudiés pour un confort d&rsquo;utilisation, même avec des gants</li>
					<li>Accumulateur interchangeable NIMH ou batteries AA classiques (autonomie &gt;100h)</li>
					</ul>
				</section>
				<hr>
				<section>
					<a id="options"></a>
                  <h4>Options</h4>
					<ul>
						<li>Paramètres transférables entre émetteurs via IR</li>
                        <li>Fréquence programmable par les boutons (ou mode AUTO)</li>
                        <li>Opération tandem (via sélecteur rotatif ou programmation de fonction)</li>
                        <li>Opération Pitch &amp; Catch (contrôle de 2 opérateurs en opposition)</li>
                        <li>Opération Random Access (premier arrivé/premier servi)</li>
                        <li>Commande multi-récepteurs</li>
                        <li>Démarrage sécurisé par RFID</li>
                        <li>Système unique de vigilance par accéléromètre</li>
                        <li>Retour d'informations digitales</li>
                        <li>Protection en caoutchouc</li>
                        <li>Sorties récepteur précâblées</li>
						<p> <a href="<?php echo Site::relativeUrl('OPTION');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
					</ul>  
				</section>
				<hr>
				<section>
					<a id="accessoires"></a>
				  <h4>Accessoires</h4>
					<ul>
						<li>Housse de protection en caoutchouc.</li>
						<li>Chargeur à microprocesseur double sortie.</li>
						<li>Accumulateur interchangeable NiMH.</li>
						<li>Support chargeur mural.</li>
					  <p> <a href="<?php echo Site::relativeUrl('ACCESSORY');?>" class="btn btn-default btn-mini"><i class="icon-black icon-plus-sign"></i> Plus d'infos...</a></p> 
					</ul>					
				</section>
				<hr>
				<section>
					<a id="applications"></a>
					<h4>Applications</h4>
					<ul>
					  <li>Pont roulant</li>
                      <li>Grue tour</li>
                      <li>Porte industrielle</li>
                      <li>Pompe</li>
                      <li>Bande transporteuse</li>
                      <li>…</li>
					</ul>  
				</section>                
                  <hr>
                  <a id="réalisations"></a>
				<section>	
					<h4>Exemples de réalisations</h4> 
				</section>
					<div class="row">
						<div class="span3">
				<section>
							<h6>Radiocommande - S-LYT4</h6>
							<img src="../img/product-SLYT/slyt_bot1.png?v=3" alt="Télécommande grue">
				</section> 
						</div>
						<div class="span3">
				<section>
							<h6>Radiocommande - S-LYT6</h6>
							<img src="../img/product-SLYT/slyt_bot2.png?v=2"  alt="Télécommande pont roulant">
				</section> 
						</div>
						<div class="span3">
				<section>
							<h6>Radiocommande - S-LYT8</h6>
							<img src="../img/product-SLYT/slyt_bot3.png?V=2" alt="Radio télécommande HF">
				</section> 
						</div>
					</div>
					<div class="row">
						<div class="span3">
				<section>
							<h6>Radiocommande - S-LYT12</h6>
							<img src="../img/product-SLYT/slyt_bot4.png?v=1" alt="Clé mémoire électronique pour radiocommande">
				</section> 
						</div>
						<div class="span3">
				<section>
							<h6>Radiocommande - S-LYT8 + sélecteur rotatif</h6>
							<img src="../img/product-SLYT/slyt_bot5.png?v=2" alt="Radiocommande avec afficheur">
				</section> 
						</div>						
						<div class="span3">
				<section>
							<h6>Support + Chargeur S-LYT4/8/12</h6>
							<img src="../img/product-SLYT/slyt_bot6.png?v=2" alt="Démarrage sécurisé pour télécommande">
				</section>           
						</div>                        
					</div>
					</div>
				</div>
<?php include 'footer.php';?>