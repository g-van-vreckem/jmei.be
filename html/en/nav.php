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
							<li<?php echo Site::addActiveClass('home'); ?>><a href="./">Home</a></li>
							<li<?php echo Site::addActiveClass('about', 'foo'); ?>><a href="<?php echo Site::relativeUrl('about');?>">About</a></li>
							<li<?php echo Site::addActiveClass('contact'); ?>><a href="<?php echo Site::relativeUrl('contact');?>">Contact</a></li>
							<li<?php echo Site::addActiveClass('products'); ?>>
								<a href="<?php echo Site::relativeUrl('products');?>">Products</a>
<?php
/**
								<ul class="dropdown-menu">
									<li<?php echo Site::addActiveClass('products'); ?>><a href="<?php echo Site::relativeUrl('products');?>">Products Overview</a></li>
									<li class="nav-header">Buttons' Boxes</li>
									<li<?php echo Site::addActiveClass('RCB90'); ?>><a href="<?php echo Site::relativeUrl('RCB90');?>">RCB90</a></li>
									<li<?php echo Site::addActiveClass('RCB700'); ?>><a href="<?php echo Site::relativeUrl('RCB700');?>">RCB700</a></li>
									<li class="divider"></li>
									<li class="nav-header">Control Panels</li>
									<li<?php echo Site::addActiveClass('RCB3000'); ?>><a href="<?php echo Site::relativeUrl('RCB3000');?>">RCB3000</a></li>
									<li<?php echo Site::addActiveClass('RCB1000'); ?>><a href="<?php echo Site::relativeUrl('RCB1000');?>">RCB1000</a></li>
									<li class="divider"></li>
									<li<?php echo Site::addActiveClass('RECB'); ?>><a href="<?php echo Site::relativeUrl('RECB');?>">Receivers</a></li>
									<li class="divider"></li>
									<li class="nav-header">Data Transmission</li>
									<li<?php echo Site::addActiveClass('RCB6000'); ?>><a href="<?php echo Site::relativeUrl('RCB6000');?>">RCB6000</a></li>
									<li<?php echo Site::addActiveClass('RCB7000'); ?>><a href="<?php echo Site::relativeUrl('RCB7000');?>">RCB7000</a></li>
									<li class="divider"></li>
									<li class="nav-header">Options, Safety</li>
									<li<?php echo Site::addActiveClass('TCA27'); ?>><a href="<?php echo Site::relativeUrl('TCA27');?>">Secured Starting</a></li>
									<li<?php echo Site::addActiveClass('KEY'); ?>><a href="<?php echo Site::relativeUrl('KEY');?>">Identification Key</a></li>
									<li<?<?php echo Site::addActiveClass('TANDEM'); ?>><a href="<?php echo Site::relativeUrl('TANDEM');?>">Master / Slave System</a></li>
								</ul>
*/
?>
							</li>
							<li<?php if ($pageId=='references') echo ' class="active"' ?>><a href="<?php echo Site::relativeUrl('references');?>">References</a></li>
							<li<?php if ($pageId=='realisations') echo ' class="active"' ?>><a href="<?php echo Site::relativeUrl('realisations');?>">Realisations</a></li>
							<li<?php if ($pageId=='distribution') echo ' class="active"' ?>><a href="<?php echo Site::relativeUrl('distribution');?>">Distribution</a></li>
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="cus-flag-gb"></i> English <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo Site::relativeUrl($pageId, 'fr');?>"><i class="cus-flag-fr"></i> Français</a></li>
									<li class="active"><a href="<?php echo Site::relativeUrl('home', 'en');?>"><i class="cus-flag-gb"></i> English</a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
        <div class="container">
