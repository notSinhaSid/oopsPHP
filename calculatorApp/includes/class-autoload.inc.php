<?php

spl_autoload_register('classLoader');

function classLoader($className)
{
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  // the line is not clear
    
    if(strpos($url, 'includes')!==FALSE)
    {
        $path = '../classes/';
    }
    else{
        $path ='classes/';
    }

    $extension = ".class.php";

    require_once($path.$className.$extension);
}