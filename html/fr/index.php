<?php
	include 'common.php';
	$title .= '';
	$description .='';
	$pageId = 'home';
	include 'header.php';
	include 'nav.php';
?>
			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<img src="../img/home/slide-01.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">L'équipe JMei vous souhaite de joyeuses fêtes! <a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('about');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-02.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Qualité, Coût, fiabilité. Bienvenue dans le monde de la radiocommande JMei!
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-03.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Flexibilité, innovation, solution à vos besoins spécifiques.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('realisations');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-04.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">JMei puise sa force  grâce à l'innovation constante. récepteur Profibus, Ethernet ou Can Bus 
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('Helice');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-05.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Conçu pour répondre aux besoins spécifiques des clients.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB3000');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-06.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Notre force: vos références.<br>
							    Notre croissance: votre confiance.<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-07.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Après un travail de dur labeur, JMei devient l'évolution de IRC.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('about');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-08.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Tous les types de personnalisation avec les dernières technologies.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB90');?>">Read more...</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div><!-- /.carousel -->

            <div class="row">
                <div class="span4">
                    <h2>JMei</h2>
                    <p>Chaussée de Rochefort, 123<br>
						B-6900 Marloie<br>
						Belgique<br>
						Tel. : +32 84 34.41.75<br>
						Fax : +32 84 34.41.77<br>
						<a href="mailto:info@jmei.be">info@jmei.be</a></p>
                    <p><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('contact');?>">Contactez-nous! &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Joyeuses fêtes!</h2>
                    <a href="<?php echo Site::relativeUrl('realisations');?>"><img src="../img/home/month-radio.jpg?v=1" alt="Lorem Ipsum"></a>
               </div>
                <div class="span4">
                <ul>
					<li>Personnalisation</li>
					<li>Flexibilité</li>
					<li>Innovation</li>
					<li>Reactivité</li>
					<li>Experience</li>
					<li>Fiabilité</li>
				</ul>
				<p><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('realisations');?>">Voir details &raquo;</a></p>
                </div>
            </div>
            <div class="row">
                <div class="span4">
					<a href="<?php echo Site::relativeUrl('products');?>"><img src="../img/home/box1.jpg?v=1" alt="Featured Product RCB90 RCB700"></a>
                </div>
                <div class="span4">
                    <p class="lead text-center">Une équipe dynamique et professionnelle</p>
					<p class="lead text-center">Un service rapide et de qualité </p>
					<p class="lead text-center">Fabrication sur-mesure de vos produits</p>
					<p><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('about');?>">Voir details &raquo;</a></p>
				</div>
                <div class="span4">
					<a href="<?php echo Site::relativeUrl('products');?>"><img src="../img/home/box2.jpg?v=1" alt="Featured Product Hélice RCB1000 RCB3000"></a>
                </div>
            </div>
<?php include 'footer.php';?>
