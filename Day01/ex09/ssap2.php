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

$my_tab = array();
foreach ($argv as $value)
{
    if ($value != $argv[0])
    {
        $tab2= ft_split($value);
        $my_tab= array_merge($my_tab,$tab2);
    }
}

function custom_sort($s1,$s2)
{
    $cs1=strtolower($s1);
    $cs2=strtolower($s2);

    $ref="abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $i = 0;
    while ($i < strlen($s2) || $i < strlen($s1))
    {
        $poss1 = strpos($ref, ord($cs1[$i]));
        $poss2 = strpos($ref, ord($cs2[$i]));
        if ($poss1 < $poss2)
            return (-1);
        else if ($poss1 > $poss2)
            return (1);
        else
            $i++;
    }
}

usort($my_tab,"custom_sort");
foreach ($my_tab as $val)
{
    echo "$val\n";
}
?>

