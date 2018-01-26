<?php

namespace DaMess\Hashids\Tests\Factory;

use DaMess\Hashids\Factory\ModuleOptionsFactory;
use Zend\ServiceManager\ServiceManager;

class ModuleOptionsFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var ModuleOptionsFactory
     */
    protected $factory;

    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    protected function setUp()
    {
        $this->factory = new ModuleOptionsFactory();
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
        $config = [ 'hashids' => [] ];

        $this->serviceManager->setService('Config', $config);

        $moduleOptions = $this->factory->__invoke($this->serviceManager, ModuleOptionsFactory::class);

        $this->assertInstanceOf('DaMess\Hashids\Options\ModuleOptions', $moduleOptions);
    }
}
