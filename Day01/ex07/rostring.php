<?php
function ft_split_not_sort($str)
{
    $tab = explode(" ", $str);

    foreach ($tab as $key => $value)
    {
        if (empty($value) && $value != '0')
            unset($tab[$key]);
    }
    return($tab);
}



?>