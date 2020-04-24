#!/usr/bin/php
<?php
function ft_split($str){
	$tab = explode(' ', $str);
	$ret = array_filter($tab);
	sort($ret);
	return $ret;
}
?>
