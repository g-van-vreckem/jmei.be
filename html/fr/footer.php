		</div> 
		<div class="navbar navbar-inverse navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<li class="navbar-text navbar-inverse">&copy; JMei 2014</li>
						<li<?php echo Site::addActiveClass('terms'); ?>><a href="<?php echo Site::relativeUrl('terms');?>">legal</a></li>
						<li<?php echo Site::addActiveClass('links'); ?>><a href="<?php echo Site::relativeUrl('links');?>">liens</a></li>
						<li><a href="https://plus.google.com/+JmeiBe" rel="publisher">Retrouvez-nous sur Google+</a></li>
						<li><a href="https://www.facebook.com/JMei.be" rel="publisher">Facebook</a></li>
						<li><a href="https://www.linkedin.com/company/jmei-solution-electronic-radio-transmission" rel="publisher">LinkedIn</a></li>
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
            var _gaq=[['_setAccount','UA-37918376-1'],['_gat._anonymizeIp'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
