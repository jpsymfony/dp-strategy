<?php

namespace DP\StrategyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use DP\StrategyBundle\Entity\AbstractClasses\Canard;

/**
 * Colvert
 *
 * @ORM\Table(name="colvert")
 * @ORM\Entity
 */
class Colvert extends Canard
{
    public function __construct()
    {
        $this->comportementCancan = new ComportementCancan\Cancan();
        $this->comportementVol = new ComportementVol\VolerAvecDesAiles();
        $this->comportementNage = new ComportementNage\NageSynchronisee();
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function afficher() 
    {
        return 'je suis un colvert';
    }
}
