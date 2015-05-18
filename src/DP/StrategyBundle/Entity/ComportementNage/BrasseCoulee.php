<?php

Namespace DP\StrategyBundle\Entity\ComportementNage;

use DP\StrategyBundle\Interfaces\ComportementNage;

class BrasseCoulee implements ComportementNage
{
    public function nager(){
        return 'je fais de la brasse coulée !';
    }
}

