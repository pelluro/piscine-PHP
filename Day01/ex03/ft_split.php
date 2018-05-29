#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab = explode(" ", $str);

	foreach ($tab as $key => $value)
    {
        if (empty($value) && $value != '0')
            unset($tab[$key]);
    }
    sort($tab);
    return($tab);
}
?>
