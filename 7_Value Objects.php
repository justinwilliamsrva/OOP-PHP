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



public function increment(){

    //Mutable
    // $this->age += 1;

    //Immuatable
    return new self($this->age + 1);
}
public function get(){

    return $this->age;
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
// $age = new Age(470);
// register("John Doe", $age);

//Mutable Object
$age = new Age(35);
$age->increment();
register("John Doe", $age);

//Immutable Object
$age = new Age(35);
$newAge = $age->increment();
register("John Doe", $newAge);



// ********** ********** **********
// ********** Combining variables  **********
// ********** ********** **********


class Coordinates{

    public $x;
    public $y;
public function __construct($x, $y){

    $this->x = $x;
    $this->y = $y;

}
}

function pin(Coordinates $coordinates){
// This will out put x
    echo $coordinates->x;

    //can also use a getter but you'd need to create it in Coordinates class
    echo $coordinates->x();

}
function distance(Coordinates $begin, Coordinates $end){


    }



?>