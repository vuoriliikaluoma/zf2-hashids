<?php

namespace DaMess\Hashids\Tests;

use DaMess\Hashids\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Module
     */
    protected $module;

    public function setUp()
    {
        $this->module = new Module();
        parent::setup();
    }

    public function testConfigIsAnArray()
    {
        $this->assertInternalType('array', $this->module->getConfig());
    }

    public function testServiceConfigIsAnArray()
    {
        $this->assertInternalType('array', $this->module->getServiceConfig());
    }

    public function testControllerPluginConfigIsAnArray()
    {
        $this->assertInternalType('array', $this->module->getControllerPluginConfig());
    }
}