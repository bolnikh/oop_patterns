<?php

class Robot implements Observer {
	public function onChange($aData) {
		echo "Рассчитаем позицию на рынке <br/>";	
	}
}
