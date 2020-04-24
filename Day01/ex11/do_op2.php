#!/usr/bin/php
<?php
if ($argc != 2)
	echo "Incorrect Parameters\n";
else
{
	$arg = sscanf($argv[1], "%d %c %d %s");
	if (is_numeric($arg[0]) == TRUE && $arg[1] && is_numeric($arg[2]) == TRUE && !$arg[3])
	{
		if ($arg[2] == 0 && ($arg[1] == "/" || $arg[1]== "%"))
			echo "Error: you can't divide by zero\n";
		else if($arg[1] == '*')
			echo $arg[0] * $arg[2]."\n";
		else if($arg[1] == '+')
			echo $arg[0] + $arg[2]."\n";
		else if($arg[1] == '-')
			echo $arg[0] - $arg[2]."\n";
		else if($arg[1] == '/')
			echo $arg[0] / $arg[2]."\n";
		else if($arg[1] == '%')
			echo $arg[0] % $arg[2]."\n";
		else
			echo "Syntax Error\n";
	}
	else
		echo "Syntax Error\n";
}
?>
