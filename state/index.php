<?php

/**
 * Автозагрузка
 */
function __autoload($class_name) {
	include $class_name . '.php';
}

$oAutomat = new Automat(2);
echo $oAutomat . '<br/>';

$oAutomat->insertCoin();
$oAutomat->ejectCoin();

echo $oAutomat . '<br/>';

$oAutomat->insertCoin();
$oAutomat->turnLever();
$oAutomat->giveIt();

echo $oAutomat . '<br/>';

$oAutomat->insertCoin();
$oAutomat->turnLever();
$oAutomat->giveIt();

echo $oAutomat . '<br/>';

$oAutomat->insertCoin();
$oAutomat->turnLever();
$oAutomat->giveIt();

echo $oAutomat . '<br/>';
