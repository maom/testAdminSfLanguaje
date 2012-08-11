<?php
namespace LanguageFirst\RespuestasUsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\RespuestasUsuariosBundle\Entity\RespuestasUsuarios
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="RESPUESTAS_USUARIOS")
 */
class RespuestasUsuarios
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_respuesta_usuario;

    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\RespuestasPreguntasBundle\Entity\RespuestasPreguntas")
    * @ORM\JoinColumn(name="clave_respuesta", referencedColumnName="clave_respuesta")
    */
    protected $clave_respuesta;
    
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
    
    /** @ORM\Column(type="text") */
    protected $texto_respuesta;
    
    /**
     * @ORM\ManyToOne(targetEntity="LanguageFirst\TestRespondidosBundle\Entity\TestRespondidos")
     * @ORM\JoinColumn(name="clave_test_respondido", referencedColumnName="clave_test_respondido")
     */
    protected $clave_test_respondido; 

    /**
     * Set clave_respuesta_usuario
     *
     * @param integer $claveRespuestaUsuario
     */
    public function setClaveRespuestaUsuario($claveRespuestaUsuario)
    {
        $this->clave_respuesta_usuario = $claveRespuestaUsuario;
    }

    /**
     * Get clave_respuesta_usuario
     *
     * @return integer 
     */
    public function getClaveRespuestaUsuario()
    {
        return $this->clave_respuesta_usuario;
    }

    /**
     * Set texto_respuesta
     *
     * @param text $textoRespuesta
     */
    public function setTextoRespuesta($textoRespuesta)
    {
        $this->texto_respuesta = $textoRespuesta;
    }

    /**
     * Get texto_respuesta
     *
     * @return text 
     */
    public function getTextoRespuesta()
    {
        return $this->texto_respuesta;
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
     * Set clave_test_respondido
     *
     * @param LanguageFirst\TestRespondidosBundle\Entity\TestRespondidos $claveTestRespondido
     */
    public function setClaveTestRespondido(\LanguageFirst\TestRespondidosBundle\Entity\TestRespondidos $claveTestRespondido)
    {
        $this->clave_test_respondido = $claveTestRespondido;
    }

    /**
     * Get clave_test_respondido
     *
     * @return LanguageFirst\TestRespondidosBundle\Entity\TestRespondidos 
     */
    public function getClaveTestRespondido()
    {
        return $this->clave_test_respondido;
    }
}