<?php
/**
 * Created by PhpStorm.
 * User: pellu
 * Date: 6/6/2018
 * Time: 10:43 PM
 */

class UnholyFactory
{
    private $_type = array[];
    public function absorb($SoldierType){
        if($SoldierType instanceof Fighter)
        {
            if (!in_array($SoldierType, $this->_type))
            {
                $this->_type=$SoldierType;
                print"(Factory absorbed a fighter of type".$SoldierType.")".PHP_EOL;
            }
            else
                print"(Factory already absorbed a fighter of type".$SoldierType.")".PHP_EOL;
        }
        else
            print"(Factory can't absorbed this, it's not a fighter)".PHP_EOL;
    }

    public function fabricate($rf)
    {
        foreach ($this->_type as $KindSoldier)
        {
            if ((string) $KindSoldier == $rf)
            {
                print"(Factory fabricates a fighter of type".$rf.")".PHP_EOL;
                return clone $KindSoldier;
            }
        }
        print"(Factory hasn't absorbed any fighter of type".$rf.")".PHP_EOL;
        return;
    }
}

