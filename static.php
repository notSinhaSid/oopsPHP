<?php

class Person
{
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;

    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;        
        $this->eyeColor = $eyeColor;        
        $this->age = $age;        

    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this-> name;
    }

    public static function setDrinkingAge($newAge){
        self::$drinkingAge= $newAge;
    }

    public function getDA()
    {
        return self:: $drinkingAge=30;
    }
}

// echo Person:: $drinkingAge;
// echo Person::setDrinkingAge(18);

// echo Person::$drinkingAge;

$person1 = new Person("Dainel", "Blue", 28);
echo $person1->getDA();

?>