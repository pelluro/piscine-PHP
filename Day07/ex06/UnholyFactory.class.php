<?php
include_once ('Fighter.class.php');
class UnholyFactory
{
        private $_type = array();
    public function absorb($SoldierType)
    {
        if($SoldierType instanceof Fighter)
        {
            if (!in_array($SoldierType, $this->_type))
            {
                array_push($this->_type, $SoldierType);
                print"(Factory absorbed a fighter of type ".$SoldierType.")".PHP_EOL;
            }
            else
                print"(Factory already absorbed a fighter of type ".$SoldierType.")".PHP_EOL;
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
                print"(Factory fabricates a fighter of type ".$rf.")".PHP_EOL;
                return clone $KindSoldier;
            }
        }
        print"(Factory hasn't absorbed any fighter of type ".$rf.")".PHP_EOL;
        return;
    }
}   

