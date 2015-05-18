<?php

namespace DP\StrategyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use DP\StrategyBundle\Entity\Colvert;
use DP\StrategyBundle\Entity\Mandarin;
use DP\StrategyBundle\Entity\PrototypeDeCanard;

use DP\StrategyBundle\Entity\ComportementVol\PropulsionAReaction;
use DP\StrategyBundle\Entity\ComportementNage\BrasseCoulee;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="strategy")
     * @Template()
     */
    public function indexAction()
    {
        $canards = array();
        $canards[] = new Colvert();
        $canards[] = new Mandarin();
        $canards[] = new PrototypeDeCanard();
        $canards[] = new PrototypeDeCanard();
        $canards[3]->setComportementVol(new PropulsionAReaction());
        $canards[3]->setComportementNage(new BrasseCoulee());
        
        return array('canards' => $canards);
    }
}
