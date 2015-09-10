# ZF2 Hashids

[![Build Status](https://travis-ci.org/dannym87/zf2-hashids.svg?branch=master)](https://travis-ci.org/dannym87/zf2-hashids)
[![Coverage Status](https://coveralls.io/repos/dannym87/zf2-hashids/badge.svg?branch=master&service=github)](https://coveralls.io/github/dannym87/zf2-hashids?branch=master)

## Full documentation

This is a Zend Framework 2 module for the [PHP Hashids library](https://github.com/ivanakimov/hashids.php). See the full documentation of the library at [http://hashids.org/php](http://hashids.org/php).

## Requirements

- PHP 5.3.3 or higher
- Zend Framework 2.1 onwards

(Optional) GNU Multiple Precision or BCMath to allow integers greater than 1,000,000,000 to be encoded. See [https://github.com/ivanakimov/hashids.php](https://github.com/ivanakimov/hashids.php) for more information.

## Installation using Composer

```sh
composer require damess/zf2-hashids
```

## Options

The Hashids module has some options to allow you to quickly change the configuration. After installing the module, copy ./vendor/damess/zf2-hashids/config/hashids.global.php.dist to ./config/autoload/hashids.global.php and change the values as required.

- **salt** - Default value of ''. This is the value used when encoding an ID into a hash. Note: Please do not change this value once it's been set.
- **min_length** - Default value of 22. This defines the minimum length of the encoded hash value.
- **alphabet** - Default value of 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'. The alphabet used when encoding an ID. This must be at least 16 characters long and not contain any spaces.

```php
<?php

return array(
    'hashids' => array(
        /*
         * The salt to use for encryption
         * NOTE: Do not change this once it's been set
         */
        'salt'       => '',
        /*
         * Minimum length of the generated hash
         */
        'min_length' => 22,
        /*
         * Define which characters are used when building the hash
         */
        'alphabet'   => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
    ),
);
```

## Usage

This module provides a HashidsService and a controller plugin, see below for examples of use.

### HashidsService

The HashidsService can be retrieved from the ServiceManager.

### Inside a factory implementing Zend\ServiceManager\FactoryInterace

```php
<?php

$service = $serviceLocator->get('DaMess\Hashids\Service\HashidsService');
$service->encode(1); // 39J4q2VolejRejNmGQBW71 (assuming default config values)
$service->decode('39J4q2VolejRejNmGQBW71'); // array(1) (assuming default config values)
```

### Inside a controller or class implementing Zend\ServiceManager\ServiceLocatorAwareInterface that's been retrieved from the ServiceManager

```php
<?php

$service = $this->getServiceLocator()->get('DaMess\Hashids\Service\HashidsService');
$service->encode(1); // 39J4q2VolejRejNmGQBW71 (assuming default config values)
$service->decode('39J4q2VolejRejNmGQBW71'); // array(1) (assuming default config values)
```

## Controller plugin

The Hashids module provides a hashids controller plugin. This is how it can be used

```php
<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'hash' => $this->hashids()->encode(1), // 39J4q2VolejRejNmGQBW71
            'id'   => $this->hashids()->decode('39J4q2VolejRejNmGQBW71'), // array(1)
        ));
    }
}
```