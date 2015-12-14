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
							<li<?php echo Site::addActiveClass('about'); ?>><a href="<?php echo Site::relativeUrl('about');?>">Over JMei</a></li>
							<li<?php echo Site::addActiveClass('contact'); ?>><a href="<?php echo Site::relativeUrl('contact');?>">Contact</a></li>
							<li<?php echo Site::addActiveClass('products'); ?>><a href="<?php echo Site::relativeUrl('products');?>">Products</a></li>
							<li<?php echo Site::addActiveClass('references'); ?>><a href="<?php echo Site::relativeUrl('references');?>">Referenties</a></li>
							<li<?php echo Site::addActiveClass('realisations'); ?>><a href="<?php echo Site::relativeUrl('realisations');?>">Uitvoeringen</a></li>
							<li<?php echo Site::addActiveClass('distribution'); ?>><a href="<?php echo Site::relativeUrl('distribution');?>">Distributie</a></li>
							<li<?php echo Site::addActiveClass('sadamec'); ?>><a href="<?php echo Site::relativeUrl('sadamec');?>">Sadamec radiobesturingen</a></li>
						</ul>						
					</div>
				</div>
			</div>
		</div>
        <div class="container">
