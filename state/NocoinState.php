<?php

// нет монеты

class NocoinState implements State {
	
	protected $_oAutomat;
		
	public function __construct($oAutomat) {
		$this->_oAutomat = $oAutomat;
	}
	
	public function insertCoin() {
		echo "Вставили монету <br/>";
		$this->_oAutomat->setState($this->_oAutomat->getHavecoinState());
	}
	
	public function ejectCoin() {
		echo "Ошибка, нет монеты. <br/>";	
	}
	public function turnLever() {
		echo "Ошибка, нет монеты. <br/>";	
	}
	public function giveIt() {
		echo "Ошибка, нет монеты и не повернут рычаг. <br/>";
	}

	public function __toString() {
		return 'Готов, жду монету';
	}
}