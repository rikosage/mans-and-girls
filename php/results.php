<?php 
/*
* Здесь находится ответчик на POST-запросы
*/

	require("Human.php");
	require("Man.php");
	require("Girl.php");

/*
* Если в POST-запросе пришло значение defeat, меняем значение переменной
*/
	if (isset($_POST))
	{
		if (isset($_POST['defeat']))
		{
			if ($_POST['defeat'] == "mans")
			{
				Man::setDefeat();
				echo "Mans " . Man::$status;
			}
			else
			{
				echo "Girls Defeat";
			}
		}
	}
?>