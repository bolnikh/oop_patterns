<?php

/**
 * Автозагрузка
 */
function __autoload($class_name) {
	include $class_name . '.php';
}


$espresso = new Espresso;

$drink = new Cream($espresso);
$drink = new Syrup($drink);

echo 'Description: ' . $drink->getDescription() . '<br/>';
echo 'cost: ' . $drink->getCost() . '<br/>';


$drink = new Syrup(new IceCream(new Honey(new Decaf)));

echo 'Description: ' . $drink->getDescription() . '<br/>';
echo 'cost: ' . $drink->getCost() . '<br/>';