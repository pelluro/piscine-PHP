#!/usr/bin/php
<?php
if ($argc > 2)
    {
    foreach ($argv as $elem)
        {
            $key = strpos($elem,":");
            $value = substr($elem, 0, $key);
            if (!strcmp($value,$argv[1]))
            $res = substr($elem, $key + 1);
        }
        if (!empty($res))
            echo "$res\n";
    }
?>