<?php

class Mobile{
    var $model;

    function showModel($modelName)
    {
        global $model;

        $model = $modelName;

        echo "Model Name is  : ".$model;
    }
}


$phone1= new Mobile();

echo $phone1->showModel("RealMe X");

// echo $phone1->$model;        a variable declared in var variable_name cannot be accessed using this->operator because it is not visible ot outside the class scope

?>