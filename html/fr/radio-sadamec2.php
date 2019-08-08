<?php
	include 'common.php';
	$title = 'SADAMEC - Service et pièces pour télécommande SADamec TEChnologie';
	$description = 'La société JMei assure l\'entretien, le dépannage, la mise à niveau ou tout simplement la fourniture de pièces de rechange pour l\'ensemble du matériel de télécommande SADamec TEChnologie';
	$keywords = 'JMei,JMei France,entretien,dépannage,télécommande SADAMEC,service SADamec,SADamec radiocommande,SADAMEC,services SADamec,radios sur-mesure,SADamec TEChnologie,Sadamec Illkirch Graffenstaden';

	$pageId = 'sadamec';
	$pageHeaderCss = <<<END
<style>
section {
    margin-bottom: 15px;
    padding: 10px;
    background-color: #F5F5F5;
}

container, hr {
    display: none;
}
img.blog {
margin-bottom: 10px;
}
</style>
END;
$swiper = new Medias('/img/sadamec/swiper/');	
	include 'header.php';
	include 'nav.php';

?>
<?php echo $swiper->html; ?>
					<hr> 
	<img src=                    "/img/sadamec/sad.jpg" alt="Sadamec" class="refer-left" />
	<img src=                    "/img/sadamec/sadamec.jpg?v=1" alt="Sadamec" class="refer" />
					<hr>                   			<h4>Les télécommandes SADamec confiées à JMei </h4>
				<p>En novembre 2014, les services SADamec ont été transmis à la société JMei.<br>
<strong>JMei</strong> peut dès à présent vous fournir en pièces détachées, assurer le dépannage et l&rsquo;entretien des <strong>radios SADamec</strong> et bien sûr analyser vos demandes en radiocommande (en ayant la capacité de mixer les technologies novatrices de JMei).<br>
Les services de la société Illkirch Graffenstaden sont donc dès à présent assurés par JMei.</p>
				<hr> 
			<h4>JMei et JMei France redonnent naissance aux services SADamec</h4>
				<p><strong>JMei</strong> est au cœur de la radiocommande depuis 30 ans par les sociétés Collard-IRC et JMei. Elle est basée en Belgique francophone (Ardennes belges) et impliquée sur le marché français de même que sa filliale JMei France SARL.
                  <br>
                  Elle se fera un plaisir de vous satisfaire dans des délais courts et d’analyser avec vous vos besoins en radiocommande.
                  <br>
JMei fabrique vos radios sur-mesure en respectant les normes sécuritaires imposées dans votre secteur. <br><strong>
JMei et JMei France</strong> sont certains de par cette décision de mieux répondre aux demandes du secteur industriel.</p>
				<hr> 
			<h4>Description des radiocommandes SADamec</h4>
				<p>La gamme de radiocommandes SADamec se décline sous la forme de boîtiers ceintures ou de pupitres ventraux.<br>
				  L’ensemble des organes de commande de l’émetteur (boutons-poussoirs, commutateurs, commutateurs rotatifs, joysticks, manettes, etc.) est choisi en fonction de l’ergonomie de commande souhaitée.<br>
				  Pour des applications nécessitant un retour d’informations, il est possible d’afficher des informations de type LEDs, voyants, afficheurs 7 segments, afficheur LCD (jusqu’à 40 caractères sur 4 lignes) ou même sur afficheur vidéo 5,7 pouces.
                  <br>
La <strong>technologie infra rouge (IR)</strong> peut être introduite dans nos boîtiers JMei et SADamec.</p>

			<p>N'hésitez pas à <a href="<?php echo Site::relativeUrl('contact');?>">nous contacter</a>, JMei sera toujours en mesure de vous proposer la meilleure solution!</p>

 <?php include 'footer.php';?>
