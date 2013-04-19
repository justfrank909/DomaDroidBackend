<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *Esta clase contiene los tipos de respuesta que devolvera el Controlador, habra que usar el id para identifcar si se trata
 * de el id=receiver o id=homepage
 * @author tuguu
 */
namespace adsPanel\BackendBundle\Document;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 * 
 */
class Respuesta {
    /**
     * @MongoDB\Id
     * 
     */
    protected $id;
    /**
     * @MongoDB\String
     * @Assert\NotBlank()
     */
    protected $identificador;
    /**
     * @MongoDB\String
     * @Assert\NotBlank()
     */    
    protected $intent;
    /**
     * @MongoDB\String
     */    
    protected $paquete;
    /**
     * @MongoDB\String
     */    
    protected $componente;
    /**
     * @MongoDB\String
     */    
    protected $atributo;
    /**
     * @MongoDB\String
     */    
    protected $valor;

    /**
     * Set intent
     *
     * @param string $intent
     * @return \Respuesta
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Get intent
     *
     * @return string $intent
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Set paquete
     *
     * @param string $paquete
     * @return \Respuesta
     */
    public function setPaquete($paquete)
    {
        $this->paquete = $paquete;
        return $this;
    }

    /**
     * Get paquete
     *
     * @return string $paquete
     */
    public function getPaquete()
    {
        return $this->paquete;
    }

    /**
     * Set componente
     *
     * @param string $componente
     * @return \Respuesta
     */
    public function setComponente($componente)
    {
        $this->componente = $componente;
        return $this;
    }

    /**
     * Get componente
     *
     * @return string $componente
     */
    public function getComponente()
    {
        return $this->componente;
    }

    /**
     * Set atributo
     *
     * @param string $atributo
     * @return \Respuesta
     */
    public function setAtributo($atributo)
    {
        $this->atributo = $atributo;
        return $this;
    }

    /**
     * Get atributo
     *
     * @return string $atributo
     */
    public function getAtributo()
    {
        return $this->atributo;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return \Respuesta
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * Get valor
     *
     * @return string $valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set identificador
     *
     * @param string $identificador
     * @return \Respuesta
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;
        return $this;
    }

    /**
     * Get identificador
     *
     * @return string $identificador
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
