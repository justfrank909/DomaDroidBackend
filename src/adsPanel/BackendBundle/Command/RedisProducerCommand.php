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
         $mongoService->insertRequestByJSON($json);
         
        //$output->writeln($json['model_phone']);
        //TODO dividir en Document
        //}
    }

}

?>
