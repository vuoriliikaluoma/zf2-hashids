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
        $array = $this->service->decode('B6AGYqzxkXG8ZWaevwVK');
        $this->assertInternalType('int', $array[0]);
        $this->assertEquals(1, $array[0]);
    }

    public function testEncodeHexValue()
    {
        $hash = $this->service->encodeHex('a');
        $this->assertEquals(20, strlen($hash));
        $this->assertEquals('ygLEDaAV8vxmRYGXQ0ZO', $hash);
    }

    public function testDecodeHexVaue()
    {
        $nr = $this->service->decodeHex('ygLEDaAV8vxmRYGXQ0ZO');
        $this->assertInternalType('string', $nr);
        $this->assertEquals('a', $nr);
    }
}
