<?php
namespace LanguageFirst\OpcionesRespuestasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\OpcionesRespuestasBundle\Entity\OpcionesRespuestas
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="OPCIONES_RESPUESTAS")
 */
class OpcionesRespuestas
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_opcion;

    /** @ORM\Column(type="string", length=150) */
    protected $valor_opcion;
    
    /** @ORM\Column(type="string", length=2) */
    protected $valor_correcto; 
    
    /** @ORM\Column(type="string", length=2) */
    protected $selected_opcion;

    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\RespuestasPreguntasBundle\Entity\RespuestasPreguntas")
    * @ORM\JoinColumn(name="clave_respuesta", referencedColumnName="clave_respuesta")
    */
    protected $clave_respuesta;
    
    /** @ORM\Column(type="string", length=200) */
    protected $valor_opcional;
    

    /**
     * Set clave_opcion
     *
     * @param integer $claveOpcion
     */
    public function setClaveOpcion($claveOpcion)
    {
        $this->clave_opcion = $claveOpcion;
    }

    /**
     * Get clave_opcion
     *
     * @return integer 
     */
    public function getClaveOpcion()
    {
        return $this->clave_opcion;
    }

    /**
     * Set valor_opcion
     *
     * @param string $valorOpcion
     */
    public function setValorOpcion($valorOpcion)
    {
        $this->valor_opcion = $valorOpcion;
    }

    /**
     * Get valor_opcion
     *
     * @return string 
     */
    public function getValorOpcion()
    {
        return $this->valor_opcion;
    }

    /**
     * Set valor_correcto
     *
     * @param string $valorCorrecto
     */
    public function setValorCorrecto($valorCorrecto)
    {
        $this->valor_correcto = $valorCorrecto;
    }

    /**
     * Get valor_correcto
     *
     * @return string 
     */
    public function getValorCorrecto()
    {
        return $this->valor_correcto;
    }

    /**
     * Set selected_opcion
     *
     * @param string $selectedOpcion
     */
    public function setSelectedOpcion($selectedOpcion)
    {
        $this->selected_opcion = $selectedOpcion;
    }

    /**
     * Get selected_opcion
     *
     * @return string 
     */
    public function getSelectedOpcion()
    {
        return $this->selected_opcion;
    }

    /**
     * Set valor_opcional
     *
     * @param string $valorOpcional
     */
    public function setValorOpcional($valorOpcional)
    {
        $this->valor_opcional = $valorOpcional;
    }

    /**
     * Get valor_opcional
     *
     * @return string 
     */
    public function getValorOpcional()
    {
        return $this->valor_opcional;
    }

    /**
     * Set clave_respuesta
     *
     * @param LanguageFirst\RespuestasPreguntasBundle\Entity\RespuestasPreguntas $claveRespuesta
     */
    public function setClaveRespuesta(\LanguageFirst\RespuestasPreguntasBundle\Entity\RespuestasPreguntas $claveRespuesta)
    {
        $this->clave_respuesta = $claveRespuesta;
    }

    /**
     * Get clave_respuesta
     *
     * @return LanguageFirst\RespuestasPreguntasBundle\Entity\RespuestasPreguntas 
     */
    public function getClaveRespuesta()
    {
        return $this->clave_respuesta;
    }
}