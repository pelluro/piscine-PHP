<?php
/**
 * Created by PhpStorm.
 * User: pellu
 * Date: 6/6/2018
 * Time: 9:37 PM
 */

abstract class House
{
    public function introduce()
    {
        print "House "$this->getHouseName()+ " of "+$this->getHouseSeat() +" : \""+$this->getHouseMotto()+"\"";
    }

    abstract public function getHouseName();
    abstract public function getHouseMotto() ;
    abstract public function getHouseSeat() ;
}