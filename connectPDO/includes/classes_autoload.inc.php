<?php

spl_autoload_register();

function classLoader($className)
{
    $path ="classes/";
    $extension =".class.php";
    $fileName = $path.$className.$extension;

    if(!file_exists($fileName))
    {
        return FALSE;
    }

    include_once ($fileName);
}