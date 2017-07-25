<?php
require 'autoload.php';
$trans =  new \App\Models\Translation('a','b','c','d');

var_dump(\App\Models\Translation::findByWord('c'));
