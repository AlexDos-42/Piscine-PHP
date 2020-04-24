#!/usr/bin/php
<?php
$arg = 1;
$arr = array();
foreach ($argv as $elem)
{
	if ($elem && $arg++ > 1)
	{
		$tab = explode(' ', $elem);
		$tmp = array_filter($tab);
		if ($tmp[0])
			$arr = array_merge($arr, $tmp);
	}
}
sort($arr);
foreach ($arr as $elem)
	echo $elem."\n";
?>
