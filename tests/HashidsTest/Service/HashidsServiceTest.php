<?php

namespace DaMess\Hashids\Tests\Service;

use DaMess\Hashids\Service\HashidsService;
use Hashids\Hashids;

class HashidsServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var HashidsService
     */
    protected $service;

    public function setUp()
    {
        $this->service = new HashidsService(new Hashids('salt', 20));
        parent::setUp();
    }

    public function testInstance()
    {
        $this->assertInstanceOf('DaMess\Hashids\Service\ObfuscatorInterface', $this->service);
    }

    public function testEncodeValue()
    {
        $hash = $this->service->encode(1);
        $this->assertEquals(20, strlen($hash));
        $this->assertEquals('B6AGYqzxkXG8ZWaevwVK', $hash);
    }

    public function testDecodeVaue()
    {
        $id = $this->service->decode('B6AGYqzxkXG8ZWaevwVK');
        $this->assertInternalType('int', $id[0]);
        $this->assertEquals(1, $id[0]);
    }
}
