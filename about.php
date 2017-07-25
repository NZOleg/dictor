<?php
require 'autoload.php';
$trans =  new \App\Models\Translation('w','b','c','d');
var_dump($trans::findAll());
