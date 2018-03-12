# ZF3 Hashids
This is a fork of [ZF2 Hashids](https://github.com/dannym87/zf2-hashids) updated for ZF3.

I've also added a View Helper and access to the `encodeHex` and `decodeHex` methods of Hashids.

## Full documentation

This is a Zend Framework 3 module for the [PHP Hashids library](https://github.com/ivanakimov/hashids.php).

See the full documentation of the library at [http://hashids.org/php](http://hashids.org/php).

## Requirements

- PHP 5.6 or higher
- PHP-GMP (GNU Multiple Precision)
- Zend Framework 3

See [https://github.com/ivanakimov/hashids.php](https://github.com/ivanakimov/hashids.php) for more information.

## Installation using Composer

```sh
composer require vuoriliikaluoma/zf3-hashids
```

Add the module to ./config/application.config.php

```php
<?php

return [
    'modules' => [
        ...
        'Application',
        'DaMess\Hashids',
        ...
    ],
    ...
];
```

## Options

The Hashids module has some options to allow you to quickly change the configuration. After installing the module, copy ./vendor/vuoriliikaluoma/zf3-hashids/config/hashids.global.php.dist to ./config/autoload/hashids.global.php and change the values as required.

- **salt** - Default value of ''. This is the value used when encoding an ID into a hash. Note: Please do not change this value once it's been set.
- **min_length** - Default value of 22. This defines the minimum length of the encoded hash value.
- **alphabet** - Default value of 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'. The alphabet used when encoding an ID. This must be at least 16 characters long and not contain any spaces.

```php
<?php

return [
    'hashids' => [
        // The salt to use when encoding an id to a hash and decoding a hash to an id
        // NOTE: Do not change this once it's been set
        'salt' => '',
        // Minimum length of the generated hash
        'min_length' => 22,
        // Define which characters are used when building the hash
        'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
    ],
];
```

## Usage

This module provides a HashidsService and a controller plugin, see below for examples of use.

### HashidsService

The HashidsService can be retrieved from the ServiceManager.

```php
<?php

use DaMess\Hashids\Service\HashidsService;

$service = $container->get(HashidsService::class);
$service->encode(1); // 39J4q2VolejRejNmGQBW71 (assuming default config values)
$service->decode('39J4q2VolejRejNmGQBW71'); // array(1) (assuming default config values)
```

### Inside a Controller class or View file

ZF3 Hashids comes with a Controller Plugin and View Helper so it can be used from any controller method or view file.

```php
<?php

$this->hashids()->encode(1); // 39J4q2VolejRejNmGQBW71 (assuming default config values)
$this->hashids()->decode('39J4q2VolejRejNmGQBW71'); // array(1) (assuming default config values)
```
