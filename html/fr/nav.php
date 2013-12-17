		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="./"><img class="logo-nav" src="../img/ico/jmei-nav-logo.jpg" height="40" alt="JMei"/></a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li<?php echo Site::addActiveClass('home'); ?>><a href="./">Acceuil</a></li>
							<li<?php echo Site::addActiveClass('about'); ?>><a href="<?php echo Site::relativeUrl('about');?>">A propos de JMei</a></li>
							<li<?php echo Site::addActiveClass('contact'); ?>><a href="<?php echo Site::relativeUrl('contact');?>">Contact</a></li>
							<li<?php echo Site::addActiveClass('products'); ?>><a href="<?php echo Site::relativeUrl('products');?>">Produits</a></li>
							<li<?php echo Site::addActiveClass('references'); ?>><a href="<?php echo Site::relativeUrl('references');?>">Références</a></li>
							<li<?php echo Site::addActiveClass('realisations'); ?>><a href="<?php echo Site::relativeUrl('realisations');?>">Réalisations</a></li>
							<li<?php echo Site::addActiveClass('distribution'); ?>><a href="<?php echo Site::relativeUrl('distribution');?>">Distribution</a></li>
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="cus-flag-gb"></i> Français <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li class="active"><a href="#"><i class="cus-flag-fr"></i> Français</a></li>
									<li><a href="<?php echo Site::relativeUrl($pageId, 'en');?>"><i class="cus-flag-gb"></i> English</a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
        <div class="container">
