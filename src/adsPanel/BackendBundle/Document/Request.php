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
     * @MongoDB\ReferenceOne(targetDocument="Phone_Model")
     */
    protected $foreign_phone_model;
    /**
     * @MongoDB\ReferenceOne(targetDocument="Network_Operator")
     */
    protected $foreign_network_operator ;

   // protected $foreign_campaign ;
    /**
     * @Assert\NotBlank()
     * @MongoDB\Float
     */
    protected $longitude ;
    /**
     * @Assert\NotBlank()
     * @MongoDB\Float
     */
    protected $lactitude;
    /**
     * @MongoDB\Int
     */
    protected $sdk_version ;
    /**
     * @MongoDB\Boolean
     */
    protected $wifi;
    /**
     * @MongoDB\String
     */
    protected $android_id;
    /**
     * @MongoDB\Boolean
     */
    protected $sd;
    /**
     * @MongoDB\String
     */
    protected $email ;
    /**
     * @Assert\NotBlank()
     * @MongoDB\String
     */
    protected $phone_number;
    /**
     * @MongoDB\ReferenceOne(targetDocument="Language")
     */
    protected $foreign_language;
    /**
     * @MongoDB\ReferenceOne(targetDocument="Country")
     */
    protected $foreign_country;
    /**
     * @MongoDB\String
     */
    protected $screen_size;
    /**
     * @MongoDB\String
     */
    protected $NNNxNNN;
    /**
     * @MongoDB\Boolean
     */
    protected $is_tablet;
    /**
     * @MongoDB\String
     */
    protected $network_subtype;
    /**
     * @MongoDB\ReferenceOne(targetDocument="App_Android")
     */
    protected $foreign_app;



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
     * Set foreign_phone_model
     *
     * @param adsPanel\BackendBundle\Document\Phone_Model $foreignPhoneModel
     * @return \Request
     */
    public function setForeignPhoneModel(\adsPanel\BackendBundle\Document\Phone_Model $foreignPhoneModel)
    {
        $this->foreign_phone_model = $foreignPhoneModel;
        return $this;
    }

    /**
     * Get foreign_phone_model
     *
     * @return adsPanel\BackendBundle\Document\Phone_Model $foreignPhoneModel
     */
    public function getForeignPhoneModel()
    {
        return $this->foreign_phone_model;
    }

    /**
     * Set foreign_network_operator
     *
     * @param adsPanel\BackendBundle\Document\Network_Operator $foreignNetworkOperator
     * @return \Request
     */
    public function setForeignNetworkOperator(\adsPanel\BackendBundle\Document\Network_Operator $foreignNetworkOperator)
    {
        $this->foreign_network_operator = $foreignNetworkOperator;
        return $this;
    }

    /**
     * Get foreign_network_operator
     *
     * @return adsPanel\BackendBundle\Document\Network_Operator $foreignNetworkOperator
     */
    public function getForeignNetworkOperator()
    {
        return $this->foreign_network_operator;
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
     * Set lactitude
     *
     * @param float $lactitude
     * @return \Request
     */
    public function setLactitude($lactitude)
    {
        $this->lactitude = $lactitude;
        return $this;
    }

    /**
     * Get lactitude
     *
     * @return float $lactitude
     */
    public function getLactitude()
    {
        return $this->lactitude;
    }

    /**
     * Set sdk_version
     *
     * @param int $sdkVersion
     * @return \Request
     */
    public function setSdkVersion($sdkVersion)
    {
        $this->sdk_version = $sdkVersion;
        return $this;
    }

    /**
     * Get sdk_version
     *
     * @return int $sdkVersion
     */
    public function getSdkVersion()
    {
        return $this->sdk_version;
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
     * Set android_id
     *
     * @param string $androidId
     * @return \Request
     */
    public function setAndroidId($androidId)
    {
        $this->android_id = $androidId;
        return $this;
    }

    /**
     * Get android_id
     *
     * @return string $androidId
     */
    public function getAndroidId()
    {
        return $this->android_id;
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
     * Set phone_number
     *
     * @param string $phoneNumber
     * @return \Request
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;
        return $this;
    }

    /**
     * Get phone_number
     *
     * @return string $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set foreign_language
     *
     * @param adsPanel\BackendBundle\Document\Language $foreignLanguage
     * @return \Request
     */
    public function setForeignLanguage(\adsPanel\BackendBundle\Document\Language $foreignLanguage)
    {
        $this->foreign_language = $foreignLanguage;
        return $this;
    }

    /**
     * Get foreign_language
     *
     * @return adsPanel\BackendBundle\Document\Language $foreignLanguage
     */
    public function getForeignLanguage()
    {
        return $this->foreign_language;
    }

    /**
     * Set foreign_country
     *
     * @param adsPanel\BackendBundle\Document\Country $foreignCountry
     * @return \Request
     */
    public function setForeignCountry(\adsPanel\BackendBundle\Document\Country $foreignCountry)
    {
        $this->foreign_country = $foreignCountry;
        return $this;
    }

    /**
     * Get foreign_country
     *
     * @return adsPanel\BackendBundle\Document\Country $foreignCountry
     */
    public function getForeignCountry()
    {
        return $this->foreign_country;
    }

    /**
     * Set screen_size
     *
     * @param string $screenSize
     * @return \Request
     */
    public function setScreenSize($screenSize)
    {
        $this->screen_size = $screenSize;
        return $this;
    }

    /**
     * Get screen_size
     *
     * @return string $screenSize
     */
    public function getScreenSize()
    {
        return $this->screen_size;
    }

    /**
     * Set NNNxNNN
     *
     * @param string $nNNxNNN
     * @return \Request
     */
    public function setNNNxNNN($nNNxNNN)
    {
        $this->NNNxNNN = $nNNxNNN;
        return $this;
    }

    /**
     * Get NNNxNNN
     *
     * @return string $nNNxNNN
     */
    public function getNNNxNNN()
    {
        return $this->NNNxNNN;
    }

    /**
     * Set is_tablet
     *
     * @param boolean $isTablet
     * @return \Request
     */
    public function setIsTablet($isTablet)
    {
        $this->is_tablet = $isTablet;
        return $this;
    }

    /**
     * Get is_tablet
     *
     * @return boolean $isTablet
     */
    public function getIsTablet()
    {
        return $this->is_tablet;
    }

    /**
     * Set network_subtype
     *
     * @param string $networkSubtype
     * @return \Request
     */
    public function setNetworkSubtype($networkSubtype)
    {
        $this->network_subtype = $networkSubtype;
        return $this;
    }

    /**
     * Get network_subtype
     *
     * @return string $networkSubtype
     */
    public function getNetworkSubtype()
    {
        return $this->network_subtype;
    }

    /**
     * Set foreign_app
     *
     * @param adsPanel\BackendBundle\Document\App_Android $foreignApp
     * @return \Request
     */
    public function setForeignApp(\adsPanel\BackendBundle\Document\App_Android $foreignApp)
    {
        $this->foreign_app = $foreignApp;
        return $this;
    }

    /**
     * Get foreign_app
     *
     * @return adsPanel\BackendBundle\Document\App_Android $foreignApp
     */
    public function getForeignApp()
    {
        return $this->foreign_app;
    }
}
