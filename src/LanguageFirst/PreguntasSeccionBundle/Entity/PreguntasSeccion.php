<?php
namespace LanguageFirst\PreguntasSeccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\PreguntasSeccionBundle\Entity\PreguntasSeccion
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="PREGUNTAS_SECCION")
 */
class PreguntasSeccion
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_pregunta;

    /** @ORM\Column(type="string", length=200) */
    protected $titulo_pregunta;
    
    /** @ORM\Column(type="string", length=5) */
    protected $numero_pregunta;
    
    /** @ORM\Column(type="string", length=2) */
    protected $ver_num_pregunta;
    
    /** @ORM\Column(type="string", length=300) */
    protected $instrucciones_pregunta;
	
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
     * @ORM\ManyToOne(targetEntity="LanguageFirst\SeccionesFaseBundle\Entity\SeccionesFase")
     * @ORM\JoinColumn(name="clave_seccion", referencedColumnName="clave_seccion")
     */
    protected $clave_seccion;
    

    /**
     * Set clave_pregunta
     *
     * @param integer $clavePregunta
     */
    public function setClavePregunta($clavePregunta)
    {
        $this->clave_pregunta = $clavePregunta;
    }

    /**
     * Get clave_pregunta
     *
     * @return integer 
     */
    public function getClavePregunta()
    {
        return $this->clave_pregunta;
    }

    /**
     * Set titulo_pregunta
     *
     * @param string $tituloPregunta
     */
    public function setTituloPregunta($tituloPregunta)
    {
        $this->titulo_pregunta = $tituloPregunta;
    }

    /**
     * Get titulo_pregunta
     *
     * @return string 
     */
    public function getTituloPregunta()
    {
        return $this->titulo_pregunta;
    }

    /**
     * Set numero_pregunta
     *
     * @param string $numeroPregunta
     */
    public function setNumeroPregunta($numeroPregunta)
    {
        $this->numero_pregunta = $numeroPregunta;
    }

    /**
     * Get numero_pregunta
     *
     * @return string 
     */
    public function getNumeroPregunta()
    {
        return $this->numero_pregunta;
    }

    /**
     * Set ver_num_pregunta
     *
     * @param string $verNumPregunta
     */
    public function setVerNumPregunta($verNumPregunta)
    {
        $this->ver_num_pregunta = $verNumPregunta;
    }

    /**
     * Get ver_num_pregunta
     *
     * @return string 
     */
    public function getVerNumPregunta()
    {
        return $this->ver_num_pregunta;
    }

    /**
     * Set instrucciones_pregunta
     *
     * @param string $instruccionesPregunta
     */
    public function setInstruccionesPregunta($instruccionesPregunta)
    {
        $this->instrucciones_pregunta = $instruccionesPregunta;
    }

    /**
     * Get instrucciones_pregunta
     *
     * @return string 
     */
    public function getInstruccionesPregunta()
    {
        return $this->instrucciones_pregunta;
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

    /**
     * Set clave_seccion
     *
     * @param LanguageFirst\SeccionesFaseBundle\Entity\SeccionesFase $claveSeccion
     */
    public function setClaveSeccion(\LanguageFirst\SeccionesFaseBundle\Entity\SeccionesFase $claveSeccion)
    {
        $this->clave_seccion = $claveSeccion;
    }

    /**
     * Get clave_seccion
     *
     * @return LanguageFirst\SeccionesFaseBundle\Entity\SeccionesFase 
     */
    public function getClaveSeccion()
    {
        return $this->clave_seccion;
    }
}