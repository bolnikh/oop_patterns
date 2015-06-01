<?php

// Вставили монету

class HavecoinState implements State {
	
	protected $_oAutomat;
		
	public function __construct($oAutomat) {
		$this->_oAutomat = $oAutomat;
	}
	
	public function insertCoin() {
		echo "Ошибка, уже есть монета <br/>";	
	}
	
	public function ejectCoin() {
		echo "Возвращаем монету <br/>";	
		$this->_oAutomat->setState($this->_oAutomat->getNocoinState());	
	}
	
	public function turnLever() {
		echo "Поворачиваем рычаг <br/>";	
		$this->_oAutomat->setState($this->_oAutomat->getSoldState());		
	}
	
	public function giveIt() {
		echo "Ошибка, нет жвачки. <br/>";
	}

	public function __toString() {
		return 'Есть монета';
	}
}