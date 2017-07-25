<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 24/07/2017
 * Time: 1:47 PM
 */

namespace App\Models;


use App\Db;
use App\Model;

class Translation extends Model
{
    const TABLE = 'words';

    public $id;
    public $origWord;
    public $origLang;
    public $transWord;
    public $transLang;




    public function __construct(string $origWord = null, string $origLang = null, string $transWord = null, string $transLang = null)
    {
        //when \PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, it calls constructor without arguments
        if (isset($origWord)) {
            $this->origWord = $origWord;
            $this->origLang = $origLang;
            $this->transWord = $transWord;
            $this->transLang = $transLang;
        }
    }

    public function save()
    {

    }
    public function isNew()
    {
        return true;
    }
    public static function findByWord(string $word){
        $db = Db::instance();
        $res = $db->query('SELECT * FROM '. static::TABLE . ' WHERE origWord=:word', [':word' => $word], static::class);
        return $res == [] ? null : $res;
    }
}