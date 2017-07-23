<?php
/**
 * Created by PhpStorm.
 * User: NZOle
 * Date: 24/07/2017
 * Time: 10:53 AM
 */

namespace App;


trait Singleton
{
    protected static $instance;
    protected function __construct()
    {

    }
    public static function instance(){
        if (null === self::$instance){
            self::$instance = new static();
        }
        return self::$instance;
    }
}