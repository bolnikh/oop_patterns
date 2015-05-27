<?php
// резиновая уточка

class RubberDuck extends Duck {
	
	public function __construct() {
		$this->flyType = new NoFly;
		$this->quackType = new SqueakQuack;
	}
	
	public function display() {
		echo "Я резиновая уточка <br/>";
	}
}