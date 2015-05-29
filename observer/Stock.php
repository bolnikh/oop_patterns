<?php

class Stock implements Observable {
	
	protected $aObserverList = array();
	
	public function addObserver(Observer $o) {
		$this->aObserverList[] = $o;
	}
	
	public function removeObserver(Observer $o) {
		foreach ($this->aObserverList as $k => $oObserver) {
			if ($o === $oObserver) {
				unset($this->aObserverList[$k]);
				break;
			}
		}	
	}
	public function notifyObservers($aData) {
		foreach ($this->aObserverList as $k => $oObserver) {
			$oObserver->onChange($aData);
		}		
	}
	
	public function workWithStock() {
		while ($aData = $this->getStockData()) {
			$this->notifyObservers($aData);
		}
	}
	
	public function getStockData() {
		static $i = 0;
		$i++;
		if ($i > 4) $i = 0;
		if ($i > 3) return false;
		return array($i);
	}
}
