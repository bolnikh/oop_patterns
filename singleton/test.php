<?php 

class Singleton {
	static private $_instance = new Singleton();
	
	private function __construct(){	}
	private function __clone(){	}
	
	static function getInstance() {
		if (null == self::$_instance) {
			self::$_instance = new Singleton();
		}
		return self::$_instance;
	}
	
	public function test() {
		echo 'test<br/>';
	}
}

//$s = new Singleton; //  Fatal error: Call to private Singleton::__construct() from invalid context 
$s = Singleton::getInstance();

$s->test();

