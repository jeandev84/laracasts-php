<?php
namespace Framework\Database;


use PDO;

/**
 * Class QueryBuilder
 * @package Framework\Database
 */
class QueryBuilder
{
    /**
     * @var PDO
     */
    private $pdo;

    /**
     * QueryBuilder constructor.
     * @param PDO $pdo
     */
     public function __construct(PDO $pdo)
     {
         $this->pdo = $pdo;
     }


    /**
     * @param $table
     * @param bool $intoClass
     * @return array
     */
     public function selectAll($table, $intoClass = false)
     {
         $statement = $this->pdo->prepare("SELECT * FROM {$table}");
         $statement->execute();
         if($intoClass)
         {
             return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
         }
         return $statement->fetchAll(PDO::FETCH_CLASS);
     }
}