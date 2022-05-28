<?php

namespace Tacman\HelloBundle\Twig;

use Picqer\Barcode\BarcodeGenerator;
use Picqer\Barcode\BarcodeGeneratorSVG;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class HelloExtension extends AbstractExtension
{
    public function __construct()
    {

    }
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('hello', [$this, 'hello'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('hello', [$this, 'hello'], ['is_safe' => ['html']]),
        ];
    }

    public function hello(string $value): string
    {
        // ...
        return '@todo';
    }
}
