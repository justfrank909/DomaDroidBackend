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
class Phone_Model {
    /**
     * @MongoDB\Id
     * 
     */
    protected $id;
    /**
     * @MongoDB\String
     * @Assert\NotBlank()
     */
    protected $name_model;
    /**
     * @MongoDB\ReferenceOne(targetDocument="Fabricant")
     */
    protected $fabricant;
}


/**
 * @MongoDB\Document
 * 
 */
class Fabricant {
    /**
     * @MongoDB\Id
     * 
     */
    protected $id;
    /**
     * @MongoDB\String
     * @Assert\NotBlank()
     */
    protected $name;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name_model
     *
     * @param string $nameModel
     * @return \Phone_Model
     */
    public function setNameModel($nameModel)
    {
        $this->name_model = $nameModel;
        return $this;
    }

    /**
     * Get name_model
     *
     * @return string $nameModel
     */
    public function getNameModel()
    {
        return $this->name_model;
    }

    /**
     * Set fabricant
     *
     * @param adsPanel\BackendBundle\Document\Fabricant $fabricant
     * @return \Phone_Model
     */
    public function setFabricant(\adsPanel\BackendBundle\Document\Fabricant $fabricant)
    {
        $this->fabricant = $fabricant;
        return $this;
    }

    /**
     * Get fabricant
     *
     * @return adsPanel\BackendBundle\Document\Fabricant $fabricant
     */
    public function getFabricant()
    {
        return $this->fabricant;
    }
}
