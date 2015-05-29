<?php

class Logger implements Observer {
	public function onChange($aData) {
		echo "Сохраним данные рынка в архив <br/>";	
	}
}
