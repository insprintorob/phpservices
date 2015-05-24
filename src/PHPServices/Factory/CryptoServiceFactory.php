<?php
/**
 * Created by PhpStorm.
 * User: robbie
 * Date: 20/11/14
 * Time: 9:32 AM
 */

namespace PHPServices\Factory;


use PHPServices\CryptoService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CryptoServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        $config = $serviceManager->get('Config');

        $cryptoService = new CryptoService($config);

        return $cryptoService;
    }
} 