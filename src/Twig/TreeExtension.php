<?php

namespace Survos\TreeBundle\Twig;

use Picqer\Barcode\BarcodeGenerator;
use Picqer\Barcode\BarcodeGeneratorSVG;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TreeExtension extends AbstractExtension
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
            new TwigFilter('tree', [$this, 'barcode'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('tree', [$this, 'barcode'], ['is_safe' => ['html']]),
        ];
    }

    public function tree(): string
    {
        // ...
        return '@todo';
    }
}
