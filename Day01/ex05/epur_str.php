#!/usr/bin/php
<?php
	$str = trim($$argv[1]);
	$str = preg_replace('/\s\s+/', ' ', $str);
	echo "$str\n";
?>