<?php
/**
 * Created by PhpStorm.
 * User: pellu
 * Date: 6/6/2018
 * Time: 10:31 PM
 */

class NightsWatch implements IFighter
{
    private $members;
    private $memberscount = 0;

    public function recruits($recruit)
    {
        if($recruit instanceof IFighter)
        {
            $this->members[$this->memberscount] = $recruit;
            $this->memberscount++;
        }
    }

    public function fight()
    {
        foreach ($this->members as $member)
        {
            $member->fight();
        }
    }
}