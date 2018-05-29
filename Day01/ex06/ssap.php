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
sort($my_tab);
foreach ($my_tab as $val)
{
        echo "$val\n";
}
?>