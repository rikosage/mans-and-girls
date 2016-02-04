<?php 

abstract class Human {

	public $sex = "";
	public $name = "";
	public $surname = "";
	public $age = "";
	public $role = ""; 

	public function __construct($name, $surname, $age = "Unknown", $role = "", $side = "Wild")
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->age = $age;
		$this->setRole($role);
		$this->setSex();
	}

	abstract public function setSex();

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function getRole()
	{
		$this->role;
	}

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

}

?>