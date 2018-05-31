<?php
/**
 * Created by PhpStorm.
 * User: mipham
 * Date: 5/29/18
 * Time: 4:56 PM
 */

include("ft_is_sort.php");
$tab = array("111111", "4444","55", "6", "4", "3");
if (ft_is_sort($tab))
    echo "Le tableau est trie\n";
else
    echo "Le tableau n’est pas trie\n";
?>