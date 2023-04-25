<?php

declare(strict_types=1);

namespace App;

use Laminas\Http;
use Laminas\ServiceManager\Factory\InvokableFactory;
use Laminas\View;
use Webinertia\Utils\Debug;

return [
    'factories' => [
        Kernel::class                          => Factory\KernelFactory::class,
        Http\PhpEnvironment\Request::class     => Factory\RequestFactory::class,
        View\Resolver\TemplatePathStack::class => Factory\TemplatePathStackFactory::class,
        View\Renderer\PhpRenderer::class       => Factory\PhpRendererfactory::class,
        View\View::class                       => Factory\ViewFactory::class,
    ],
    'view' => [
        'doctype'             => 'HTML5',
    ],
];