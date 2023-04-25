<?php

declare(strict_types=1);

namespace App\Factory;

use Laminas\Http\PhpEnvironment\Request;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class RequestFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): Request
    {
        return new $requestedName(true);
    }
}