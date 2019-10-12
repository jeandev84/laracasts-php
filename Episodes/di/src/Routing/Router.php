<?php
namespace Framework\Routing;


use Exception;

/**
 * Class Router
 * @package Project\Routing
 */
class Router
{
     /**
      * @var array $routes
     */
     protected $routes = [
         'GET'  => [],
         'POST' => []
     ];

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
     * @param $uri
     * @param $controller
     */
     public function get($uri, $controller)
     {
          $this->routes['GET'][$uri] = $controller;
     }


    /**
     * @param $uri
     * @param $controller
     */
     public function post($uri, $controller)
     {
         $this->routes['POST'][$uri] = $controller;
     }


    /**
     * http://mysite.com/about
     * @param string $uri [ Current URI ]
     * @return mixed
     * @throws Exception
     */
     public function direct(string $uri, string $requestType)
     {
         if(array_key_exists($uri, $this->routes[$requestType]))
         {
             return sprintf('../app/%s', $this->routes[$requestType][$uri]);
         }

         throw new Exception('No route defined for this URI.');
     }


    /**
     * @return array
     */
     public function routes()
     {
         return $this->routes;
     }
}