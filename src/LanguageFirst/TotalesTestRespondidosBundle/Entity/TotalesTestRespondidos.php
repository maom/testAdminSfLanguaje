<?php

namespace LanguageFirst\TotalesTestRespondidosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LanguageFirst\TestRespondidosBundle\Entity\TestRespondidos
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="TOTALES_TEST_RESPONDIDOS")
 */
class TotalesTestRespondidos
{
    /** @ORM\Column(type="integer", unique="TRUE") 
     *  @ORM\GeneratedValue(strategy="AUTO")
     * */
    protected $clave_total_test;

    /** @ORM\Column(type="integer") */
    protected $valor_total_test;
	
    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\TotalesBundle\Entity\Totales")
    * @ORM\JoinColumn(name="clave_total", referencedColumnName="clave_total")
    */
    protected $clave_total;
   
    /**
    * @ORM\ManyToOne(targetEntity="LanguageFirst\TestRespondidosBundle\Entity\TestRespondidos")
    * @ORM\JoinColumn(name="clave_test_respondido", referencedColumnName="clave_test_respondido")
    */
    protected $clave_test_respondido;

    /**
     * Set clave_total_test
     *
     * @param integer $claveTotalTest
     */
    public function setClaveTotalTest($claveTotalTest)
    {
        $this->clave_total_test = $claveTotalTest;
    }

    /**
     * Get clave_total_test
     *
     * @return integer 
     */
    public function getClaveTotalTest()
    {
        return $this->clave_total_test;
    }

    /**
     * Set valor_total_test
     *
     * @param integer $valorTotalTest
     */
    public function setValorTotalTest($valorTotalTest)
    {
        $this->valor_total_test = $valorTotalTest;
    }

    /**
     * Get valor_total_test
     *
     * @return integer 
     */
    public function getValorTotalTest()
    {
        return $this->valor_total_test;
    }

    /**
     * Set clave_total
     *
     * @param LanguageFirst\TotalesBundle\Entity\Totales $claveTotal
     */
    public function setClaveTotal(\LanguageFirst\TotalesBundle\Entity\Totales $claveTotal)
    {
        $this->clave_total = $claveTotal;
    }

    /**
     * Get clave_total
     *
     * @return LanguageFirst\TotalesBundle\Entity\Totales 
     */
    public function getClaveTotal()
    {
        return $this->clave_total;
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