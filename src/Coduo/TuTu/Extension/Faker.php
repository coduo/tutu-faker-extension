<?php

namespace Coduo\TuTu\Extension;

use Coduo\TuTu\Extension;
use Coduo\TuTu\Extension\Faker\Twig\Extension\FakerExtension;
use Coduo\TuTu\ServiceContainer;

class Faker implements Extension
{
    /**
     * @var null
     */
    private $locale;

    /**
     * @param string|null $locale
     */
    public function __construct($locale = null)
    {
        $this->locale = $locale;
    }

    /**
     * @param ServiceContainer $container
     */
    public function load(ServiceContainer $container)
    {
        $fakerExtension = new FakerExtension($this->locale);
        $container->getService('twig')->addExtension($fakerExtension);
    }
}
