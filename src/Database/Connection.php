<?php
namespace Framework\Database;


use PDO;
use PDOException;

/**
 * Class Connection
 * @package Framework\Database
 */
class Connection
{

    /**
     * Make connection to database via PDO
     * @return PDO
     */
    public static function make()
    {
       // Connection to Database
       try {

           return new PDO('mysql:host=127.0.0.1;dbname=laracasts_php', 'root', '');

       } catch (PDOException $e) {

           die($e->getMessage());
       }
    }
}

$pdo = Connection::make();