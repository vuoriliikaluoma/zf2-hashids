<?php

namespace DaMess\Hashids;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerPluginProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module implements
    ConfigProviderInterface,
    ControllerPluginProviderInterface,
    ServiceProviderInterface,
    ViewHelperProviderInterface
{
    public function getConfig()
    {
        return require __DIR__ . '/../../config/module.config.php';
    }

    public function getControllerPluginConfig()
    {
        return require __DIR__ . '/../../config/controller.plugins.config.php';
    }

    public function getServiceConfig()
    {
        return require __DIR__ . '/../../config/services.config.php';
    }

    public function getViewHelperConfig()
    {
        return require __DIR__ . '/../../config/view.helper.config.php';
    }
}
