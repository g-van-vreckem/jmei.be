<?php
	mb_detect_order('UTF-8');
	mb_http_output('UTF-8');
	mb_internal_encoding('UTF-8');
	header('Cache-Control: no-cache');
	header('Expires: -1');
	header('X-UA-Compatible: IE=edge,chrome=1');

	$ext = '.php'; //correct URL depending on the URL rewrite rules
	$keywords = '';
	$pageHeaderCss = '';
	$pageHeaderScripts = '';
	$pageFooterScripts = '';

	DEFINE('SHOW_CERTIFICATION', false);
	define('SITE_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
	class Site {
		const FOURMIES = 'fourmies.';
		const MARLOIE = 'default.';

		public static $canonicalSiteURL = 'http://www.jmei.be';
		public static $pages;
		public static $curPage;
		private static $instance;
		public static $siteRoot;
		public static $domExtension;

		function __construct ( ) {
			self::$siteRoot = __DIR__ . DIRECTORY_SEPARATOR;
			self::$domExtension = self::detectDomExtension();

			self::$pages = Array ( );

			self::$pages['fr'] = Array ( );
			self::$pages['en'] = Array ( );
			self::$pages['nl'] = Array ( );

			self::addPage ( new Page ( 'about', 'en' ) );
			self::addPage ( new Page ( 'about', 'fr', 'a-propos-de-JMei' ) );
			self::addPage ( new Page ( 'about', 'nl', 'over-JMei' ) );

			self::addPage ( new Page ( 'home', 'en', 'index' ) );
			self::addPage ( new Page ( 'home', 'fr', 'index') );
			self::addPage ( new Page ( 'home', 'nl', 'index') );

			self::addPage ( new Page ( 'products', 'en', 'products' ) );
			self::addPage ( new Page ( 'products', 'fr', 'produits' ) );
			self::addPage ( new Page ( 'products', 'nl', 'producten' ) );

			self::addPage ( new Page ( 'contact', 'en' ) );
			self::addPage ( new Page ( 'contact', 'fr') );
			self::addPage ( new Page ( 'contact', 'nl') );

			self::addPage ( new Page ( 'distribution', 'en' ) );
			self::addPage ( new Page ( 'distribution', 'fr' ) );
			self::addPage ( new Page ( 'distribution', 'nl', 'distributie' ) );

			self::addPage ( new Page ( 'references', 'en' ) );
			self::addPage ( new Page ( 'references', 'fr' ) );
			self::addPage ( new Page ( 'references', 'nl', 'referenties' ) );

			self::addPage ( new Page ( 'realisations', 'en', 'achievements' ) );
			self::addPage ( new Page ( 'realisations', 'fr' ) );
			self::addPage ( new Page ( 'realisations', 'nl', 'uitvoeringen' ) ); //verwezenlijkingen?

			self::addPage ( new Page ( 'sadamec', 'en', 'radio-sadamec' ) );
			self::addPage ( new Page ( 'sadamec', 'fr', 'radio-sadamec' ) );
			self::addPage ( new Page ( 'sadamec', 'nl', 'radio-sadamec' ) );

			self::addPage ( new Page ( 'terms', 'en', 'terms', '', Page::PAGE_PHP, true, .5 ) );
			self::addPage ( new Page ( 'terms', 'fr', 'mentions-legales', '', Page::PAGE_PHP, true, .5 ) );
			self::addPage ( new Page ( 'terms', 'nl', 'legal-kennisgevingen', '', Page::PAGE_PHP, true, .5 ) );

			self::addPage ( new Page ( 'TCA27', 'en', 'product-TCA27', 'products' ) );
			self::addPage ( new Page ( 'TCA27', 'fr', 'produit-TCA27', 'products' ) );
			self::addPage ( new Page ( 'TCA27', 'nl', 'product-TCA27', 'products' ) );

			self::addPage ( new Page ( 'RECB', 'en', 'product-RECB', 'products' ) );
			self::addPage ( new Page ( 'RECB', 'fr', 'produit-RECB', 'products' ) );
			self::addPage ( new Page ( 'RECB', 'nl', 'product-RECB', 'products' ) );

			self::addPage ( new Page ( 'Helice', 'en', 'product-Helice', 'products' ) );
			self::addPage ( new Page ( 'Helice', 'fr', 'produit-Helice', 'products' ) );
			self::addPage ( new Page ( 'Helice', 'nl', 'product-Helice', 'products' ) );

			self::addPage ( new Page ( 'RCB90', 'en', 'product-RCB90', 'products' ) );
			self::addPage ( new Page ( 'RCB90', 'fr', 'produit-RCB90', 'products' ) );
			self::addPage ( new Page ( 'RCB90', 'nl', 'product-RCB90', 'products' ) );

			self::addPage ( new Page ( 'RCB700', 'en', 'product-RCB700', 'products' ) );
			self::addPage ( new Page ( 'RCB700', 'fr', 'produit-RCB700', 'products' ) );
			self::addPage ( new Page ( 'RCB700', 'nl', 'product-RCB700', 'products' ) );

			self::addPage ( new Page ( 'RCB1000', 'en', 'product-RCB1000', 'products' ) );
			self::addPage ( new Page ( 'RCB1000', 'fr', 'produit-RCB1000', 'products' ) );
			self::addPage ( new Page ( 'RCB1000', 'nl', 'product-RCB1000', 'products' ) );

			self::addPage ( new Page ( 'RCB3000', 'en', 'product-RCB3000', 'products' ) );
			self::addPage ( new Page ( 'RCB3000', 'fr', 'produit-RCB3000', 'products' ) );
			self::addPage ( new Page ( 'RCB3000', 'nl', 'product-RCB3000', 'products' ) );

			self::addPage ( new Page ( 'RCB6000', 'en', 'product-RCB6000', 'products' ) );
			self::addPage ( new Page ( 'RCB6000', 'fr', 'produit-RCB6000', 'products' ) );
			self::addPage ( new Page ( 'RCB6000', 'nl', 'product-RCB6000', 'products' ) );

			self::addPage ( new Page ( 'RCB7000', 'en', 'product-RCB7000', 'products' ) );
			self::addPage ( new Page ( 'RCB7000', 'fr', 'produit-RCB7000', 'products' ) );
			self::addPage ( new Page ( 'RCB7000', 'nl', 'product-RCB7000', 'products' ) );

			self::addPage ( new Page ( 'TANDEM', 'en', 'product-multi-equipement-coordination', 'products' ) );
			self::addPage ( new Page ( 'TANDEM', 'fr', 'produit-coordination-equipements-multiples', 'products' ) );
			self::addPage ( new Page ( 'TANDEM', 'nl', 'product-coordinatie-multiple-apparatuur', 'products' ) );

			self::addPage ( new Page ( 'KEY', 'en', 'product-configuration-and-identification-key', 'products' ) );
			self::addPage ( new Page ( 'KEY', 'fr', 'produit-clef-de-configuration-et-identification', 'products' ) );
			self::addPage ( new Page ( 'KEY', 'nl', 'product-configuration-and-identification-key', 'products' ) );

//			self::addPage ( new Page ( 'Saga', 'en', 'product-RCB7000', 'products' ) );

			self::addPage ( new Page ( 'JMPOCKET', 'en', 'product-JMei-Pocket', 'products' ) );
			self::addPage ( new Page ( 'JMPOCKET', 'fr', 'produit-JMei-Pocket', 'products' ) );
			self::addPage ( new Page ( 'JMPOCKET', 'nl', 'product-JMei-Pocket', 'products' ) );

			self::addPage ( new Page ( 'OPTION', 'en', 'product-options', 'products' ) );
			self::addPage ( new Page ( 'OPTION', 'fr', 'produit-options', 'products' ) );
			self::addPage ( new Page ( 'OPTION', 'nl', 'productopties', 'products' ) );

			self::addPage ( new Page ( 'ACCESSORY', 'en', 'product-accessories', 'products' ) );
			self::addPage ( new Page ( 'ACCESSORY', 'fr', 'produit-accessoires', 'products' ) );
			self::addPage ( new Page ( 'ACCESSORY', 'nl', 'product-accessoires', 'products' ) );


			self::addPage ( new Page ( 'RCB90.pdf', 'en', 'JMei-RCB90', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB90.pdf', 'fr', 'JMei-RCB90', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB90.pdf', 'nl', 'JMei-RCB90', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB90-datasheet.pdf', 'en', 'JMei-RCB90-datasheet', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB90-datasheet.pdf', 'fr', 'JMei-RCB90-fiche-technique', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB90-datasheet.pdf', 'nl', 'JMei-RCB90-technische-specificaties', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB700.pdf', 'en', 'JMei-RCB700', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB700.pdf', 'fr', 'JMei-RCB700', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB700.pdf', 'nl', 'JMei-RCB700', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'Helice.pdf', 'en', 'JMei-Helice', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'Helice.pdf', 'fr', 'JMei-Helice', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'Helice.pdf', 'nl', 'JMei-Helice', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'Helice-datasheet.pdf', 'en', 'JMei-Helice-datasheet', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'Helice-datasheet.pdf', 'fr', 'JMei-Helice-fiche-technique', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'Helice-datasheet.pdf', 'nl', 'JMei-Helice-technische-specificaties', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB1000.pdf', 'en', 'JMei-RCB1000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB1000.pdf', 'fr', 'JMei-RCB1000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB1000.pdf', 'nl', 'JMei-RCB1000', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB1000-datasheet.pdf', 'en', 'JMei-RCB1000-datasheet', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB1000-datasheet.pdf', 'fr', 'JMei-RCB1000-fiche-technique', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB1000-datasheet.pdf', 'nl', 'JMei-RCB1000-technische-specificaties', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB3000.pdf', 'en', 'JMei-RCB3000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB3000.pdf', 'fr', 'JMei-RCB3000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB3000.pdf', 'nl', 'JMei-RCB3000', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB3000-datasheet.pdf', 'en', 'JMei-RCB3000-datasheet', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB3000-datasheet.pdf', 'fr', 'JMei-RCB3000-fiche-technique', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB3000-datasheet.pdf', 'nl', 'JMei-RCB3000-technische-specificaties', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB6000.pdf', 'en', 'JMei-RCB6000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB6000.pdf', 'fr', 'JMei-RCB6000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB6000.pdf', 'nl', 'JMei-RCB6000', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RCB7000.pdf', 'en', 'JMei-RCB7000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB7000.pdf', 'fr', 'JMei-RCB7000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB7000.pdf', 'nl', 'JMei-RCB7000', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'RECB.pdf', 'en', 'JMei-RECB', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RECB.pdf', 'fr', 'JMei-RECB', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RECB.pdf', 'nl', 'JMei-RECB', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'TCA27.pdf', 'en', 'JMei-TCA27', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'TCA27.pdf', 'fr', 'JMei-TCA27', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'TCA27.pdf', 'nl', 'JMei-TCA27', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'KEY.pdf', 'en', 'JMei-HARDKEY', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'KEY.pdf', 'fr', 'JMei-HARDKEY', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'KEY.pdf', 'nl', 'JMei-HARDKEY', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'TANDEM.pdf', 'en', 'JMei-TANDEM', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'TANDEM.pdf', 'fr', 'JMei-TANDEM', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'TANDEM.pdf', 'nl', 'JMei-TANDEM', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'POCKET.pdf', 'en', 'JMei-Pocket', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'POCKET.pdf', 'fr', 'JMei-Pocket', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'POCKET.pdf', 'nl', 'JMei-Pocket', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'POCKET-datasheet.pdf', 'en', 'JMei-Pocket-datasheet', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'POCKET-datasheet.pdf', 'fr', 'JMei-Pocket-fiche-technique', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'POCKET-datasheet.pdf', 'nl', 'JMei-Pocket-technische-specificaties', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'SCAN.pdf', 'en', 'JMei-Scan', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'SCAN.pdf', 'fr', 'JMei-Scan', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'SCAN.pdf', 'nl', 'JMei-Scan', '', Page::PDF, true, .6 ) );

			self::addPage ( new Page ( 'DH.pdf', 'fr', 'JMei-Dossier-Entreprise', '', Page::PDF, true, .6 ) );
		}

		public static function get_instance() {
			if(!isset(self::$instance)) {
				$c = __CLASS__;
				self::$instance = new $c;
			}
			return self::$instance;
		}
		public static function addPage($r) {
			self::$pages[$r->lang][$r->alias] = $r;
		}
		public static function curPage() {
			global $lang, $pageId;
			return self::$pages[$lang][$pageId];
		}
		public static function relativeUrl($alias, $langue='') {
			global $lang, $pageId;
			if ( $langue === '' ) $langue = $lang;
			if ( isset ( self::$pages[$langue][$alias] ) ) {
				$p = self::$pages[$langue][$alias];
				return $p->url(Page::REL);
			} else {
				return '#';
			}
		}
		public static function fullUrl($alias='', $langue='') {
			global $lang, $pageId;
			if ( $langue === '' ) $langue = $lang;
			if ( $alias === '' ) $alias = $pageId;
			$p = self::$pages[$langue][$alias];
			return $p->url(Page::FULL);
		}
		public static function noIndex( $p ) {
			return ($p->priority <= 0);
		}
		public static function addActiveClass ( $id, $class='' ) {
			$c = self::curPage();

			if ( $c->alias == $id || $c->activate == $id ) {
				return ' class="active' . ( ( $class === '' ) ? '' : ( ' ' . $class ) ) . '"';
			} else {
				return ( $class === '' ) ? '' : ( ' class="' . $class . '"');
			}
		}
		public static function mapDom($file, $extension = null) {
			if (!$extension) {
				$extension = self::$domExtension;
			}
			$fileParts = pathinfo($file);
			return $fileParts['dirname'] . DIRECTORY_SEPARATOR . $fileParts['filename'] . '.' . $extension . $fileParts['extension'];
		}
		public static function detectDomExtension() {
			switch($_SERVER['HTTP_HOST']) {
				case 'jmei.be':
				case 'jmei.eu':
				case 'www.jmei.be':
				case 'www.jmei.eu':
					return self::MARLOIE;
					break;
				case 'www.jmei.fr':
				  return self::FOURMIES;
					break;
				default:
				  return self::MARLOIE;
			}
		}
	}

	class Page {
		const PAGE_PHP = 1;
		const PDF = 2;

		const REL = 1;
		const ABS = 2;
		const FULL = 3;

		const FEAT_GOOGLE_MAP = 1;
		const FEAT_SWIPER = 2;

		public $alias;
		public $file;
		public $fileType = self::PAGE_PHP;
		public $visible = true;
		public $activate;
		public $priority;

		function __construct ( $alias, $lang, $file = '', $activate = '', $fileType = self::PAGE_PHP, $visible = true, $priority = 1, $lastModified = 0 ) {
			$this->alias = $alias;
			$this->lang = $lang;
			$this->file = $file;
			if ($file==='') $this->file = $alias;
			$this->fileType = $fileType;
			$this->visible = $visible;
			$this->activate = $activate;
			$this->priority = $priority;
		}
		/**
		 *
		 */
		public function url ( $urlType=self::REL ) {
			switch ($urlType) {
				Case self::REL:
					$cp = Site::curPage();
					if ( $cp->lang == $this->lang ) {
						return $this->urlLast();
					} else {
						return '../' . $this->lang . '/' . $this->urlLast();
					}
					break;
				Case self::ABS:
						return '/' . $this->lang . '/' . $this->urlLast();
					break;

				Case self::FULL:
						return Site::$canonicalSiteURL . '/' . $this->lang . '/' . $this->urlLast();
					break;
			}
		}
		public function origFilename() {
			$fn =  __DIR__ . DIRECTORY_SEPARATOR . 'fr-old' . DIRECTORY_SEPARATOR;
			switch ($this->fileType) {
				Case self::PAGE_PHP:
					return $fn . $this->file . '.php';
					break;
				Case self::PDF:
					return $fn . 'pdf' . DIRECTORY_SEPARATOR . $this->file . '.pdf';
					break;
			}
		}
		public function filename() {
			$fn =  __DIR__ . DIRECTORY_SEPARATOR . $this->lang . DIRECTORY_SEPARATOR;
			switch ($this->fileType) {
				Case self::PAGE_PHP:
					return $fn . $this->file . '.php';
					break;
				Case self::PDF:
					return $fn . 'pdf' . DIRECTORY_SEPARATOR . $this->file . '.pdf';
					break;
			}
		}
		private function urlLast () {
			if ( $this->file == 'index' ) return '';
			switch ($this->fileType) {
				Case self::PAGE_PHP:
					return rawurlencode($this->file) . '.php';
					break;
				Case self::PDF:
					return 'pdf/' . rawurlencode($this->file) . '.pdf';
			}
		}
	}
	class Medias {
		public static $supportCodeAdded = false;
		public $mediaPath;
		public $html = '';
		/**
		 * @var $folder string url to media folder relative to site root (start and end with /)
		 */
		function __construct($folder) {
			Global $pageHeaderCss, $pageFooterScripts;
			$this->mediaPath = SITE_ROOT . str_replace( '/', DIRECTORY_SEPARATOR, $folder);
			$files = scandir($this->mediaPath);
			if ($files === false ) {
				return false;
			}
			array_shift($files); //remove '.'
			array_shift($files); //remove '..'
			if (count($files) == 1) {
				$file = $files[0];
				$alt = self::base($file);
				$this->html =  <<<HTML
						<div class="span4">
							<img class="img-polaroid" src="..{$folder}{$file}" alt="{$alt}" />
						</div>

HTML;
				return true;
			}
			//Use swiper 3d
			if (!self::$supportCodeAdded) {
				self::$supportCodeAdded = true;
				$pageHeaderCss .= <<<'HEADER'
        <link rel="stylesheet" href="/css/idangerous.swiper.css">
        <link rel="stylesheet" href="/css/idangerous.swiper.3dflow.css">
		<style>
			.swiper-container{
				padding:30px 0;
				width:auto;
			}
			.swiper-slide{
				width:auto;
				height:180px;
				background-size:cover;
				background-repeat:no-repeat;
				background-position:center;
				border-radius:5px;
				border-bottom:1px solid #555;
			}
			.reflection{
				width:100%;
				height:15px;
				border-radius:3px 3px 0 0;
				position:absolute;
				left:0;
				bottom:-17px;
				background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.3)),to(rgba(0,0,0,0)));
				background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.3),rgba(0,0,0,0));
				background-image:-moz-linear-gradient(top,rgba(0,0,0,0.3),rgba(0,0,0,0));
				background-image:-o-linear-gradient(top,rgba(0,0,0,0.3),rgba(0,0,0,0));
				background-image:linear-gradient(to bottom,rgba(0,0,0,0.3),rgba(0,0,0,0));
			}
			.swiper-slide a{
				position:absolute;
				left:0;
				top:0;
				width:100%;
				height:100%;
				z-index:1
			}
		</style>
