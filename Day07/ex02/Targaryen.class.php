<?php
/**
 * Created by PhpStorm.
 * User: pellu
 * Date: 6/6/2018
 * Time: 9:32 PM
 */

class Targaryen
{
    public function getBurned()
    {
        if($this->resistsFire())
        {
            return "emerges naked but unharmed";
        }
        else
        {
            return "burns alive";
        }
    }

    public function resistsFire() {
        return False;
    }
}