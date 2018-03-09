<?php

return [
    'factories' => [
        'DaMess\Hashids\Controller\Plugin\Hashids' => 'DaMess\Hashids\Factory\HashidsPluginFactory',
    ],
    'aliases'   => [
        'hashids' => 'DaMess\Hashids\Controller\Plugin\Hashids',
    ],
];
