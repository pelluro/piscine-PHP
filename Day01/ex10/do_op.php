<?php

if ($argc != 4)
    echo "Incorrect Parameters\n";
else{
    $num1 = trim($argv[1]);
    $num2 = trim($argv[3]);
     if (strpos($argv[2],'+') !== false)
        $res = $num1 + $num2;
    elseif (strpos($argv[2],'-') !== false)
        $res = $num1 - $num2;
    elseif (strpos($argv[2],'*') !== false)
        $res = $num1 * $num2;
    elseif (strpos($argv[2],'/') !== false)
        $res = $num1 / $num2;
    elseif (strpos($argv[2],'%') !== false)
        $res = $num1 % $num2;
    echo "$res\n";
}
?>