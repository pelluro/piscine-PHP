#!/usr/bin/php
<?php
function ft_split($str)
{
	$i =0;
	$tab = explode(" ", $str);
	$size = count($tab);
	if ($tab != NULL)
		sort($tab);
//	foreach( $tab as $val){
//		if ($val == ' '){
//			unset($val);
//		}
//	}
	while ($i <= $size)
	{
		if (strnatcmp($tab[$i],""))
		{
			unset($tab[$i]);
			$tab = array_values($tab);
		}
		$i++;
	}
    return($tab);
}
?>
