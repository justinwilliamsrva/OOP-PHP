<?php


class Age{
public $age;

public function __construct($age)
{
    if($age < 0 || $age > 120){

        throw new InvalidArgumentException("that does not make sense");
    }
    $this->age = $age;
}

}


function register(string $name, Age $age){

    echo $name;
    echo "\n";
    echo ($age->age);
    echo "\n";
    echo "\n";



}


//Set Age
$age = new Age(35);
register("John Doe", $age);

//Change Age
$age = new Age(70);
register("John Doe", $age);

//Throw Exception
$age = new Age(470);
register("John Doe", $age);





?>