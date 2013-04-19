<?php

namespace adsPanel\BackendBundle\Document;



/**
 * adsPanel\BackendBundle\Document\App_Android
 */
class App_Android
{

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
     * Set name_app
     *
     * @param string $nameApp
     * @return \App_Android
     */
    public function setNameApp($nameApp)
    {
        $this->name_app = $nameApp;
        return $this;
    }

    /**
     * Get name_app
     *
     * @return string $nameApp
     */
    public function getNameApp()
    {
        return $this->name_app;
    }

    /**
     * Set package_name
     *
     * @param string $packageName
     * @return \App_Android
     */
    public function setPackageName($packageName)
    {
        $this->package_name = $packageName;
        return $this;
    }

    /**
     * Get package_name
     *
     * @return string $packageName
     */
    public function getPackageName()
    {
        return $this->package_name;
    }

    /**
     * Set version__app
     *
     * @param float $versionApp
     * @return \App_Android
     */
    public function setVersionApp($versionApp)
    {
        $this->version__app = $versionApp;
        return $this;
    }

    /**
     * Get version__app
     *
     * @return float $versionApp
     */
    public function getVersionApp()
    {
        return $this->version__app;
    }
}