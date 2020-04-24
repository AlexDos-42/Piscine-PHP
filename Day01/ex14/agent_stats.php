#!/usr/bin/php
<?PHP

if ($argc == 2) {

	$array = file('php://stdin');
	unset($array[0]);

	if ($argv[1] == "moyenne")
	{
		$moyenne = 0;
		$i = 0;
		foreach ($array as $elem)
		{
			$arg = explode (";", $elem);
			if (is_numeric($arg[1]) == TRUE && $arg[2] != "moulinette")
			{
				$moyenne += $arg[1];
				$i++;
			}
		}
		echo $moyenne / $i."\n";
	}
	else if ($argv[1] == "moyenne_user")
	{
		asort($array);
		foreach ($array as $key => $val)
		{
			$tmp = explode (";", $val);
			$user[$tmp[0]][$key] = $val;
		}
		foreach ($user as $elem)
		{
			$i = 0;
			$somme = 0;
			foreach ($elem as $line)
			{
				$arg = explode (";", $line);
				if (is_numeric($arg[1]) == TRUE && $arg[2] != "moulinette")
				{
					$somme += $arg[1];
					$i++;
				}
			}
			if ($i != 0)
				echo $arg[0].":".$somme / $i."\n";
		}
	}
	else if ($argv[1] == "ecart_moulinette")
	{
		asort($array);
		foreach ($array as $key => $val)
		{
			$tmp = explode (";", $val);
			$user[$tmp[0]][$key] = $val;
		}
		foreach ($user as $elem)
		{
			$i = 0;
			$somme = 0;
			$moulinette = 0;
			foreach ($elem as $line)
			{
				$arg = explode (";", $line);
				if (is_numeric($arg[1]) == TRUE && $arg[2] != "moulinette")
				{
					$somme += $arg[1];
					$i++;
				}
				if ($arg[2] == "moulinette")
					$moulinette = $arg[1];
			}
			if ($i != 0)
				echo $arg[0].":".($somme / $i - $moulinette)."\n";
		}
	}
}
?>
