<?php

namespace adsPanel\BackendBundle\Document;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 * 
 */
class AppAndroid
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
    protected $nameApp;
    /**
     * @MongoDB\String
     * @Assert\NotBlank()
     */
    protected $packageName;
    /**
     * @MongoDB\String
     * @Assert\NotBlank()
     */
    protected $versionApp;

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
     * Set nameApp
     *
     * @param string $nameApp
     * @return \AppAndroid
     */
    public function setNameApp($nameApp)
    {
        $this->nameApp = $nameApp;
        return $this;
    }

    /**
     * Get nameApp
     *
     * @return string $nameApp
     */
    public function getNameApp()
    {
        return $this->nameApp;
    }

    /**
     * Set packageName
     *
     * @param string $packageName
     * @return \AppAndroid
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
        return $this;
    }

    /**
     * Get packageName
     *
     * @return string $packageName
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * Set versionApp
     *
     * @param string $versionApp
     * @return \AppAndroid
     */
    public function setVersionApp($versionApp)
    {
        $this->versionApp = $versionApp;
        return $this;
    }

    /**
     * Get versionApp
     *
     * @return string $versionApp
     */
    public function getVersionApp()
    {
        return $this->versionApp;
    }
}
