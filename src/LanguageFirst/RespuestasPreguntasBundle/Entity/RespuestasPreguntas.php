<?php
namespace LanguageFirst\RespuestasPreguntasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\RespuestasPreguntasBundle\Entity\RespuestasPreguntas
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="RESPUESTAS_PREGUNTAS")
 */
class RespuestasPreguntas
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_respuesta;

    /** @ORM\Column(type="text") */
    protected $titulo_respuesta;
    
    /** @ORM\Column(type="string", length=5) */
    protected $numero_respuesta; 
    
    /** @ORM\Column(type="string", length=2) */
    protected $ver_num_respuesta;
    
    /** @ORM\Column(type="string", length=300) */
    protected $instrucciones_respuesta;
	
    /** @ORM\Column(type="string", length=2) */
    protected $tipo_campo;
    
    /** @ORM\Column(type="integer") */
    protected $largo_campo;
    
    /** @ORM\Column(type="integer") */
    protected $alto_campo;
    
     /** @ORM\Column(type="string", length=2) */
    protected $forzoso;

    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\PreguntasSeccionBundle\Entity\PreguntasSeccion")
    * @ORM\JoinColumn(name="clave_pregunta", referencedColumnName="clave_pregunta")
    */
    protected $clave_pregunta;
    
    /**
     * @ORM\ManyToOne(targetEntity="LanguageFirst\FaseTestBundle\Entity\FaseTest")
     * @ORM\JoinColumn(name="clave_fase", referencedColumnName="clave_fase")
     */
    protected $clave_fase;
    
    /** @ORM\Column(type="string", length=255) */
    protected $categoria_respuesta;
    
    

    /**
     * Set clave_respuesta
     *
     * @param integer $claveRespuesta
     */
    public function setClaveRespuesta($claveRespuesta)
    {
        $this->clave_respuesta = $claveRespuesta;
    }

    /**
     * Get clave_respuesta
     *
     * @return integer 
     */
    public function getClaveRespuesta()
    {
        return $this->clave_respuesta;
    }

    /**
     * Set titulo_respuesta
     *
     * @param text $tituloRespuesta
     */
    public function setTituloRespuesta($tituloRespuesta)
    {
        $this->titulo_respuesta = $tituloRespuesta;
    }

    /**
     * Get titulo_respuesta
     *
     * @return text 
     */
    public function getTituloRespuesta()
    {
        return $this->titulo_respuesta;
    }

    /**
     * Set numero_respuesta
     *
     * @param string $numeroRespuesta
     */
    public function setNumeroRespuesta($numeroRespuesta)
    {
        $this->numero_respuesta = $numeroRespuesta;
    }

    /**
     * Get numero_respuesta
     *
     * @return string 
     */
    public function getNumeroRespuesta()
    {
        return $this->numero_respuesta;
    }

    /**
     * Set ver_num_respuesta
     *
     * @param string $verNumRespuesta
     */
    public function setVerNumRespuesta($verNumRespuesta)
    {
        $this->ver_num_respuesta = $verNumRespuesta;
    }

    /**
     * Get ver_num_respuesta
     *
     * @return string 
     */
    public function getVerNumRespuesta()
    {
        return $this->ver_num_respuesta;
    }

    /**
     * Set instrucciones_respuesta
     *
     * @param string $instruccionesRespuesta
     */
    public function setInstruccionesRespuesta($instruccionesRespuesta)
    {
        $this->instrucciones_respuesta = $instruccionesRespuesta;
    }

    /**
     * Get instrucciones_respuesta
     *
     * @return string 
     */
    public function getInstruccionesRespuesta()
    {
        return $this->instrucciones_respuesta;
    }

    /**
     * Set tipo_campo
     *
     * @param string $tipoCampo
     */
    public function setTipoCampo($tipoCampo)
    {
        $this->tipo_campo = $tipoCampo;
    }

    /**
     * Get tipo_campo
     *
     * @return string 
     */
    public function getTipoCampo()
    {
        return $this->tipo_campo;
    }

    /**
     * Set largo_campo
     *
     * @param integer $largoCampo
     */
    public function setLargoCampo($largoCampo)
    {
        $this->largo_campo = $largoCampo;
    }

    /**
     * Get largo_campo
     *
     * @return integer 
     */
    public function getLargoCampo()
    {
        return $this->largo_campo;
    }

    /**
     * Set alto_campo
     *
     * @param integer $altoCampo
     */
    public function setAltoCampo($altoCampo)
    {
        $this->alto_campo = $altoCampo;
    }

    /**
     * Get alto_campo
     *
     * @return integer 
     */
    public function getAltoCampo()
    {
        return $this->alto_campo;
    }

    /**
     * Set forzoso
     *
     * @param string $forzoso
     */
    public function setForzoso($forzoso)
    {
        $this->forzoso = $forzoso;
    }

    /**
     * Get forzoso
     *
     * @return string 
     */
    public function getForzoso()
    {
        return $this->forzoso;
    }

    /**
     * Set categoria_respuesta
     *
     * @param string $categoriaRespuesta
     */
    public function setCategoriaRespuesta($categoriaRespuesta)
    {
        $this->categoria_respuesta = $categoriaRespuesta;
    }

    /**
     * Get categoria_respuesta
     *
     * @return string 
     */
    public function getCategoriaRespuesta()
    {
        return $this->categoria_respuesta;
    }

    /**
     * Set clave_pregunta
     *
     * @param LanguageFirst\PreguntasSeccionBundle\Entity\PreguntasSeccion $clavePregunta
     */
    public function setClavePregunta(\LanguageFirst\PreguntasSeccionBundle\Entity\PreguntasSeccion $clavePregunta)
    {
        $this->clave_pregunta = $clavePregunta;
    }

    /**
     * Get clave_pregunta
     *
     * @return LanguageFirst\PreguntasSeccionBundle\Entity\PreguntasSeccion 
     */
    public function getClavePregunta()
    {
        return $this->clave_pregunta;
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