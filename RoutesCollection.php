<?php

namespace Spirling\Routing;

use Spirling\Interfaces\Routing\RoutesCollectionInterface;

class RoutesCollection implements RoutesCollectionInterface
{

    private array $routes = [];

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->routes);
    }

    public function count()
    {
        \count($this->routes);
    }

}