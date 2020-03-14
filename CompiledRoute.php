<?php


namespace Spirling\Routing;


use Spirling\Interfaces\Routing\CompiledRouteInterface;
use Spirling\Interfaces\Routing\RouteInterface;

class CompiledRoute implements CompiledRouteInterface
{

    public function __construct(RouteInterface $route)
    {
    }

    public function compile()
    {
        // TODO: Implement compile() method.
    }

}