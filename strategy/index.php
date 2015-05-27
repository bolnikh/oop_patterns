<?php
// работаем с утками

/**
 * Автозагрузка
 */
function __autoload($class_name) {
	include $class_name . '.php';
}


$wildDuck = new WildDuck();
$wildDuck->display();
$wildDuck->swim();
$wildDuck->fly();
$wildDuck->quack();

$gadwall = new Gadwall();
$gadwall->display();
$gadwall->swim();
$gadwall->fly();
$gadwall->quack();

$rubberDuck = new RubberDuck();
$rubberDuck->display();
$rubberDuck->swim();
$rubberDuck->fly();
$rubberDuck->quack();


$decoyDuck = new DecoyDuck();
$decoyDuck->display();
$decoyDuck->swim();
$decoyDuck->fly();
$decoyDuck->quack();

// переопределим полет
$decoyDuck->flyType = new AirplaneFly;
$decoyDuck->fly();
