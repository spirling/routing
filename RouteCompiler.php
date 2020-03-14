<?php

namespace Spirling\Routing;

use Spirling\Interfaces\Routing\CompiledRouteInterface;
use Spirling\Interfaces\Routing\RouteCompilerInterface;
use Spirling\Interfaces\Routing\RouteInterface;

class RouteCompiler implements RouteCompilerInterface
{

    /**
     * From Symfony
     */
    const SEPARATORS = '/,;.:-_~+*=@|';

    /**
     * @param RouteInterface $route
     * @return CompiledRouteInterface
     */
    public function compile(RouteInterface $route) : CompiledRouteInterface
    {
        $compiledRoute = new CompiledRoute($route);
    }

    protected function compilePath($route, string $path)
    {
        $tokens = [];

        preg_match_all('~\{(\w+)\}~', $path, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            list($var, $varName) = $match;
            
        }
        return $tokens;
    }

}