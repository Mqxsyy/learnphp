<?php

function dump(...$args)
{
    echo '<pre>';
    var_dump(...$args);
    echo '</pre>';
}

function dd(...$args)
{
    dump(...$args);
    die;
}

function redirect($path) {
    header("Location: $path");
}

function view($viewName, $vars=[]){
    extract($vars);
    include __DIR__ . "/views/$viewName.php"; 
}