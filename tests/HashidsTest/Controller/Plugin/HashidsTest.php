<?php

namespace DaMess\Hashids\Tests\Controller\Plugin;

use DaMess\Hashids\Controller\Plugin\Hashids;

class HashidsTest extends \PHPUnit_Framework_TestCase
{
    public function testHashids()
    {
        $mockService = $this->getMockBuilder('DaMess\Hashids\Service\HashidsService')
            ->disableOriginalConstructor()
            ->getMock();

        $plugin = new Hashids($mockService);

        $this->assertInstanceOf('Zend\Mvc\Controller\Plugin\AbstractPlugin', $plugin);
        $this->assertInstanceOf('DaMess\Hashids\Service\HashidsService', $plugin());
    }
}