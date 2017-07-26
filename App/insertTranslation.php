<?php
include_once '../autoload.php';

$new = New \App\Models\Translation($_POST['origWord'],$_POST['origLang'], $_POST['transWord'],  $_POST['transLang']);
var_dump($new->insert());