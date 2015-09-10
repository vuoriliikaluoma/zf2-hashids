<?php

namespace DaMess\Hashids\Service;

interface ObfuscatorInterface
{
    /**
     * Convert the value into a obfuscated hash
     *
     * @param int $value
     * @return string
     */
    public function encode($value);

    /**
     * Convert the hash into the original ID
     *
     * @param string $value
     * @return int
     */
    public function decode($value);
}
