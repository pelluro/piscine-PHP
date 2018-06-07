<?php
/**
 * Created by PhpStorm.
 * User: pellu
 * Date: 6/6/2018
 * Time: 10:19 PM
 */

class Lannister
{
    public function sleepWith($otherPerson)
    {
        if($otherPerson instanceof Lannister)
            printf("Not even if I'm drunk !\n");
        else
            printf("Let's do this.\n");
    }
}