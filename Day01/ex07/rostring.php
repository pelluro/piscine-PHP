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
    return($tab);
}
$tab2 = ft_split($argv[1]);
$size=count($tab2);
if ($size === 0)
    exit();
$last =array_shift($tab2);
foreach ($tab2 as $elem)
{
    echo "$elem ";
}
echo "$last\n";
?>