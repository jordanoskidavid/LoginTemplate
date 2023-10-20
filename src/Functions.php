<?php

class Functions{
    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }
    function abort($code = 404)
    {
        http_response_code($code);

        require "views/$code.php";

        die();
    }
    function routeToController($uri, $routes)
    {
        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            $this->abort();
        }
    }

}