HEADER;
				$pageFooterScripts .= <<<'SCRIPT'
		<script src="../js/vendor/idangerous.swiper.min.js"></script>
		<script src="../js/vendor/idangerous.swiper.3dflow.min.js"></script>
		<script>
			var mySwiper = new Swiper('.swiper-container',{
				slidesPerView:3,
				loop:true,
				//Enable 3D Flow
				tdFlow: {
					rotate : 10,
					stretch :-50,
					depth: 400,
					modifier : 1,
					shadows:true
				},
				onSlideClick: function() {
					if( mySwiper.clickedSlideLoopIndex == mySwiper.activeLoopIndex + 1 ) {
						return;
					}
					mySwiper.swipeTo( mySwiper.clickedSlideLoopIndex - 1, 750);
				},
				onSlideChangeEnd: function() {
					mySwiper.fixLoop();
				}
			})
		</script>

SCRIPT;
			}
			$this->html = <<<'HTML'
					<div class="swiper-container">
						<div class="swiper-wrapper">

HTML;
			foreach ($files as $file) {
				$url = '..' . $folder . $file;
				$this->html .= <<<HTML
							<div class="swiper-slide" style="background-image:url({$url})">
								<a href="#"></a>
								<div class="reflection"></div>
							</div>

HTML;

			}
			$this->html .= <<<'HTML'
						</div>
					</div>

HTML;
		}
		/**
		 * Return the filename extension including the '.' normalized to lowercase
		 * @param String $filename
		 * @return String
		 */
		public static function extension($filename) {
			return strtolower(strrchr($filename, '.'));
		}
		/**
		 * Return the filename amputated from it's extension
		 * @param string $filename
		 * @return string
		 */
		public static function base($filename) {
			return substr($filename, 0, strlen($filename) - strlen(self::extension($filename)));
		}

	}
	Site::get_instance();
