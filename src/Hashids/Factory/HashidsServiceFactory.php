<?php

namespace DaMess\Hashids\Factory;

use DaMess\Hashids\Options\ModuleOptions;
use DaMess\Hashids\Service\HashidsService;
use Hashids\Hashids;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class HashidsServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /**
         * @var ModuleOptions $moduleOptions
         */
        $moduleOptions = $container->get('DaMess\Hashids\Options\ModuleOptions');

        $hashids = new Hashids(
            $moduleOptions->getSalt(),
            $moduleOptions->getMinLength(),
            $moduleOptions->getAlphabet()
        );

        return new HashidsService($hashids);
    }
}
