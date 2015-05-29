<?php

// источник данных реализует методы
interface Observable {
	const DD = 1;
	public function addObserver(Observer $o);
	public function removeObserver(Observer $o);
	public function notifyObservers($aData);
}
