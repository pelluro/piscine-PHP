#!/usr/bin/php
<?php

while (feof(STDIN) != true)
{
	echo "Entrez un nombre: ";
	$str = trim(fgets(STDIN));
	if (feof(STDIN) == true)
	{
		echo"^D\n";
		exit();
	}
	if (is_numeric($str) == 0)
	{
		echo "'$str' n'est pas un chiffre\n";
	}
	else
	{
		if(substr($str, -1) %2 == 1)
			echo "Le chiffre $str est Impair\n";
		else
			echo "Le chiffre $str est Pair\n";
	}
}
?>
