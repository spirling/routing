<?php

namespace Spirling\Routing;

use Spirling\Interfaces\Routing\CompiledRouteInterface;
use Spirling\Interfaces\Routing\RouteInterface;

class Route implements RouteInterface, \Countable
{

    private string  $path;
    private array   $methods;
    private array   $defaults;
    private array   $requirements;
    /**
     * @var Route[]
     */
    private array   $routes;

    private CompiledRouteInterface $compiled;

    public function __construct(string $path, array $methods = [], array $defaults = [], array $requirements = [], array $routes = [])
    {
        $this->path = $path;
        $this->methods = $methods;
        $this->defaults = $defaults;
        $this->requirements = $requirements;
        $this->routes = $routes;
    }

    public function __serialize(): array
    {
        return [
            'path' => $this->path,
            'methods' => $this->methods,
            'defaults' => $this->defaults,
            'requirements' => $this->requirements,
            'routes' => $this->routes,
            'compiled' => $this->compiled,
        ];
    }

    public function serialize(): string
    {
        return serialize($this->__serialize());
    }

    public function __unserialize(array $data): void
    {
        $this->path = $data['path'];
        $this->methods = $data['methods'];
        $this->defaults = $data['defaults'];
        $this->requirements = $data['requirements'];
        $this->routes = $data['routes'];

        if (isset($data['compiled'])) {
            $this->compiled = $data['compiled'];
        }
    }

    public function unserialize($serialized)
    {
        $this->__unserialize(unserialize($serialized));
    }

    public function __toString(): string
    {
        return is_null($this->compiled) ? $this->path : $this->compiled->__toString();
    }

    public function compile(): CompiledRouteInterface
    {
        if (is_null($this->compiled)) {
            $this->compiled = new CompiledRoute($this);
        }
        return $this->compiled;
    }

    public function count()
    {
        return \count($this->routes, true);
    }


}