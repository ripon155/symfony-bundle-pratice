<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\AppExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
            // new TwigFilter('filter_name', [AppExtensionRuntime::class, 'doSomething']),
            new TwigFilter('getdolar_sign', [AppExtensionRuntime::class, 'dolarSign'],  ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('getLastname', [AppExtensionRuntime::class, 'getLastname']),
            new TwigFunction('getAddress', [$this, 'getAddress']),
        ];
    }

    public function getAddress(){
        return '(this from AppExtension)';
    }


}
