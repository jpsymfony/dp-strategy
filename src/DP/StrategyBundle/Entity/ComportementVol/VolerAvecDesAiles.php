<?php

Namespace DP\StrategyBundle\Entity\ComportementVol;

use DP\StrategyBundle\Interfaces\ComportementVol;

class VolerAvecDesAiles implements ComportementVol
{
    public function voler(){
        return 'je vole ';
    }
}

