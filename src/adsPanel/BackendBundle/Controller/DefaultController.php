<?php

namespace adsPanel\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use adsPanel\BackendBundle\Services\MongoService;
use adsPanel\BackendBundle\Services\RedisService;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Default:index.html.twig', array('name' => 'HELLO'));
    }
    
    public function insertAction(){
        $redis=$this->get('my_redis');
        $json=$_POST['json'];
        //$redis->acolar($json);
        //$json='{"phone_model":"GT-S5360","imei":"354913053162570","package_name":"com.tuguu.adsandroid","screen_size":"240x320","sd":"true","network_operator":"Movistar","sdk_version":"10","name_app":"AdsAndroid","country":"ES","fabricant_phone":"samsung","android_id":"8ef7eeb68824f6af","network_subtype":"HSDPA","wifi":"false","isTablet":"false","language":"es","version_app":"1.0"}';
        //$json='{"a":1,"b":2}';
        //var_dump(json_decode($json, true));
        $redis->acolar($json);
        return new Response();
    }
    
    public function changeHomePageAction(){
        $service=$this->get('my_mongo');
        return new Response($service->getJSONordersToAndroid());
    }
    
}
