<?php

namespace DaMess\Hashids;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerPluginProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ServiceProviderInterface, ConfigProviderInterface, ControllerPluginProviderInterface
{
    public function getServiceConfig()
    {
        return require __DIR__ . '/../../config/services.config.php';
    }

    public function getConfig()
    {
        return require __DIR__ . '/../../config/module.config.php';
    }

    public function getControllerPluginConfig()
    {
        return require __DIR__ . '/../../config/controller.plugins.config.php';
    }
}
