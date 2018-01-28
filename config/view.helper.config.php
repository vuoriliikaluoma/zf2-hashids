<?php

return array(
    'factories' => array(
        'DaMess\Hashids\View\Helper\Hashids' => 'DaMess\Hashids\Factory\HashidsHelperFactory',
    ),
    'aliases'   => array(
        'hashids' => 'DaMess\Hashids\View\Helper\Hashids',
    ),
);
