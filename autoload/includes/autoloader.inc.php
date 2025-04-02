<?php

/*
    require_once ('classFirst.php');
    require_once ('classSecond.php');
    require_once ('classThird.php');

    This is one way of calling a spl_autoload_register()

    spl_autoload_register(function($class){

        require_once($class. '.php');
    });

*/    

spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path ="classes/";
    $prefix ="class";
    $extension =".php";

    $fullPath = $path.$prefix.$className.$extension;

    if(!file_exists($fullPath))
    {
        return FALSE;
    }

    require_once($fullPath);
}


