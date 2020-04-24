#!/usr/bin/php
<?php
function ft_split($str){
	$tab = explode(' ', $str);
	$ret = array_filter($tab);
	return $ret;
}
if ($argc >= 2)
{
	$str = ft_split($argv[1]);
	$first = array_shift($str);
	foreach ($str as $elem)
		echo ($elem)." ";
	echo $first;
}
?>

