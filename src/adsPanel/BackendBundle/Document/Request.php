<?php

namespace adsPanel\BackendBundle\Document;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 * 
 */
class Request {
    /**
     * @MongoDB\Id
     * 
     */
    protected $id;
    /**
     * @MongoDB\String
     */
    protected $imei ;
    /**
     * @MongoDB\ReferenceOne(targetDocument="PhoneModel")
     */
    protected $foreignPhoneModel;
    /**
     * @MongoDB\ReferenceOne(targetDocument="NetworkOperator")
     */
    protected $foreignNetworkOperator ;

   // protected $foreignCampaign ;
    /**
     * @Assert\NotBlank()
     * @MongoDB\Float
     */
    protected $longitude ;
    /**
     * @Assert\NotBlank()
     * @MongoDB\Float
     */
    protected $latitude;
    /**
     * @MongoDB\Int
     */
    protected $sdkVersion ;
    /**
     * @MongoDB\Boolean
     */
    protected $wifi;
    /**
     * @MongoDB\String
     */
    protected $androidId;
    /**
     * @MongoDB\Boolean
     */
    protected $sd;
    /**
     * @MongoDB\String
     */
    protected $email ;
    /**
     * @MongoDB\String
     */
    protected $phoneNumber;
    /**
     * @MongoDB\ReferenceOne(targetDocument="Language")
     */
    protected $foreignLanguage;
    /**
     * @MongoDB\ReferenceOne(targetDocument="Country")
     */
    protected $foreignCountry;
    /**
     * @MongoDB\String
     */
    protected $screenSize;
    /**
     * @MongoDB\Boolean
     */
    protected $isTablet;
    /**
     * @MongoDB\String
     */
    protected $networkSubtype;
    /**
     * @MongoDB\ReferenceOne(targetDocument="AppAndroid")
     */
    protected $foreignApp;


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
     * Set imei
     *
     * @param string $imei
     * @return \Request
     */
    public function setImei($imei)
    {
        $this->imei = $imei;
        return $this;
    }

    /**
     * Get imei
     *
     * @return string $imei
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * Set foreignPhoneModel
     *
     * @param adsPanel\BackendBundle\Document\PhoneModel $foreignPhoneModel
     * @return \Request
     */
    public function setForeignPhoneModel(\adsPanel\BackendBundle\Document\PhoneModel $foreignPhoneModel)
    {
        $this->foreignPhoneModel = $foreignPhoneModel;
        return $this;
    }

    /**
     * Get foreignPhoneModel
     *
     * @return adsPanel\BackendBundle\Document\PhoneModel $foreignPhoneModel
     */
    public function getForeignPhoneModel()
    {
        return $this->foreignPhoneModel;
    }

    /**
     * Set foreignNetworkOperator
     *
     * @param adsPanel\BackendBundle\Document\NetworkOperator $foreignNetworkOperator
     * @return \Request
     */
    public function setForeignNetworkOperator(\adsPanel\BackendBundle\Document\NetworkOperator $foreignNetworkOperator)
    {
        $this->foreignNetworkOperator = $foreignNetworkOperator;
        return $this;
    }

    /**
     * Get foreignNetworkOperator
     *
     * @return adsPanel\BackendBundle\Document\NetworkOperator $foreignNetworkOperator
     */
    public function getForeignNetworkOperator()
    {
        return $this->foreignNetworkOperator;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return \Request
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return \Request
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set sdkVersion
     *
     * @param int $sdkVersion
     * @return \Request
     */
    public function setSdkVersion($sdkVersion)
    {
        $this->sdkVersion = $sdkVersion;
        return $this;
    }

    /**
     * Get sdkVersion
     *
     * @return int $sdkVersion
     */
    public function getSdkVersion()
    {
        return $this->sdkVersion;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     * @return \Request
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
        return $this;
    }

    /**
     * Get wifi
     *
     * @return boolean $wifi
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set androidId
     *
     * @param string $androidId
     * @return \Request
     */
    public function setAndroidId($androidId)
    {
        $this->androidId = $androidId;
        return $this;
    }

    /**
     * Get androidId
     *
     * @return string $androidId
     */
    public function getAndroidId()
    {
        return $this->androidId;
    }

    /**
     * Set sd
     *
     * @param boolean $sd
     * @return \Request
     */
    public function setSd($sd)
    {
        $this->sd = $sd;
        return $this;
    }

    /**
     * Get sd
     *
     * @return boolean $sd
     */
    public function getSd()
    {
        return $this->sd;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return \Request
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return \Request
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set foreignLanguage
     *
     * @param adsPanel\BackendBundle\Document\Language $foreignLanguage
     * @return \Request
     */
    public function setForeignLanguage(\adsPanel\BackendBundle\Document\Language $foreignLanguage)
    {
        $this->foreignLanguage = $foreignLanguage;
        return $this;
    }

    /**
     * Get foreignLanguage
     *
     * @return adsPanel\BackendBundle\Document\Language $foreignLanguage
     */
    public function getForeignLanguage()
    {
        return $this->foreignLanguage;
    }

    /**
     * Set foreignCountry
     *
     * @param adsPanel\BackendBundle\Document\Country $foreignCountry
     * @return \Request
     */
    public function setForeignCountry(\adsPanel\BackendBundle\Document\Country $foreignCountry)
    {
        $this->foreignCountry = $foreignCountry;
        return $this;
    }

    /**
     * Get foreignCountry
     *
     * @return adsPanel\BackendBundle\Document\Country $foreignCountry
     */
    public function getForeignCountry()
    {
        return $this->foreignCountry;
    }

    /**
     * Set screenSize
     *
     * @param string $screenSize
     * @return \Request
     */
    public function setScreenSize($screenSize)
    {
        $this->screenSize = $screenSize;
        return $this;
    }

    /**
     * Get screenSize
     *
     * @return string $screenSize
     */
    public function getScreenSize()
    {
        return $this->screenSize;
    }

    /**
     * Set isTablet
     *
     * @param boolean $isTablet
     * @return \Request
     */
    public function setIsTablet($isTablet)
    {
        $this->isTablet = $isTablet;
        return $this;
    }

    /**
     * Get isTablet
     *
     * @return boolean $isTablet
     */
    public function getIsTablet()
    {
        return $this->isTablet;
    }

    /**
     * Set networkSubtype
     *
     * @param string $networkSubtype
     * @return \Request
     */
    public function setNetworkSubtype($networkSubtype)
    {
        $this->networkSubtype = $networkSubtype;
        return $this;
    }

    /**
     * Get networkSubtype
     *
     * @return string $networkSubtype
     */
    public function getNetworkSubtype()
    {
        return $this->networkSubtype;
    }

    /**
     * Set foreignApp
     *
     * @param adsPanel\BackendBundle\Document\AppAndroid $foreignApp
     * @return \Request
     */
    public function setForeignApp(\adsPanel\BackendBundle\Document\AppAndroid $foreignApp)
    {
        $this->foreignApp = $foreignApp;
        return $this;
    }

    /**
     * Get foreignApp
     *
     * @return adsPanel\BackendBundle\Document\AppAndroid $foreignApp
     */
    public function getForeignApp()
    {
        return $this->foreignApp;
    }
}
