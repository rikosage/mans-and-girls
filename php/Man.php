<?php 
class Man extends Human{

/*
* Переменная хранит в себе значение победы для команды мужчин. По умолчанию - в игре
*/
	public static $status = "In Game";

/*
* Метод устанавливает пол человека
*/

	function setSex()
	{
		$this->sex = "Man";
	}

/*
* Метод, устанавливающий значение проигрыша для команды мужчин
*/

	static function setDefeat()
	{
		self::$status = "Defeat";
	}

/*
* Метод возвращает значение победы
*/

	static function getStatus()
	{
		return $this->status;
	}

}
?>