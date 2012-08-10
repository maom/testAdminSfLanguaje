<?php
// src/LanguageFirst/UsuarioBundle/Entity/Usuario.php
namespace LanguageFirst\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="USUARIO")
 */
class Usuario
{
	/**  @ORM\Column(type="string", length=100, unique="TRUE")*/
	protected $correo;
	
	/** @ORM\Column(type="string", length=32) */
	protected $clave;
	
	/** @ORM\Column(type="string", length=100) */
	protected $nombre;
	
	/** @ORM\Column(type="string", length=100) */
	protected $apellido;
	
	/** @ORM\Column(type="smallint") */
	protected $estado;
	
	/** @ORM\Column(type="string", length=100) */
	protected $ciudad;
	
	/** @ORM\Column(type="string", length=150) */
	protected $empresa;
	
	/** @ORM\Column(type="string", length=100) */
	protected $puesto;
	
	/** @ORM\Column(type="string", length=20) */
	protected $tel_personal;
	
	/** @ORM\Column(type="string", length=20) */
	protected $tel_empresa;
	
	/** @ORM\Column(type="string", length=2) */
	protected $confirmado;
	
	/** @ORM\Column(type="string", length=32) */
	protected $uniqid;
	

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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set estado
     *
     * @param smallint $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * Get estado
     *
     * @return smallint 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    }

    /**
     * Get puesto
     *
     * @return string 
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set tel_personal
     *
     * @param string $telPersonal
     */
    public function setTelPersonal($telPersonal)
    {
        $this->tel_personal = $telPersonal;
    }

    /**
     * Get tel_personal
     *
     * @return string 
     */
    public function getTelPersonal()
    {
        return $this->tel_personal;
    }

    /**
     * Set tel_empresa
     *
     * @param string $telEmpresa
     */
    public function setTelEmpresa($telEmpresa)
    {
        $this->tel_empresa = $telEmpresa;
    }

    /**
     * Get tel_empresa
     *
     * @return string 
     */
    public function getTelEmpresa()
    {
        return $this->tel_empresa;
    }

    /**
     * Set confirmado
     *
     * @param string $confirmado
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;
    }

    /**
     * Get confirmado
     *
     * @return string 
     */
    public function getConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * Set uniqid
     *
     * @param string $uniqid
     */
    public function setUniqid($uniqid)
    {
        $this->uniqid = $uniqid;
    }

    /**
     * Get uniqid
     *
     * @return string 
     */
    public function getUniqid()
    {
        return $this->uniqid;
    }
    
    public function __toString()
    {
    	return $this->getNombre();
    }
}