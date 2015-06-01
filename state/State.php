<?php

// состояние
interface State {
	
	public function insertCoin();
	public function ejectCoin();
	public function turnLever();
	public function giveIt();
	
}
