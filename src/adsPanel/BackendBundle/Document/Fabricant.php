<?php

namespace adsPanel\BackendBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;



/**
 * @MongoDB\Document
 * 
 */
class Fabricant
{
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
     * Set name
     *
     * @param string $name
     * @return \Fabricant
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
}
