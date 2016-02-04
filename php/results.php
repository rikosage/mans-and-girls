<?php 
	require("Human.php");
	require("Man.php");
	require("Girl.php");

	if (isset($_POST))
	{
		if (isset($_POST['defeat']))
		{
			if ($_POST['defeat'] == "mans")
			{
				echo "Mans Defeat";
			}
			else
			{
				echo "Girls Defeat";
			}
		}
	}
?>