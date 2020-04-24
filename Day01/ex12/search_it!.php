#!/usr/bin/php
<?php
if ($argc >= 3) {
	$clef = $argv[1];
	unset($argv[0], $argv[1]);
	$argv = array_reverse($argv);
	foreach ($argv as $elem) {
		$tmp = explode(':', $elem);
		if ($tmp[0] == $clef) {
			echo $tmp[1]."\n";
			exit();
		}
	}
}
?>
