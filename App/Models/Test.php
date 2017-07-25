<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 25/07/2017
 * Time: 2:50 PM
 */

namespace App\Models;


use App\Model;

class Test extends Model
{
    public $test;
    public $work;

    const TABLE = 'test';
    public function __construct($test, $work)
    {
        $this->test = $test;
        $this->work = $work;
    }

    public function isNew()
    {
        return true;
    }
}