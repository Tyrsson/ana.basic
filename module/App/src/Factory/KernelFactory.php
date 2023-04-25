<?php

declare(strict_types=1);

namespace App\Factory;

use App\Kernel;
use Laminas\Http\PhpEnvironment\Request;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\View\View;
use Psr\Container\ContainerInterface;

final class KernelFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): Kernel
    {
        return new $requestedName($container->get(Request::class), $container->get(View::class));
    }
}
