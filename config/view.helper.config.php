<?php

return [
    'factories' => [
        'DaMess\Hashids\View\Helper\Hashids' => 'DaMess\Hashids\Factory\HashidsHelperFactory',
    ],
    'aliases'   => [
        'hashids' => 'DaMess\Hashids\View\Helper\Hashids',
    ],
];
