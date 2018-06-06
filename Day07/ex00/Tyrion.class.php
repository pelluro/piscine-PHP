<?php
/**
 * Created by PhpStorm.
 * User: pellu
 * Date: 6/6/2018
 * Time: 9:25 PM
 */

class Tyrion extends Lannister
{
    public function __construct() {
        $parent->__construct();
        print("My name is Tyrion" . PHP_EOL);
    }

    public function getSize() {
        return "Short";
    }
}