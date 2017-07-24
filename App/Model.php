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
        $db->query('SELECT * FROM'. static::TABLE, [], static::class);
    }
    public static function findById(int $id){
        $db = Db::instance();
        $db->query('SELECT * FROM'. static::TABLE . ' WHERE id=:id', [':id' => $id], static::class);
    }
    abstract public function isNew();
    public static function insert(Model $obj){
        $obj->isNew();
    }
}