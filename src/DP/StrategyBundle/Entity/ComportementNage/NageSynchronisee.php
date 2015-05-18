<?php

Namespace DP\StrategyBundle\Entity\ComportementNage;

use DP\StrategyBundle\Interfaces\ComportementNage;

class NageSynchronisee implements ComportementNage
{
    public function nager(){
        return 'je fais de la natation synchronisée!';
    }
}

