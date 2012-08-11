<?php
namespace LanguageFirst\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\AdminBundle\Entity\Admin
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="ADMIN")
 */
class Admin 
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $ID;

    /** @ORM\Column(type="string", length=255) */
    protected $nombre_completo;
    
    /** @ORM\Column(type="string", length=80) */
    protected $usuario; 
    
    /** @ORM\Column(type="string", length=32) */
    protected $clave;
    
    /** @ORM\Column(type="string", length=2) */
    protected $nivel;
    

    /**
     * Set ID
     *
     * @param integer $iD
     */
    public function setID($iD)
    {
        $this->ID = $iD;
    }

    /**
     * Get ID
     *
     * @return integer 
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set nombre_completo
     *
     * @param string $nombreCompleto
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombre_completo = $nombreCompleto;
    }

    /**
     * Get nombre_completo
     *
     * @return string 
     */
    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }
}