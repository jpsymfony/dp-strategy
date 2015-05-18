<?php

Namespace DP\StrategyBundle\Entity\ComportementCancan;

use DP\StrategyBundle\Interfaces\ComportementCancan;

class Coincoin implements ComportementCancan
{
    public function cancaner(){
        return 'je fais coincoin';
    }
}

