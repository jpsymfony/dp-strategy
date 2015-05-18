<?php

Namespace DP\StrategyBundle\Entity\ComportementVol;

use DP\StrategyBundle\Interfaces\ComportementVol;

class NePasVoler implements ComportementVol
{
    public function voler(){
        return 'je ne sais pas voler';
    }
}

