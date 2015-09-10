<?php

namespace DaMess\Hashids\Tests;

use DaMess\Hashids\Factory\HashidsPluginFactory;
use Zend\Mvc\Controller\PluginManager;
use Zend\ServiceManager\ServiceManager;

class HashidsPluginFactoryTest extends \PHPUnit_Framework_TestCase
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
        $this->assertInstanceOf('Zend\ServiceManager\FactoryInterface', $this->factory);
    }

    public function testCreateService()
    {
        $serviceManager = new ServiceManager();
        $serviceManager->setAllowOverride(true);

        $pluginManager = new PluginManager();
        $pluginManager->setServiceLocator($serviceManager);

        $mockService = $this->getMockBuilder('DaMess\Hashids\Service\HashidsService')
            ->disableOriginalConstructor()
            ->getMock();

        $serviceManager->setService('DaMess\Hashids\Service\HashidsService', $mockService);

        $service = $this->factory->createService($pluginManager);

        $this->assertInstanceOf('DaMess\Hashids\Controller\Plugin\Hashids', $service);
    }
}