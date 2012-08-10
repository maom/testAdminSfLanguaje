<?php

namespace LanguageFirst\TotalesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\TotalesBundle\Entity\Totales
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="TOTALES")
 */
class Totales
{
    /** @ORM\Column(type="integer", unique="TRUE") */
    protected $clave_total;

    /** @ORM\Column(type="string", length=200) */
    protected $titulo_total;

    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\TestBundle\Entity\Test")
    * @ORM\JoinColumn(name="clave_test", referencedColumnName="clave_test")
    */
    protected $clave_test;
    

    /**
     * Set clave_total
     *
     * @param integer $claveTotal
     */
    public function setClaveTotal($claveTotal)
    {
        $this->clave_total = $claveTotal;
    }

    /**
     * Get clave_total
     *
     * @return integer 
     */
    public function getClaveTotal()
    {
        return $this->clave_total;
    }

    /**
     * Set titulo_total
     *
     * @param string $tituloTotal
     */
    public function setTituloTotal($tituloTotal)
    {
        $this->titulo_total = $tituloTotal;
    }

    /**
     * Get titulo_total
     *
     * @return string 
     */
    public function getTituloTotal()
    {
        return $this->titulo_total;
    }

    /**
     * Set clave_test
     *
     * @param LanguageFirst\TestBundle\Entity\Test $claveTest
     */
    public function setClaveTest(\LanguageFirst\TestBundle\Entity\Test $claveTest)
    {
        $this->clave_test = $claveTest;
    }

    /**
     * Get clave_test
     *
     * @return LanguageFirst\TestBundle\Entity\Test 
     */
    public function getClaveTest()
    {
        return $this->clave_test;
    }
}