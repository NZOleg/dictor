<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 24/07/2017
 * Time: 2:04 PM
 */

namespace App;


abstract class Model
{
    const TABLE ='';

    public $id;

    public static function findAll(){
        $db = Db::instance();
        return $db->query('SELECT * FROM '. static::TABLE, [], static::class);
    }
    public static function findById(int $id){
        $db = Db::instance();
        return $db->query('SELECT * FROM '. static::TABLE . ' WHERE id=:id', [':id' => $id], static::class);
    }

    public function insert(){
        if (!$this->isNew()){
            return ;
        }
        $columns = [];
        $values = [];
        foreach ($this as $k => $v){
            if ($k == 'id')
                continue;
            $columns[] =  $k;
            $values[':'.$k] = $v;
        }
        $sql = 'INSERT INTO '. static::TABLE . ' ('. implode(', ',$columns) . ' ) VALUES( '. implode(', ',array_keys($values)) . ' )';
        $db = Db::instance();
        list (, $res) = $db->execute($sql, $values);
        return $res;
    }

    abstract public function isNew();

}