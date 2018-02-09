		</div>
		<div class="navbar navbar-inverse navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li class="navbar-text navbar-inverse">&copy; JMei 2018</li>
						<li<?php echo Site::addActiveClass('terms'); ?>><a href="<?php echo Site::relativeUrl('terms');?>">legal</a></li>
						<li><a href="https://plus.google.com/+JmeiBe" rel="publisher">Find us on Google+</a></li>
						<li><a href="https://www.facebook.com/JMei.be" rel="publisher">Facebook</a></li>
						<li><a href="https://www.linkedin.com/company/jmei-solution-electronic-radio-transmission" rel="publisher">LinkedIn</a></li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="cus-flag-gb"></i> English <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li ><a href="<?php echo Site::relativeUrl($pageId, 'fr');?>"><i class="cus-flag-fr"></i> Français</a></li>
<?php if (Site::$domExtension != Site::FOURMIES) { ?>
								<li><a href="<?php echo Site::relativeUrl($pageId, 'nl');?>"><i class="cus-flag-nl"></i> Neederlands</a></li>
<?php } ?>
								<li class="active"><a href="#"><i class="cus-flag-gb"></i> English</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<script src="../js/vendor/jquery-1.9.1.min.js"></script>
		<script src="../js/vendor/bootstrap.min.js"></script>
		<script src="../js/plugins.js"></script>
<?php echo $pageFooterScripts; ?>
		<script src="../js/main.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-37918376-1', 'auto');
			ga('set', 'anonymizeIp', true);
			ga('send', 'pageview');
		</script>
    </body>
</html>
