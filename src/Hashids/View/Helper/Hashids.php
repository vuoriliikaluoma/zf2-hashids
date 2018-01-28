<?php

namespace DaMess\Hashids\View\Helper;

use DaMess\Hashids\Service\ObfuscatorInterface;
use Zend\View\Helper\AbstractHelper;

class Hashids extends AbstractHelper
{
    /**
     * @var ObfuscatorInterface
     */
    protected $hashidsService;

    /**
     * @param ObfuscatorInterface $hashids
     */
    public function __construct(ObfuscatorInterface $hashids)
    {
        $this->hashidsService = $hashids;
    }

    /**
     * @return ObfuscatorInterface
     */
    public function __invoke()
    {
        return $this->hashidsService;
    }
}
