<?php

 abstract class Fighter
{
    protected $type;
     public function __construct($soldier)
     {
        $this->type = $soldier;
     }
     public function getType(){
         return $this->type;
     }
     abstract public function fight($target);
}