<?php

namespace DaMess\Hashids\Factory;

use DaMess\Hashids\Options\ModuleOptions;
use DaMess\Hashids\Service\HashidsService;
use Hashids\Hashids;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class HashidsServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /**
         * @var ModuleOptions $moduleOptions
         */
        $moduleOptions = $serviceLocator->get('DaMess\Hashids\Options\ModuleOptions');

        $hashids = new Hashids(
            $moduleOptions->getSalt(),
            $moduleOptions->getMinLength(),
            $moduleOptions->getAlphabet()
        );

        return new HashidsService($hashids);
    }
}