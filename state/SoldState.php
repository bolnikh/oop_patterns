<?php

// продано

class SoldState implements State {
	
	protected $_oAutomat;
		
	public function __construct($oAutomat) {
		$this->_oAutomat = $oAutomat;
	}
	
	public function insertCoin() {
		echo "Ошибка, сначала получите жвачку <br/>";	
	}
	
	public function ejectCoin() {
		echo "Ошибка, нет монеты. <br/>";	
	}
	public function turnLever() {
		echo "Ошибка, рычаг уже повернут <br/>";	
	}
	public function giveIt() {
		echo "Выдаем жвачку<br/>";
		$this->_oAutomat->refill($this->_oAutomat->getCount() - 1);
	}

	public function __toString() {
		return 'Продано';
	}
}