<?php

namespace Spirling\Routing;

use Spirling\Interfaces\Routing\RouterInterface;
use Spirling\Interfaces\Routing\RoutesCollectionInterface;

class Router implements RouterInterface
{

    private RoutesCollectionInterface $routes;

    public function __construct(ContainerInterface $container)
    {

    }

    public function getRoutes()
    {
        if (is_null($this->routes)) {

        }
    }

}