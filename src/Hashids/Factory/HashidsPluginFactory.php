<?php

namespace DaMess\Hashids\Factory;

use DaMess\Hashids\Controller\Plugin\Hashids;
use DaMess\Hashids\Service\HashidsService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class HashidsPluginFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var HashidsService $hashidsService
         */
        $hashidsService = $serviceLocator->getServiceLocator()->get('DaMess\Hashids\Service\HashidsService');

        return new Hashids($hashidsService);
    }
}