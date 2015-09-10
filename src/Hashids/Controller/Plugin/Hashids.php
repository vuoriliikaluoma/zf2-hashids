<?php

namespace DaMess\Hashids\Controller\Plugin;

use DaMess\Hashids\Service\ObfuscatorInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Hashids extends AbstractPlugin
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