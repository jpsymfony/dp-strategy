<?php

Namespace DP\StrategyBundle\Entity\ComportementCancan;

use DP\StrategyBundle\Interfaces\ComportementCancan;

class Cancan implements ComportementCancan
{
    public function cancaner(){
        return 'je fais cancan';
    }
}

