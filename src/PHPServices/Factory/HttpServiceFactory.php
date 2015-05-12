<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 20/11/14
 * Time: 9:32 AM
 */

namespace PHPServices\Factory;


use PHPServices\HttpService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class HttpServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        $config = $serviceManager->get('Config');

        $httpService = new HttpService($config);

        return $httpService;
    }
} 