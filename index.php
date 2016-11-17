<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Serie exo 3</title>
</head>
<body>

	<?php

		for ($i = 1; $i < 10; $i++){
			echo $i;
		}
		echo "<br/>";

		/* Exo 1 ci dessus*/

		$b = 57;
		for ($i = 0; $i < 20; $i++){
			$a = $b * $i;
			echo "<br/>" . $a;
		}  
		echo "<br/>";

		/* Exo 2 ci dessus*/

		$bb = 67;
		for ($ii = 100; $ii >=10; $ii--){
			$aa = $bb * $ii;
			echo "<br/>" . $aa;
		}
		echo "<br/>";

		/* Exo 3 ci dessus*/
		echo "<br/>";
		$nmbr = 1;
		while ($nmbr <= 10){
			echo $nmbr . "<br/>";
			$moitier = $nmbr / 2;
			$nmbr += $moitier;
		}
		echo "<br/>";

		/* Exo 4 ci dessus*/

		for ($maVariable = 1; $maVariable <= 15; $maVariable++){
			echo $maVariable . " : On y arrive presque <br/>";
		}
		echo "<br/>";
		
		/*Exo 5 ci dessus */
		for ($maVariable = 20; $maVariable >= 0; $maVariable--){
			echo $maVariable . " : C'est presque bon <br/>";
		}
		echo "<br/>";

		/* Exo 6 ci dessus*/

		for ($maVariable = 1; $maVariable <= 100; $maVariable += 15){
			echo $maVariable . " : On tient le bon bout <br/>";
		}
		echo "<br/>";

		/* Exo 7 ci dessus */

		for ($maVariable = 200; $maVariable >= 0; $maVariable -=12){
			echo $maVariable . " Enfin! <br/>";
		}
		echo "<br/>";
		/* Exo 8 ci dessus*/
	?>

</body>
</html>