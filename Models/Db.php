<?php
namespace Models;
class Db
{
    protected $dbh;

    public function __construct()
    {
        $this -> dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', 'root');
    }

    public function execute(string $sql)
    {
        $sth = $this -> dbh -> prepare($sql);
        $sth -> execute();

        $data = $sth -> fetchAll();
        return $data;
    }

    public function oneNews(string $sql)
    {

    }
}