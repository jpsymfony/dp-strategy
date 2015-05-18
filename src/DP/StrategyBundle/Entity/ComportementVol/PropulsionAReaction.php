<?php

Namespace DP\StrategyBundle\Entity\ComportementVol;

use DP\StrategyBundle\Interfaces\ComportementVol;

class PropulsionAReaction implements ComportementVol
{
    public function voler(){
        return 'je vole avec un réacteur';
    }
}

