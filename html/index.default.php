<?php
	require_once 'common.php';
	$title = 'JMei - Radiocommande à distance - Radio télécommande sans fil industrielle';
	$description = 'JMei, votre partenaire en solution électronique, radiocommandes industrielles et radio-transmission';
	$keywords = 'JMei,Radiocommande à distance,Radio télécommande,Radio télécommande sans fil industrielle,solution électronique,radiocommandes industrielles,radio-transmission,IRC,Collard-Belgium-Electronics,radiocommande,innovation constante,télécommandes,dernières technologies,Marloie,Radios personnalisées,                    Personnalisation,Flexibilité,Innovation,Réactivité,Expérience,Fiabilité,équipe dynamique et professionnelle,service rapide et de qualité,Fabrication sur-mesure';

	$pageId = 'home';
	include 'header.php';
	include 'nav.php';
?>
			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="item">
						<img src="../img/home/slide-01.jpg?v=9" alt="JMei Solution-Electronic-Radio transmission">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">JMei, les solutions industrielles éprouvées.<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('about');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-02.jpg?v=3" alt="Radiocommande pour silo de stockage à grain">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Qualité, coût, fiabilité. Bienvenue dans le monde de la radiocommande JMei!
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-03.jpg?v=1" alt="Radiocommande profibus bidirectionnelle">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Flexibilité, innovation, solution à vos besoins spécifiques.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB1000');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-04.jpg?v=2" alt="Commande à distance remorque">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">JMei puise sa force  grâce à l'innovation constante.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('Helice');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-05.jpg?v=2" alt="Radiocommande locotracteur">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Des télécommandes conçues pour répondre aux besoins spécifiques des clients.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB3000');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-06.jpg?v=6" alt="Télécommande industrielle avec code barre">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Nous sommes vos yeux.. déportés!<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-07.jpg?v=7" alt="JMei radiocommande ex inradco ex collard">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">A chaque procédé industriel sa solution radio.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('JMPOCKET');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
					<div class="item active">
						<img src="../img/home/slide-08.jpg?v=2" alt="Commande pont roulant">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Tous les types de personnalisation de la radiocommande avec les dernières technologies.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB90');?>">Plus d'infos...</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div><!-- /.carousel -->

            <div class="row">
                <div class="span4">
<h2 class="text-center">Nos expériences</h2>
					<a href="<?php echo Site::relativeUrl('sadamec');?>"><img src="../img/home/box1.jpg?v=10" alt="Sadamec"></a>
                </div>
                <div class="span4">
<!-- /.					<h2 class="text-center">Nos réalisations</h2>
"../img/home/month-radio.jpg?v=18"
-->
				<h2 class="text-center">Nos réalisations</h2>
                    <a href="<?php echo Site::relativeUrl('realisations');?>" style="text-align: left"><img src="../img/home/month-radio.jpg?v=20" alt="Radiocommande Industrielle de sécurité"></a> </div>
                <div class="span4">
<h2 class="text-center">Un gage de qualité</h2>
					<a href="<?php echo Site::relativeUrl('about');?>"><img src="../img/home/box2.jpg?v=2" alt="Télécommande JMei"></a>
                </div>
            </div>
            <div class="row">
                <div class="span4">
<h2 class="text-center">Personnalisation</h2>
					<a href="<?php echo Site::relativeUrl('products-radios');?>"><img src="../img/home/box3.jpg?v=11" alt="Boîte à boutons industrielle"></a>
                </div>
                <div class="span4">
                    <h2 class="text-center">JMei</h2>
                    <p class="text-center">Chaussée de Rochefort, 123<br>
						B-6900 Marloie - Belgique<br>
						Tel. : +32 84 34.41.75<br>
						Fax : +32 84 34.41.77<br>
						<a href="mailto:info@jmei.be">info@jmei.be</a></p>
                    <p class="text-center"><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('contact');?>">Contactez-nous&nbsp;! &raquo;</a> <a class="btn btn-jmei" href="http://www.jmei.fr">Site JMei FRANCE &raquo;</a></p>
                </div>
                <div class="span4">
<h2 class="text-center">Industrial Wireless</h2>
					<a href="<?php echo Site::relativeUrl('products-radios');?>"><img src="../img/home/box4.jpg?v=3" alt="Radiocommande personnalisée"></a>
                </div>
            </div>
<?php include 'footer.php';?>
