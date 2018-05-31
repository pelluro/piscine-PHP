#!/usr/bin/php
<?php

if ($argc != 2)
    echo "Incorrect Parameters\n";
else {
    if (strpos($argv[1], '+') !== false)
        $tab = explode('+', $argv[1]);
    elseif (strpos($argv[1], '-') !== false)
        $tab = explode('-', $argv[1]);
    elseif (strpos($argv[1], '*') !== false)
        $tab = explode('*', $argv[1]);
    elseif (strpos($argv[1], '/') !== false)
        $tab = explode('/', $argv[1]);
    elseif (strpos($argv[1], '%') !== false)
        $tab = explode('%', $argv[1]);
    else {
        echo "Syntax Error\n";
        exit();
    }
    if (count($tab) != 2) {
        echo "Syntax Error\n";
        exit();
    } else {
        foreach ($tab as $value) {
            $tab2[] = trim($value);
        }
        if (ctype_digit($tab2[0]) && ctype_digit($tab2[1])) {
            if (strpos($argv[1], '+') !== false)
                $res = $tab2[0] + $tab2[1];
            elseif (strpos($argv[1], '-') !== false)
                $res = $tab2[0] - $tab2[1];
            elseif (strpos($argv[1], '*') !== false)
                $res = $tab2[0] * $tab2[1];
            elseif (strpos($argv[1], '/') !== false)
            {
                if ($tab2[1] == 0)
                    echo "Division by zero not cool";
                else
                    $res = $tab2[0] / $tab2[1];
            }
            elseif (strpos($argv[1], '%') !== false)
            {
                if ($tab2[1] == 0)
                    echo "Modulo by zero not cool";
                else
                $res = $tab2[0] % $tab2[1];
            }
            echo "$res\n";
        }
        else{
            echo "Syntax Error\n";
        }

    }
}
?>