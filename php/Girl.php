<?php 
class Girl extends Human{

/*
* Переменная хранит в себе значение победы для женщин. По умолчанию - в игре
*/

	public static $status = "In Game";

/*
* Метод устанавливает пол человека
*/

	public function setSex()
	{
		$this->sex = "Girl";
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