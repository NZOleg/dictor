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


    public function __construct(string $origWord, string $origLang, string $transWord, string $transLang)
    {
        $this->origWord = $origWord;
        $this->origLang = $origLang;
        $this->transWord = $transWord;
        $this->transLang = $transLang;
    }

    public function save()
    {

    }
    public function isNew()
    {
        return true;
    }
}