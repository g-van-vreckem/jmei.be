<?php
	require_once 'common.php';
	header('Content-type: text/xml'); //sending xml data.
  readfile(Site::mapDom(__FILE__));
