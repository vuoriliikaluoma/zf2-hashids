<?php

namespace DaMess\Hashids\Tests\Factory;

use DaMess\Hashids\Factory\ModuleOptionsFactory;
use Zend\ServiceManager\ServiceManager;

class ModuleOptionsFactoryTest extends \PHPUnit_Framework_TestCase
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
        $this->assertInstanceOf('Zend\ServiceManager\FactoryInterface', $this->factory);
    }

    public function testCreateService()
    {
        $config = array('hashids' => array());

        $this->serviceManager->setService('Config', $config);

        $moduleOptions = $this->factory->createService($this->serviceManager);

        $this->assertInstanceOf('DaMess\Hashids\Options\ModuleOptions', $moduleOptions);
    }
}