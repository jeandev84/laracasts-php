<?php
namespace Framework\Http;


/**
 * Class Request
 * @package Project\Http
 */
class Request
{

     /**
      * @return string
     */
     public static function uri()
     {
         return trim($_SERVER['REQUEST_URI'], '/');
     }
}