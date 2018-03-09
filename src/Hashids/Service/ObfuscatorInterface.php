<?php

namespace DaMess\Hashids\Service;

interface ObfuscatorInterface
{
    /**
     * Encode array of values.
     *
     * @param mixed[] $array
     *
     * @return string
     */
    public function encode($array);

    /**
     * Decode string.
     *
     * @param string $string
     *
     * @return mixed[]
     */
    public function decode($string);

    /**
     * Encode hex number.
     *
     * @param string $number
     *
     * @return string
     */
    public function encodeHex($number);

    /**
     * Decode hex string.
     *
     * @param string $string
     *
     * @return string
     */
    public function decodeHex($string);
}
