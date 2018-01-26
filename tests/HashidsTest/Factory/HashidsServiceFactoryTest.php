<?php

namespace DaMess\Hashids\Tests\Factory;

use DaMess\Hashids\Factory\HashidsServiceFactory;
use DaMess\Hashids\Options\ModuleOptions;
use Zend\ServiceManager\ServiceManager;

class HashidsServiceFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var HashidsServiceFactory
     */
    protected $factory;

    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    protected function setUp()
    {
        $this->factory = new HashidsServiceFactory();
        $this->serviceManager = new ServiceManager();
        $this->serviceManager->setAllowOverride(true);
        parent::setUp();
    }

    public function testInstance()
    {
        $this->assertInstanceOf('Zend\ServiceManager\Factory\FactoryInterface', $this->factory);
    }

    public function testCreateService()
    {
        $this->serviceManager->setService('DaMess\Hashids\Options\ModuleOptions', new ModuleOptions());

        $service = $this->factory->__invoke($this->serviceManager, HashidsServiceFactory::class);

        $this->assertInstanceOf('DaMess\Hashids\Service\HashidsService', $service);
    }
}
