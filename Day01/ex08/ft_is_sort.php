<?php
function ft_is_sort($tab)
{
	$tmp = $tab;
	sort($tmp);
	if ($tmp != $tab)
		return(FALSE);
	return (TRUE);
}
?>
