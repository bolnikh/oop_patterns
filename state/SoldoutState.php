<?php

// все продано

class SoldoutState implements State {
	
	protected $_oAutomat;
		
	public function __construct($oAutomat) {
		$this->_oAutomat = $oAutomat;
	}
	
	public function insertCoin() {
		echo "Ошибка, нет жвачки. <br/>";	
	}
	
	public function ejectCoin() {
		echo "Ошибка, нет монеты. <br/>";	
	}
	public function turnLever() {
		echo "Ошибка, нет жвачки. <br/>";	
	}
	public function giveIt() {
		echo "Ошибка, нет жвачки. <br/>";
	}

		public function __toString() {
		return 'Все продано';
	}
}