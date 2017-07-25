<?php
    include 'autoload.php';
    $view = new \App\View();
    $view->words = \App\Models\Translation::findAll();
    $view->display('Templates/list.php');

?>