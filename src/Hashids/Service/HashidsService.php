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
     * Convert the value into a obfuscated hash
     *
     * @param int $value
     * @return string
     */
    public function encode($value)
    {
        return $this->hashids->encode($value);
    }

    /**
     * Convert the hash into the original ID
     *
     * @param string $value
     * @return int|false
     */
    public function decode($value)
    {
        return $this->hashids->decode($value)[0] ?? false;
    }
}
