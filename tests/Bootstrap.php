<?php
namespace DaMess\Hashids\Tests;

$vendorDir = __DIR__ . '/../vendor';

if (file_exists($file = $vendorDir . '/autoload.php')) {
    require_once $file;
} else {
    if (file_exists($file = './vendor/autoload.php')) {
        require_once $file;
    } else {
        throw new \RuntimeException("Composer autoload file does not exist. Have you run composer install?");
    }
}
