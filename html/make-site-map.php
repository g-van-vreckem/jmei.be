<?php
	include 'common.php';
	date_default_timezone_set('Etc/GMT-1');
	header('Cache-Control: no-cache, must-revalidate'); // HTTP/1.1
	header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
	/*$xml .= '<?xml-stylesheet type="text/xsl" href="gss.xsl"?>' . PHP_EOL; */
	$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

	foreach ( Site::$pages As $lang => $pages ) {
		foreach ( $pages As $key => $value ) {
			if ( $value->priority > 0 ) {
				$f = $value->filename();
				$d = new DateTime();
				if ( file_exists ( $f ) ) {
					$d->setTimeStamp(filemtime($f));
				}
				$xml .=  '<url>';
				$xml .=  '<loc>' . $value->url(Page::FULL) . '</loc>';
				$xml .=  '<lastmod>' . $d->format(DateTime::W3C) . '</lastmod>';
				$xml .=  '<priority>' . $value->priority . '</priority>';
				$xml .=  '</url>' . PHP_EOL;
			}
		}
	}
	$xml .=  '</urlset>'. PHP_EOL;
	if (false === file_put_contents( __DIR__ . DIRECTORY_SEPARATOR . 'sitemap.xml', $xml)) {
		echo 'There was an error saving the sitemap.xml file';
	} else {
		header('Content-type: text/xml'); //sending xml data.
		echo $xml;
	}
?>