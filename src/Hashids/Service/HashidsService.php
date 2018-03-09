<?php

namespace DaMess\Hashids\Service;

use Hashids\Hashids;

class HashidsService implements ObfuscatorInterface
{
    /**
     * @var Hashids
     */
    protected $hashids;

    /**
     * @param Hashids $hashids
     */
    public function __construct(Hashids $hashids)
    {
        $this->hashids = $hashids;
    }

    /**
     * Encode array of values.
     *
     * @param mixed[] $array
     *
     * @return string
     */
    public function encode($array)
    {
        return $this->hashids->encode($array);
    }

    /**
     * Decode string.
     *
     * @param string $string
     *
     * @return mixed[]
     */
    public function decode($string)
    {
        return $this->hashids->decode($string);
    }

    /**
     * Encode hex number.
     *
     * @param string $number
     *
     * @return string
     */
    public function encodeHex($number)
    {
        return $this->hashids->encodeHex($number);
    }

    /**
     * Decode hex string.
     *
     * @param string $string
     *
     * @return string
     */
    public function decodeHex($string)
    {
        return $this->hashids->decodeHex($string);
    }
}
