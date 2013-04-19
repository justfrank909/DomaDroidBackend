<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WorkerRedistMongo
 *
 * @author tuguu
 */

namespace adsPanel\BackendBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use adsPanel\BackendBundle\Services\MongoService;
use adsPanel\BackendBundle\Services\RedisService;

class RedisProducerCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('adsPanel:worker')
                ->setDescription('Add request to the redis')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $redisService = $this->getContainer()->get('my_redis');
        $mongoService = $this->getContainer()->get('my_mongo');
        
        //for ($i = 0; $i < 500; $i++) {
         $json = json_decode($redisService->desacolar(),true);
         $json['sdk_version'];
         $json['model_phone'];
         $json['fabricant_phone'];
         $json['network_operator'];
         $json['imei'];
         $json['phone_number'];
         $json['language'];
         $json['country'];
         $json['wifi'];
         $json['android_id'];
         $json['sd'];
         $json['screen_size'];
         $json['isTablet'];
         $json['network_subtype'];
         $json['name_app'];
         $json['package_name'];
         $json['version_app'];
         
         if(isset($json['latitude'])){
             
         }
         if(isset($json['longitude'])){
             
         }
         if(isset($json['email'])){
             
         }
         
        //$output->writeln($json['model_phone']);
        //TODO dividir en Document
        //}
    }

}

?>
