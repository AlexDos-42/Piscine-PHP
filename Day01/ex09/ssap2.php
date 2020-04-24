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

if($argc > 1)
{
	foreach ($arr as $elem) {
		if(ctype_alpha($elem) == TRUE)
			$tmpalpha[] = $elem;
	}
	if (isset($tmpalpha)){
		sort($tmpalpha, SORT_NATURAL | SORT_FLAG_CASE);
		foreach ($tmpalpha as $elem)
			echo $elem."\n";
	}

	foreach ($arr as $elem){
		if(is_numeric($elem) == TRUE)
			$tmpnum[] = $elem;
	}
	if (isset($tmpnum)){
		sort($tmpnum);
		foreach ($tmpnum as $elem)
			echo $elem."\n";
	}

	foreach ($arr as $elem){
		if(is_numeric($elem) == FALSE && ctype_alpha($elem) == FALSE)
			$tmpother[] = $elem;
	}
	if(isset($tmpother)){
		sort($tmpother);
		foreach ($tmpother as $elem)
			echo $elem."\n";
	}
}
?>
