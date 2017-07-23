<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 24/07/2017
 * Time: 10:43 AM
 */

namespace App;


class Db
{
    protected $dbh;
    use \App\Singleton;
    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=dictor','root','');
    }
    public function add(){

    }
    public function query(string $query, array $params = [],string $class){
        $sth = $this->dbh->prepare($query);
        $res = $sth->execute($params);
        if (false ==! $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return null;
    }
}