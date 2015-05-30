<?php

// суперкласс напиток и добавок

abstract class Drink {
	protected $_description = 'Неизвестный напиток';
	protected $_cost = 0;
	
	public function getDescription() {
		return $this->_description;
	}
	public function getCost() {
		return $this->_cost;
	}
}