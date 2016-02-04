<?php 
	require("php/Human.php");
	require("php/Man.php");
	require("php/Girl.php");
	
	$girlNames = ["Penny" , "Maria" , "Bonita" , "Anny" , "Lucy"];
	$manNames = ["Jonh" , "Dave" , "Curt" , "Quentin" , "Bill"];
	$surnames = ["Fisher" , "Rassel" , "Smith" , "Backlend" , "Fogel" , "Watney" , "Watson" , "Black" , "Ritchman", "Burns"];

	$people = [];

	for ($i=0; $i < 10; $i++) 
	{ 
		if ($i%2!=1) 
		{
			$girl = new Girl($girlNames[rand(0,4)], $surnames[rand(0, $i)], rand(18,40), rand(0, 5));
			array_push($people, $girl);
		}
		else
		{
			$man = new Man($manNames[rand(0,4)], $surnames[rand(0, $i)], rand(18,40), rand(0, 5));
			array_push($people, $man);
		}	
	}
?>