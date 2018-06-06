<?php
/**
 * Created by PhpStorm.
 * User: pellu
 * Date: 6/6/2018
 * Time: 10:20 PM
 */

class Jaime extends Lannister
{
    public function sleepWith($otherPerson)
    {
        if($otherPerson instanceof Cersei)
            printf("With pleasure, but only in a tower in Winterfell, then.");
        else if($otherPerson instanceof Lannister)
            printf("Not even if I'm drunk !");
        else
            printf("Let's do this.");
    }
}