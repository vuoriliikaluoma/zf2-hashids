<?php

return array(
    'factories' => array(
        'DaMess\Hashids\Controller\Plugin\Hashids' => 'DaMess\Hashids\Factory\HashidsPluginFactory',
    ),
    'aliases'   => array(
        'hashids' => 'DaMess\Hashids\Controller\Plugin\Hashids',
    ),
);
