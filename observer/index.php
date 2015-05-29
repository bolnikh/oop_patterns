<?php

/**
 * Автозагрузка
 */
function __autoload($class_name) {
	include $class_name . '.php';
}

$oStock = new Stock;
$oLogger = new Logger;
$oRobot = new Robot;

$oStock->addObserver($oLogger);
$oStock->addObserver($oRobot);

$oStock->workWithStock();

// проверим удаление наблюдателя
$oStock->removeObserver($oRobot);
$oStock->workWithStock();
