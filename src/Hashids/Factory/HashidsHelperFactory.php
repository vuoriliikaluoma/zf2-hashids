<?php

namespace DaMess\Hashids\Factory;

use DaMess\Hashids\View\Helper\Hashids;
use DaMess\Hashids\Service\HashidsService;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class HashidsHelperFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /**
         * @var HashidsService $hashidsService
         */
        $hashidsService = $container->get('DaMess\Hashids\Service\HashidsService');

        return new Hashids($hashidsService);
    }
}
