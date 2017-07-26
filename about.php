<?php
include 'autoload.php';
$view = new \App\View();
$view->langList = \App\Models\Translation::LANGUAGES;
$view->display('Templates/add.php');