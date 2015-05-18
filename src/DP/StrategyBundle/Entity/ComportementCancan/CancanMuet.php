<?php

Namespace DP\StrategyBundle\Entity\ComportementCancan;

use DP\StrategyBundle\Interfaces\ComportementCancan;

class CancanMuet implements ComportementCancan
{
    public function cancaner(){
        return 'je reste en silence';
    }
}

