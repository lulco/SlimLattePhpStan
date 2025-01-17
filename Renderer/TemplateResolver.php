<?php
namespace App\Renderer;

use Efabrica\PHPStanLatte\LatteContext\Resolver\LatteContextResolverInterface;
use Efabrica\PHPStanLatte\LatteTemplateResolver\AbstractClassMethodTemplateResolver;

final class TemplateResolver extends AbstractClassMethodTemplateResolver
{
    public function getSupportedClasses(): array
    {
        return ['App\Controllers\MyController'];
    }

    protected function getClassMethodPattern(): string
    {
        return '/^index$/';
    }
}

