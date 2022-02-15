<?php


// ********** ********** **********
// ********** Create own Exceptions  **********
// ********** ********** **********

class NotAFloatBro extends Exception{

    protected $message = "give me a float please";
}
class NotAPositiveFloatBro extends Exception{

    protected $message = "give me a positive float please";
}



function add($one, $two)
{

    if ($one < 0  || $two < 0) {

        throw new NotAPositiveFloatBro;
    }

    if (!is_float($one) || !is_float($two)) {

        throw new NotAFloatBro;
    }

    return $one + $two;
}


// try {
//     echo add(2.0, 2.0);
//     echo "\n";
// echo add(2.0, -2);
//   echo add(2.0, []);


// } catch (NotAFloatBro $e) {

//    var_dump($e);
// } catch (NotAPositiveFloatBro $e) {

//     var_dump($e);
// }

// ********** ********** **********
// ********** Create own Exceptions with static classes  **********
// ********** ********** **********


class TeamException extends Exception{

    public static function NotAFloatBro(){

        return new static("give me a float please");
    }
    public static function NotAPositiveFloatBro(){

        return new static("give me a positive float please");
    }
}





function adding($one, $two)
{

    if ($one < 0  || $two < 0) {

        throw TeamException::NotAPositiveFloatBro();
    }

    if (!is_float($one) || !is_float($two)) {


        throw TeamException::NotAFloatBro();

    }

    return $one + $two;
}


try {
    echo adding(2.0, 2.0);
    echo "\n";
    echo adding(2.0, -2);
    // echo adding(2.0, []);




} catch (TeamException $e) {

   var_dump($e);
}