<?php
	require_once 'common.php';
	$title .= '';
	$description .='';
	$keywords .= '';

	$pageId = 'home';
	include 'header.php';
	include 'nav.php';
?>
			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<img src="../img/home/slide-01.jpg?v=9" alt="JMei Solution-Electronic-Radio transmission">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">JMei, industrial solutions.<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('about');?>">See details...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-02.jpg?v=3" alt="Radiocommande pour silo de stockage à grain">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Quality, cost, reliability. Welcome to the world of JMei radio remote controls!
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">See details...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-03.jpg?v=1" alt="Radiocommande profibus bidirectionnelle">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Flexibility, innovation, and a solution to your specific need.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB1000');?>">See details...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-04.jpg?v=2" alt="Commande à distance remorque">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">JMei draws its strength from constant innovation.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('Helice');?>">See details...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-05.jpg?v=2" alt="Radiocommande locotracteur">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Our strength comes from your trust!
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB3000');?>">See details...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-06.jpg?v=6" alt="Télécommande industrielle avec code barre">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">All types of customisation of radio remote controls with the latest technologies!<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">See details...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-07.jpg?v=7" alt="JMei radiocommande ex inradco ex collard">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Pocket remote controls – light and economic.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('JMPOCKET');?>">See details...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-08.jpg?v=1" alt="Commande pont roulant">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Remote controls designed to meet specific customer needs.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB90');?>">See details...</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div><!-- /.carousel -->

            <div class="row">
                <div class="span4">
<h2 class="text-center">Our experiences</h2>
					<a href="<?php echo Site::relativeUrl('sadamec');?>"><img src="../img/home/box1.jpg?v=10" alt="Sadamec"></a>
                </div>
                <div class="span4">
						<h2>Production examples</h2>
 <!-- /.Radios personnalisées! -->
                    <a href="<?php echo Site::relativeUrl('realisations');?>" style="text-align: left"><img src="../img/home/month-radio.jpg?v=14" alt="Radiocommande Industrielle de sécurité"></a>

               </div>
                <div class="span4">
<h2 class="text-center">A guarantee of quality</h2>
					<a href="<?php echo Site::relativeUrl('about');?>"><img src="../img/home/box2.jpg?v=2" alt="Télécommande JMei"></a>
                </div>
            </div>
            <div class="row">
                <div class="span4">
<h2 class="text-center">Industrial remote control</h2>
					<a href="<?php echo Site::relativeUrl('products');?>"><img src="../img/home/box3.jpg?v=10" alt="Boîte à boutons industrielle"></a>
				</div>
                <div class="span4">
                    <h2 class="text-center">JMei</h2>
                    <p class="text-center">Chaussée de Rochefort, 123<br>
						B-6900 Marloie - Belgique<br>
						Tel. : +32 84 34.41.75<br>
						Fax : +32 84 34.41.77<br>
						<a href="mailto:info@jmei.be">info@jmei.be</a></p>
                    <p class="text-center"><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('contact');?>">Contact us! &raquo;</a></p>
                </div>
                <div class="span4">
<h2 class="text-center">Pendant control</h2>
					<a href="<?php echo Site::relativeUrl('products');?>"><img src="../img/home/box4.jpg?v=1" alt="Radiocommande personnalisée"></a>
                </div>
            </div>
<?php include 'footer.php';?>
