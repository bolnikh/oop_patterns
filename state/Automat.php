<?php 


// автомат по продаже жвачки

class Automat {
	// в эти свойства положим классы состояний
	protected $_havecoinState;
	protected $_soldoutState;
	protected $_soldState;
	protected $_nocoinState;
	
	protected $_state; // текущее состояние
	
	protected $_gumCount = 0;

	public function __construct($iCount = 0) {
		$this->_havecoinState = new HavecoinState($this);
		$this->_soldoutState = new SoldoutState($this);
		$this->_soldState = new SoldState($this);
		$this->_nocoinState = new NocoinState($this);
		
		$this->refill($iCount);
	}

	public function getCount() {
		return $this->_gumCount;
	}
	
	public function setCount($iCount) {
		$this->_gumCount = $iCount;
	}
	
	public function refill($iCount) {
		$this->setCount($iCount);
		if ($this->getCount() > 0) {
			$this->setState($this->getNocoinState());
		} else {
			$this->setState($this->getSoldoutState());
		}		
	}
	
	public function setState($oState) {
		$this->_state = $oState;
	}
	
	
	public function getHavecoinState() {
		return $this->_havecoinState;
	}	

	public function getSoldoutState() {
		return $this->_soldoutState;
	}
	
	public function getSoldState() {
		return $this->_soldState;
	}
	
	public function getNocoinState() {
		return $this->_nocoinState;
	}
	
	public function giveGum() {
		echo "Шарик жвачки выкатился <br/>";
		$this->_gumCount--;
	}
	
	public function __toString() {
		return 'Автомат по продажи жвачки, осталось ' . $this->getCount() . ' шт., состояние ' . $this->_state;
	}
	
	public function insertCoin() {
		$this->_state->insertCoin();
	}
	public function ejectCoin() {
		$this->_state->ejectCoin();
	}
	public function turnLever() {
		$this->_state->turnLever();
	}
	public function giveIt() {
		$this->_state->giveIt();
	}
	
}