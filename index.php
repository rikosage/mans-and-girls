<?php require ("init.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/style.css">
	<title>Paintball</title>
</head>
<body>
<div class = "wrapper">
	<div class="container">
		<?php 
		for ($i=0; $i < 10; $i++)
		{ 
			if ($i%2!= 1)
			{
				$now = "girls";
			}
			else
			{
				$now = "mans";
			}
		
			echo "
		<div class=".$now.">
			<div class=\"lab-container\">
				<p class=\"lab\">Пол</p>
				<p class=\"lab\">Имя</p>
				<p class=\"lab\">Фамилия</p>
				<p class=\"lab\">Возраст</p>
				<p class=\"lab\">Роль</p>
			</div>
			<div class=\"info-container\">
				<p class=\"info\">".$people[$i]->sex."</p>
				<p class=\"info\">".$people[$i]->name."</p>
				<p class=\"info\">".$people[$i]->surname."</p>
				<p class=\"info\">".$people[$i]->age."</p>
				<p class=\"info\">".$people[$i]->role."</p>
			</div>
		</div>";
		}
		?>
	</div>
<div class="container">
	<div class="mans">
		<form action="php/results.php" method = "post">
			<input type="hidden" name = "defeat" value = "mans">
			<input class = "defeat-button" type="submit" value = "Defeat">

		</form>
	</div>
	<div class="girls">
		<form action="php/results.php" method = "post">
			<input type="hidden" name = "defeat" value = "girls">
			<input class = "defeat-button" type="submit" value = "Defeat">
		</form>
	</div>
</div>
</div>
</body>
</html>