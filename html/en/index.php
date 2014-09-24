<?php
	include 'common.php';
	$title .= '';
	$description .= '';
	$keywords .= '';

	$pageId = 'home';
	include 'header.php';
	include 'nav.php';
?>
			<div id="myCarousel" class="carousel slide">
				<div class="carousel-inner">
					<div class="item active">
						<img src="../img/home/slide-01.jpg?v=2" alt="JMei Solution-Electronic-Radio transmission">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">After much efforts, IRC becomes JMei
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('about');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-02.jpg?v=2" alt="Wireless Monitoring of Grain">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Quality, Cost, Reliability. Welcome in the JMei radio control world!
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-03.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Flexibility, focus on your specific needs.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('realisations');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-04.jpg?v=1" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Strength trough constant innovation. receiver Profibus, Ethernet or Can Bus modes
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('Helice');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-05.jpg?v=1" alt="remote control of shunter">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Engineered to meet specific customer's needs.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB3000');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-06.jpg?v=1" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Our strength: our references.<br>Our grow: your trust.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('RCB700');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-07.jpg?v=1" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">All kinds of customization with brand new technologies.
								<a class="btn btn-jmei pull-right" href="<?php echo Site::relativeUrl('about');?>">Read more...</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/home/slide-08.jpg" alt="">
						<div class="container">
							<div class="carousel-caption">
								<p class="lead">Transmitter with any possible displays, bidirectional.
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
						Belgium<br>
						Tel. : +32 84 34.41.75<br>
						Fax : +32 84 34.41.77<br>
						<a href="mailto:info@jmei.be">info@jmei.be</a></p>
                    <p><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('contact');?>">Contact Us! &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Featured customization!</h2>
                    <a href="<?php echo Site::relativeUrl('realisations');?>"><img src="../img/home/month-radio.jpg?v=7" alt="Remote Control Profinet"></a>
               </div>
                <div class="span4">
					<h2>Our strengths</h2>
					<ul>
						<li>Personalisation</li>
						<li>Flexibility</li>
						<li>Innovation</li>
						<li>Reactivity</li>
						<li>Experience</li>
						<li>Reliability</li>
					</ul>
					<p><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('realisations');?>">View details &raquo;</a></p>
                </div>
            </div>
            <div class="row">
                <div class="span4">
					<a href="<?php echo Site::relativeUrl('products');?>"><img src="../img/home/box1.jpg?v=4" alt="Featured Product RCB90 RCB700"></a>
                </div>
                <div class="span4">
					<p class="lead text-center">A dynamic and Professional Team</p>
					<p class="lead text-center">A speedy and High Quality service </p>
					<p class="lead text-center">Custom Manufacturing of your Orders</p>
					<p><a class="btn btn-jmei" href="<?php echo Site::relativeUrl('about');?>">View details &raquo;</a></p>
				</div>
                <div class="span4">
					<a href="<?php echo Site::relativeUrl('products');?>"><img src="../img/home/box2.jpg?v=4" alt="Featured Product Hélice RCB1000 RCB3000"></a>
                </div>
            </div>
<?php include 'footer.php';?>
