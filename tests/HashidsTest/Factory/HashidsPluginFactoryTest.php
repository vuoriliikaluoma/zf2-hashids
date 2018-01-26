<?php

namespace DaMess\Hashids\Tests;

use DaMess\Hashids\Factory\HashidsPluginFactory;
use Zend\Mvc\Controller\PluginManager;
use Zend\ServiceManager\ServiceManager;

class HashidsPluginFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var HashidsPluginFactory
     */
    protected $factory;

    protected function setUp()
    {
        $this->factory = new HashidsPluginFactory();
        parent::setUp();
    }

    public function testInstance()
    {
        $this->assertInstanceOf('Zend\ServiceManager\Factory\FactoryInterface', $this->factory);
    }

    public function testCreateService()
    {
        $serviceManager = new ServiceManager();
        $serviceManager->setAllowOverride(true);

        $mockService = $this->getMockBuilder('DaMess\Hashids\Service\HashidsService')
            ->disableOriginalConstructor()
            ->getMock();

        $serviceManager->setService('DaMess\Hashids\Service\HashidsService', $mockService);

        $service = $this->factory->__invoke($serviceManager, HashidsPluginFactory::class);

        $this->assertInstanceOf('DaMess\Hashids\Controller\Plugin\Hashids', $service);
    }
}
