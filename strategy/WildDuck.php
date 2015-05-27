<?php
// кряква

class WildDuck extends Duck {
	
	public function __construct() {
		$this->flyType = new WingFly;
		$this->quackType = new QuackQuack;
	}
	
	public function display() {
		echo "Я кряква <br/>";
	}
}