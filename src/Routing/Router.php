<?php
namespace Framework\Routing;


use Exception;

/**
 * Class Router
 * @package Framework\Routing
 */
class Router
{
     /**
      * @var array $routes
     */
     protected $routes = [];

    /**
     * @param string $file
     * @return Router
     */
     public static function load(string $file)
     {
         $router = new static;
         require $file;
         return $router;
     }

    /**
     * Method may be renamed how you want
     * [ register(), api(), get(), post(), put(), patch() ]
     * @param $routes
     */
     public function define($routes)
     {
         $this->routes = $routes;
     }


    /**
     * http://mysite.com/about
     * @param string $uri [ Current URI ]
     * @return mixed
     * @throws Exception
     */
     public function direct(string $uri)
     {
         if(array_key_exists($uri, $this->routes))
         {
             return sprintf('../app/%s', $this->routes[$uri]);
         }

         throw new Exception('No route defined for this URI.');
     }
}