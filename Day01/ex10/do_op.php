#!/usr/bin/php
<?php
if ($argc != 4)
	echo "Incorrect Parameters\n";
else
{
	$a = trim($argv[1]);
	$ope = trim($argv[2]);
	$b = trim($argv[3]);
	if ($b == 0 && ($ope == "/" || $ope == "%"))
		echo "Error: you can't divide by zero\n";
	else if ($ope == "+")
		echo $a + $b."\n";
	else if ($ope == "-")
		echo $a - $b."\n";
	else if ($ope == "/")
		echo $a / $b."\n";
	else if ($ope == "*")
		echo $a * $b."\n";
	else if ($ope == "%")
		echo $a % $b."\n";
}
?>
