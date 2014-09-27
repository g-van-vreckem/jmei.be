<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="<?php echo $lang;?>" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="<?php echo $lang;?>"  class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="<?php echo $lang;?>"  class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="<?php echo $lang;?>"  class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		
        <title><?php echo $title;?></title>
        <meta name="description" content="<?php echo $description;?>">
        <meta name="keywords" content="<?php echo $keywords;?>">
        <meta name="viewport" content="width=device-width">
<?php if ( Site::noIndex ( Site::curPage() ) ) echo '		<meta name="robots" content="noindex">'; ?>
		<meta property="fb:admins" 		content="1102341095">
		<meta property="fb:admins" 		content="706916353">
		<meta property="og:image" 		content="http://www.jmei.be/img/ico/jmei-logo-2000x2000.jpg">
		<meta property="og:url" 		content="<?php echo Site::fullUrl(); ?>">
		<meta property="og:type"		content="website"> 
		<meta property="og:site_name"	content="JMei Solution-Electronic-Radio transmission">
		<meta property="og:description"	content="<?php echo $description; ?>">
		<meta property="og:title"		content="<?php echo $title; ?>">
		<meta property="og:locale" 		content="<?php echo $ogLocale; ?>">
		<link rel="canonical" href="<?php echo Site::fullUrl(); ?>">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/ico/jmei-logo-144x144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/ico/jmei-logo-114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/ico/jmei-logo-72x72.png">
		<link rel="apple-touch-icon-precomposed" href="/img/ico/jmei-logo-57x57.png">

		<meta name="msapplication-TileImage" content="/img/ico/jmei-metro-tile-144x144.png">
		<meta name="msapplication-TileColor" content="#015565">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/idangerous.swiper.css">
        <link rel="stylesheet" href="/css/idangerous.swiper.3dflow.css">
		<link type="text/plain" rel="author" href="http://www.jmei.be/humans.txt" />
        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


