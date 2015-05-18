<?php

namespace DP\StrategyBundle\Entity\AbstractClasses;

use Doctrine\ORM\Mapping as ORM;

/**
 * Canard entity.
 *
 * @ORM\Entity()
 * @ORM\Table(name="canard")
 */
abstract class Canard
{

    public function __construct()
    {
        
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * var \DP\StrategyBundle\Interfaces\ComportementVol
     *
     */
    protected $comportementVol;

    /**
     * var \DP\StrategyBundle\Interfaces\ComportementCancan
     *
     */
    protected $comportementCancan;

    /**
     * var \DP\StrategyBundle\Interfaces\ComportementNage
     *
     */
    protected $comportementNage;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    abstract function afficher();

    public function setComportementVol(\DP\StrategyBundle\Interfaces\ComportementVol $fb)
    {
        $this->comportementVol = $fb;
    }

    public function setComportementCancan(\DP\StrategyBundle\Interfaces\ComportementCancan $qb)
    {
        $this->comportementCancan = $qb;
    }

    public function setComportementNage(\DP\StrategyBundle\Interfaces\ComportementNage $qn)
    {
        $this->comportementNage = $qn;
    }

    public function effectuerVol()
    {
        return $this->comportementVol->voler();
    }

    public function effectuerCancan()
    {
        return $this->comportementCancan->cancaner();
    }

    public function effectuerNage()
    {
        return $this->comportementNage->nager();
    }

}
