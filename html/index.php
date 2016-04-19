<?php
class langs {
	public static function get_lang_redirect_from_browser($default_lang_redirect, $accepted_lang) {
		$accept = array();
		if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
			// break up string into pieces (languages and q factors)
			preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);
			if (count($lang_parse[1])) {
				$i = 0;
				// create a list like "en" => 0.8
				$accept = array_combine($lang_parse[1], $lang_parse[4]);
				// set default to 1.1 for any without q factor
				foreach ($accept as $accept_lang => $val) {
					if ($val === '') $accept[$accept_lang] = 1.1 - 0.0001*$i++;
				}
				// sort list based on value
				arsort($accept, SORT_NUMERIC);
			}
		}
		// look through sorted list and use first one that matches our languages
		foreach ($accept as $accept_lang => $val) {
			$lang = substr($accept_lang,0,2);
			if (isset($accepted_lang[$lang])) {
				return $accepted_lang[$lang];
			}
		}
		return $default_lang_redirect;
	}
}

switch($_SERVER['HTTP_HOST']) {
	case 'jmei.picmilk.com':
	case 'jmei.fr':
	case 'www.jmei.fr':
		header('Location: ' . langs::get_lang_redirect_from_browser('fr', ['en'=>'en', 'fr'=>'fr']), true, 307);
		break;
	case 'jmei.be':
	case 'jmei.eu':
	case 'www.jmei.be':
	case 'www.jmei.eu':
	default:
		header('Location: ' . langs::get_lang_redirect_from_browser('en', ['en'=>'en', 'fr'=>'fr', 'nl'=>'nl']), true, 307);
}
die;
