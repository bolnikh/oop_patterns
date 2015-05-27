<?php
// не летаем

class NoFly implements Fly {
	public function Fly() {
		echo "Я не летаю <br/>";
	}
}