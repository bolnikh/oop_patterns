<?php

// наблюдатели реализуют этот интерфейс - метод onChange() вызывается при изменении данных
interface Observer {
	public function onChange($aData);
}