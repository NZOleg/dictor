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
    public function add(Models\Translation $translation ){
        $sql = '';
    }
    public function query(string $query, array $params = [],string $class){
        list($sth, $res) = $this->execute($query, $params);

        if (false ==! $res){

            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return null;
    }
    public function execute(string $query, array $params = []){
        $sth = $this->dbh->prepare($query);
        $res = $sth->execute($params);
        return [$sth, $res];
    }
}