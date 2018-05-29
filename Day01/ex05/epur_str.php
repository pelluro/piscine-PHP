<?php
if ($argc == 2)
{
    $all_elem = trim($argv[1]);
    $tab = str_ireplace("  ", " ", $all_elem);
    while (strstr($tab, "  "))
    {
        $tab = str_ireplace("  ", " ", $tab);
    }
    $my_tab = explode(" ", $tab);
    foreach ($my_tab as $elem) {
        echo $elem;
        if(end($my_tab) == $elem)
            echo"\n";
        else
        {
            echo " ";
        }
    }
}

?>