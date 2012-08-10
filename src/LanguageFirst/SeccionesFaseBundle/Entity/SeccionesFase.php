<?php

namespace LanguageFirst\SeccionesFaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\SeccionesFaseBundle\Entity\SeccionesFase
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="SECCIONES_FASE")
 */
class SeccionesFase
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_seccion;

    /** @ORM\Column(type="string", length=200) */
    protected $titulo_seccion;
    
    /** @ORM\Column(type="string", length=5) */
    protected $numero_seccion;
    
    /** @ORM\Column(type="string", length=2) */
    protected $ver_num_seccion;
    
    /** @ORM\Column(type="string", length=300) */
    protected $instrucciones_seccion;
	
    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\TestBundle\Entity\Test")
    * @ORM\JoinColumn(name="clave_test", referencedColumnName="clave_test")
    */
    protected $clave_test;
    
    /**
     * @ORM\ManyToOne(targetEntity="LanguageFirst\FaseTestBundle\Entity\FaseTest")
     * @ORM\JoinColumn(name="clave_fase", referencedColumnName="clave_fase")
     */
    protected $clave_fase;
    

    /**
     * Set clave_seccion
     *
     * @param integer $claveSeccion
     */
    public function setClaveSeccion($claveSeccion)
    {
        $this->clave_seccion = $claveSeccion;
    }

    /**
     * Get clave_seccion
     *
     * @return integer 
     */
    public function getClaveSeccion()
    {
        return $this->clave_seccion;
    }

    /**
     * Set titulo_seccion
     *
     * @param string $tituloSeccion
     */
    public function setTituloSeccion($tituloSeccion)
    {
        $this->titulo_seccion = $tituloSeccion;
    }

    /**
     * Get titulo_seccion
     *
     * @return string 
     */
    public function getTituloSeccion()
    {
        return $this->titulo_seccion;
    }

    /**
     * Set numero_seccion
     *
     * @param string $numeroSeccion
     */
    public function setNumeroSeccion($numeroSeccion)
    {
        $this->numero_seccion = $numeroSeccion;
    }

    /**
     * Get numero_seccion
     *
     * @return string 
     */
    public function getNumeroSeccion()
    {
        return $this->numero_seccion;
    }

    /**
     * Set ver_num_seccion
     *
     * @param string $verNumSeccion
     */
    public function setVerNumSeccion($verNumSeccion)
    {
        $this->ver_num_seccion = $verNumSeccion;
    }

    /**
     * Get ver_num_seccion
     *
     * @return string 
     */
    public function getVerNumSeccion()
    {
        return $this->ver_num_seccion;
    }
    
    /**
     * Set instrucciones_seccion
     *
     * @param string $instruccionesSeccion
     */
    public function setInstruccionesSeccion($instruccionesSeccion)
    {
    	$this->instrucciones_seccion = $instruccionesSeccion;
    }
    
    /**
     * Get instrucciones_seccion
     *
     * @return string
     */
    public function getInstruccionesSeccion()
    {
    	return $this->instrucciones_seccion;
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

    /**
     * Set clave_fase
     *
     * @param LanguageFirst\FaseTestBundle\Entity\FaseTest $claveFase
     */
    public function setClaveFase(\LanguageFirst\FaseTestBundle\Entity\FaseTest $claveFase)
    {
        $this->clave_fase = $claveFase;
    }

    /**
     * Get clave_fase
     *
     * @return LanguageFirst\FaseTestBundle\Entity\FaseTest 
     */
    public function getClaveFase()
    {
        return $this->clave_fase;
    }

   
}