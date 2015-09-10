<?php

namespace DaMess\Hashids\Tests\Options;

use DaMess\Hashids\Options\ModuleOptions;

class ModuleOptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ModuleOptions
     */
    protected $options;

    protected function setUp()
    {
        $this->options = new ModuleOptions();
        parent::setUp();
    }

    public function testInstance()
    {
        $this->assertInstanceOf('Zend\Stdlib\AbstractOptions', $this->options);
        $this->assertEquals('', $this->options->getSalt());
        $this->assertEquals(22, $this->options->getMinLength());
        $this->assertEquals('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
            $this->options->getAlphabet());
    }

    public function testCanSetAndGetSalt()
    {
        $salt = 'salt for encryption';
        $this->options->setSalt($salt);
        $this->assertEquals($salt, $this->options->getSalt());
    }

    public function testCanSetAndGetMinLength()
    {
        $minLength = 16;
        $this->options->setMinLength($minLength);
        $this->assertEquals($minLength, $this->options->getMinLength());
    }

    public function testCanSetAndGetAlphabet()
    {
        $alphabet = 'abcdefghijklmnop567';
        $this->options->setAlphabet($alphabet);
        $this->assertEquals($alphabet, $this->options->getAlphabet());
    }
}