<?php
	mb_detect_order('UTF-8');
	mb_http_output('UTF-8');
	mb_internal_encoding('UTF-8');

	class Site {
		public static $canonicalSiteURL = 'http://www.jmei.be';
		public static $pages;
		public static $curPage;
		private static $instance;
		
		function __construct ( ) {
			$pages = Array ( );
			
			$pages['fr'] = Array ( );
			$pages['en'] = Array ( );
			
			self::addPage ( new Page ( 'about', 'en' ) );
			self::addPage ( new Page ( 'about', 'fr', 'a-propos-de-JMei' ) );
			
			self::addPage ( new Page ( 'home', 'en', 'index' ) );
			self::addPage ( new Page ( 'home', 'fr', 'index') );
			
			self::addPage ( new Page ( 'products', 'en', 'products' ) );
			self::addPage ( new Page ( 'products', 'fr', 'produits' ) );
			
			self::addPage ( new Page ( 'contact', 'en' ) );
			self::addPage ( new Page ( 'contact', 'fr') );
			
			self::addPage ( new Page ( 'distribution', 'en' ) );
			self::addPage ( new Page ( 'distribution', 'fr' ) );
			
			self::addPage ( new Page ( 'links', 'en', 'links', '', Page::PAGE_PHP, true, 0 ) );
			self::addPage ( new Page ( 'links', 'fr', 'liens', '', Page::PAGE_PHP, true, 0) );
			
			self::addPage ( new Page ( 'references', 'en' ) );
			self::addPage ( new Page ( 'references', 'fr' ) );
			
			self::addPage ( new Page ( 'realisations', 'en' ) );
			self::addPage ( new Page ( 'realisations', 'fr' ) );
			
			self::addPage ( new Page ( 'terms', 'en', 'terms', '', Page::PAGE_PHP, true, .5 ) );
			self::addPage ( new Page ( 'terms', 'fr', 'mentions-legales', '', Page::PAGE_PHP, true, .5 ) );
			
			self::addPage ( new Page ( 'TCA27', 'en', 'product-TCA27', 'products' ) );
			self::addPage ( new Page ( 'TCA27', 'fr', 'produit-TCA27', 'products' ) );
			
			self::addPage ( new Page ( 'RECB', 'en', 'product-RECB', 'products' ) );
			self::addPage ( new Page ( 'RECB', 'fr', 'produit-RECB', 'products' ) );
			
			self::addPage ( new Page ( 'Helice', 'en', 'product-Helice', 'products' ) );
			self::addPage ( new Page ( 'Helice', 'fr', 'produit-Helice', 'products' ) );
			
			self::addPage ( new Page ( 'RCB90', 'en', 'product-RCB90', 'products' ) );
			self::addPage ( new Page ( 'RCB90', 'fr', 'produit-RCB90', 'products' ) );
			
			self::addPage ( new Page ( 'RCB700', 'en', 'product-RCB700', 'products' ) );
			self::addPage ( new Page ( 'RCB700', 'fr', 'produit-RCB700', 'products' ) );
			
			self::addPage ( new Page ( 'RCB1000', 'en', 'product-RCB1000', 'products' ) );
			self::addPage ( new Page ( 'RCB1000', 'fr', 'produit-RCB1000', 'products' ) );
			
			self::addPage ( new Page ( 'RCB3000', 'en', 'product-RCB3000', 'products' ) );
			self::addPage ( new Page ( 'RCB3000', 'fr', 'produit-RCB3000', 'products' ) );

			self::addPage ( new Page ( 'RCB6000', 'en', 'product-RCB6000', 'products' ) );
			self::addPage ( new Page ( 'RCB6000', 'fr', 'produit-RCB6000', 'products' ) );

			self::addPage ( new Page ( 'RCB7000', 'en', 'product-RCB7000', 'products' ) );
			self::addPage ( new Page ( 'RCB7000', 'fr', 'produit-RCB7000', 'products' ) );
			
			self::addPage ( new Page ( 'TANDEM', 'en', 'product-multi-equipement-coordination', 'products' ) );
			self::addPage ( new Page ( 'TANDEM', 'fr', 'produit-coordination-equipements-multiples', 'products' ) );
			
			self::addPage ( new Page ( 'KEY', 'en', 'product-configuration-and-identification-key', 'products' ) );
			self::addPage ( new Page ( 'KEY', 'fr', 'produit-clef-de-configuration-et-identification', 'products' ) );
//			self::addPage ( new Page ( 'Saga', 'en', 'product-RCB7000', 'products' ) );
			self::addPage ( new Page ( 'JMPOCKET', 'fr', 'produit-JMei-Pocket', 'products' ) );

			self::addPage ( new Page ( 'RCB90.pdf', 'en', 'JMei RCB90', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB90.pdf', 'fr', 'JMei RCB90', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB700.pdf', 'en', 'JMei RCB700', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB700.pdf', 'fr', 'JMei RCB700', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'Helice.pdf', 'fr', 'JMei Helice', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB1000.pdf', 'en', 'JMei RCB1000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB1000.pdf', 'fr', 'JMei RCB1000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB3000.pdf', 'en', 'JMei RCB3000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB3000.pdf', 'fr', 'JMei RCB3000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB6000.pdf', 'en', 'JMei RCB6000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB6000.pdf', 'fr', 'JMei RCB6000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB7000.pdf', 'en', 'JMei RCB7000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RCB7000.pdf', 'fr', 'JMei RCB7000', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'RECB.pdf', 'fr', 'JMei Récepteur', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'TCA27.pdf', 'fr', 'JMei TCA27', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'KEY.pdf', 'fr', 'JMei HARDKEY', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'TANDEM.pdf', 'fr', 'JMei TANDEM', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'POCKETL.pdf', 'fr', 'JMei PocketL', '', Page::PDF, true, .6 ) );
			self::addPage ( new Page ( 'POCKETV.pdf', 'fr', 'JMei PocketV', '', Page::PDF, true, .6 ) );
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
	}
	
	class Page {
		const PAGE_PHP = 1;
		const PDF = 2;
		
		const REL = 1;
		const ABS = 2;
		const FULL = 3;
		
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

	Site::get_instance();
	
?>