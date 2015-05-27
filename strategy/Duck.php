<?php

abstract class Duck {
	
	public $flyType; // Fly
	public $quackType; // Quack
	
	// плывем
	public function swim() {
		echo "Я плыву <br/>";
	}
	
	// летим
	public function fly() {
		$this->flyType->fly();
	}
	
	// крякаем
	public function quack() {
		$this->quackType->quack();
	}
	
	abstract public function display();
}
