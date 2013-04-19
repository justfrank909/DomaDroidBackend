<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RedisService
 *
 * @author tuguu
 */
namespace adsPanel\BackendBundle\Services;

class RedisService {
    protected $nameList;
    protected $redis;
    
    public function __construct($redis) {
        $this->nameList="listInfoDevice";
        $this->redis = $redis;
    }
    
    public function acolar($data){
       $this->redis->lpush($this->nameList,$data);
    }
    public function desacolar(){
       return $this->redis->lpop($this->nameList);
    }
}

?>
