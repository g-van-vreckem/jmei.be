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
							<!--<li<?php echo Site::addActiveClass('home'); ?>><a href="./">Accueil</a></li>-->
							<li<?php echo Site::addActiveClass('about'); ?>><a href="<?php echo Site::relativeUrl('about');?>">A propos de JMei</a></li>
							<li<?php echo Site::addActiveClass('contact'); ?>><a href="<?php echo Site::relativeUrl('contact');?>">Contact</a></li>
							<li<?php echo Site::addActiveClass('products-radios'); ?>><a href="<?php echo Site::relativeUrl('products-radios');?>">Radiocommandes</a></li>
							<li<?php echo Site::addActiveClass('products-solutions'); ?>><a href="<?php echo Site::relativeUrl('products-solutions');?>">Solutions Electroniques</a></li>
							<li<?php echo Site::addActiveClass('references'); ?>><a href="<?php echo Site::relativeUrl('references');?>">Références</a></li>
							<li<?php echo Site::addActiveClass('realisations'); ?>><a href="<?php echo Site::relativeUrl('realisations');?>">Réalisations</a></li>
<?php if(Site::$domExtension == Site::MARLOIE) { ?>
							<li<?php echo Site::addActiveClass('distribution'); ?>><a href="<?php echo Site::relativeUrl('distribution');?>">Distribution</a></li>
<?php } ?>
							<li<?php echo Site::addActiveClass('sadamec'); ?>><a href="<?php echo Site::relativeUrl('sadamec');?>">Sadamec</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
