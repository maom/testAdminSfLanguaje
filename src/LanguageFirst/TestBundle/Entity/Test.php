<?php

namespace LanguageFirst\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\TestBundle\Entity\Test
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="TEST")
 */
class Test
{
    /** @ORM\Column(type="integer", unique="TRUE") */
    protected $clave_test;

    /** @ORM\Column(type="string", length=200) */
    protected $titulo_test;

    /** @ORM\Column(type="string", length=2) */
    protected $tipo_test;

    /** @ORM\Column(type="integer") */
    protected $tiempo_test;

    /** @ORM\Column(type="string", length=2) */
    protected $valores_adicionales;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set clave_test
     *
     * @param integer $claveTest
     */
    public function setClaveTest($claveTest)
    {
        $this->clave_test = $claveTest;
    }

    /**
     * Get clave_test
     *
     * @return integer 
     */
    public function getClaveTest()
    {
        return $this->clave_test;
    }

    /**
     * Set titulo_test
     *
     * @param string $tituloTest
     */
    public function setTituloTest($tituloTest)
    {
        $this->titulo_test = $tituloTest;
    }

    /**
     * Get titulo_test
     *
     * @return string 
     */
    public function getTituloTest()
    {
        return $this->titulo_test;
    }

    /**
     * Set tipo_test
     *
     * @param string $tipoTest
     */
    public function setTipoTest($tipoTest)
    {
        $this->tipo_test = $tipoTest;
    }

    /**
     * Get tipo_test
     *
     * @return string 
     */
    public function getTipoTest()
    {
        return $this->tipo_test;
    }

    /**
     * Set tiempo_test
     *
     * @param integer $tiempoTest
     */
    public function setTiempoTest($tiempoTest)
    {
        $this->tiempo_test = $tiempoTest;
    }

    /**
     * Get tiempo_test
     *
     * @return integer 
     */
    public function getTiempoTest()
    {
        return $this->tiempo_test;
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
}