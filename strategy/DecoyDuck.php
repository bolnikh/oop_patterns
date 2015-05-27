<?php
// утка манок

class DecoyDuck extends Duck {
	
	public function __construct() {
		$this->flyType = new NoFly;
		$this->quackType = new NoQuack;
	}
	
		public function display() {
		echo "Я манок <br/>";
	}
}