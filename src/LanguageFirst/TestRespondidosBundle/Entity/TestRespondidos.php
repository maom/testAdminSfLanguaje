<?php

namespace LanguageFirst\TestRespondidosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\TestRespondidosBundle\Entity\TestRespondidos
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="TEST_RESPONDIDOS")
 */
class TestRespondidos
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_test_respondido;

    /** @ORM\Column(type="string", length=2) */
    protected $valores_adicionales;
	
    /** @ORM\Column(type="date") */
    protected $fecha;
    
    /** @ORM\Column(type="time") */
    protected $tiempo_real;
    
    /** @ORM\Column(type="string", length=2) */
    protected $revisado;
    
    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\TestBundle\Entity\Test")
    * @ORM\JoinColumn(name="clave_test", referencedColumnName="clave_test")
    */
    protected $clave_test;
    
    /** @ORM\Column(type="string", length=60) */
    protected $correo;
    

    /**
     * Set clave_test_respondido
     *
     * @param integer $claveTestRespondido
     */
    public function setClaveTestRespondido($claveTestRespondido)
    {
        $this->clave_test_respondido = $claveTestRespondido;
    }

    /**
     * Get clave_test_respondido
     *
     * @return integer 
     */
    public function getClaveTestRespondido()
    {
        return $this->clave_test_respondido;
    }

    /**
     * Set valores_adicionales
     *
     * @param string $valoresAdicionales
     */
    public function setValoresAdicionales($valoresAdicionales)
    {
        $this->valores_adicionales = $valoresAdicionales;
    }

    /**
     * Get valores_adicionales
     *
     * @return string 
     */
    public function getValoresAdicionales()
    {
        return $this->valores_adicionales;
    }

    /**
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set tiempo_real
     *
     * @param time $tiempoReal
     */
    public function setTiempoReal($tiempoReal)
    {
        $this->tiempo_real = $tiempoReal;
    }

    /**
     * Get tiempo_real
     *
     * @return time 
     */
    public function getTiempoReal()
    {
        return $this->tiempo_real;
    }

    /**
     * Set revisado
     *
     * @param string $revisado
     */
    public function setRevisado($revisado)
    {
        $this->revisado = $revisado;
    }

    /**
     * Get revisado
     *
     * @return string 
     */
    public function getRevisado()
    {
        return $this->revisado;
    }

    /**
     * Set correo
     *
     * @param string $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
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