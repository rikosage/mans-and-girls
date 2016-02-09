<?php 
/*
* Основной класс, с методами, которые одинаковы для наследников
*/

abstract class Human {

	public $sex = "";
	public $name = "";
	public $surname = "";
	public $age = "";
	public $role = ""; 

/*
* В конструктор передается имя и фамилия, возраст, роль в команде. 
*/
	function __construct($name, $surname, $age = "Unknown", $role = NULL)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->age = $age;
		$this->setRole($role);
		$this->setSex();
	}

/*
* Метод, определяюший пол человека. Тело метода описывается к классах наследниках.
*/

	abstract public function setSex();

/*
* Метод, возвращающий имя человека
*/

	public function getName()
	{
		return $this->name;
	}

/*
* Метод, возвращающий фамилию человека
*/

	public function getSurname()
	{
		return $this->surname;
	}

/*
* Метод, возвращающий роль в команде
*/

	public function getRole()
	{
		$this->role;
	}

/*Метод принимает целочисленное значение, а возвращает текстовое название роли в команде*/

	private function setRole($role)
	{
		switch ($role) 
		{
			case 1:
				$this->role = "Sniper";
				break;
			case 2:
				$this->role = "Marksman";
				break;
			case 3:
				$this->role = "Machinegunner";
				break;
			case 4:
				$this->role = "Doctor";
				break;
			case 5:
				$this->role = "Sapper";
				break;
			default:
				$this->role = "Civil";
				break;
		}
	}

	function __destruct()
	{
		$this->sex = "";
		$this->name = "";
		$this->surname = "";
		$this->age = "";
		$this->role = "";
	}

}

?>