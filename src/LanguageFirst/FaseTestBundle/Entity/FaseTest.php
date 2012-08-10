<?php

namespace LanguageFirst\FaseTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\FaseTestBundle\Entity\FaseTest
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="FASES_TEST")
 */
class FaseTest
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_fase;

    /** @ORM\Column(type="string", length=200) */
    protected $titulo_fase;
    
    
    /** @ORM\Column(type="string", length=300) */
    protected $instrucciones_fase;
	
    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\TestBundle\Entity\Test")
    * @ORM\JoinColumn(name="clave_test", referencedColumnName="clave_test")
    */
    protected $clave_test;

    /**
     * Set clave_fase
     *
     * @param integer $claveFase
     */
    public function setClaveFase($claveFase)
    {
        $this->clave_fase = $claveFase;
    }

    /**
     * Get clave_fase
     *
     * @return integer 
     */
    public function getClaveFase()
    {
        return $this->clave_fase;
    }

    /**
     * Set titulo_fase
     *
     * @param string $tituloFase
     */
    public function setTituloFase($tituloFase)
    {
        $this->titulo_fase = $tituloFase;
    }

    /**
     * Get titulo_fase
     *
     * @return string 
     */
    public function getTituloFase()
    {
        return $this->titulo_fase;
    }

    /**
     * Set instrucciones_fase
     *
     * @param string $instruccionesFase
     */
    public function setInstruccionesFase($instruccionesFase)
    {
        $this->instrucciones_fase = $instruccionesFase;
    }

    /**
     * Get instrucciones_fase
     *
     * @return string 
     */
    public function getInstruccionesFase()
    {
        return $this->instrucciones_fase;
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