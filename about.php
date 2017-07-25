<?php
require 'autoload.php';
$trans =  new \App\Models\Translation('a','b','c','d');
$trans->insert();