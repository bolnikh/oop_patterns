<?php

// супер класс добавок - собственно Декоратор

abstract class Addition extends Drink {
	private $_drink; // предыдущий напиток или добавка
	
	public function __construct(Drink $drink) {
		$this->_drink = $drink;
	}
	
	public function getDescription() {
		return $this->_drink->getDescription() . ', ' . $this->_description; 
	}
	
	public function getCost() {
		return $this->_drink->getCost() + $this->_cost; 
	}
}