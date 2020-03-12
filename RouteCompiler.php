<?php


namespace Spirling\Routing;


class RouteCompiler
{

    public function compilePath($route, string $path)
    {
        $tokens = [];

        preg_match_all('~\{(\w+)\}~', $path, $matches);
        var_dump($matches);
        foreach ($matches as $match) {

        }

        return $tokens;
    }

}