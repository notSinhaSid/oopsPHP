<?php

spl_autoload_register('classLoader');
function classLoader($className)
{
    $path ="classes/";
    $extension =".class.php";

    $fullPath = $path.$className.$extension;

    if(!file_exists($fullPath))
    {
        return FALSE;
    }

    require_once($fullPath);
}
