<?php


class Team
{

    protected $name;
    protected $members = [];

    public function __construct($name, $members)
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function create(...$params)
    {

        return new static(...$params);
    }

    public function name()
    {

        return $this->name;
    }
    public function members()
    {

        return $this->members;
    }
    public function add($name)
    {

        $this->members[] = $name;
    }
    public function cancel()
    {
    }
    public function manager()
    {
    }
}

class Member{

public $name;


public function __construct($name)
{
    $this->name = $name;
    $this->date = date("Y-m-d H:i:s");

}
 public function dayCreated(){



 }


}

$acme = Team::create("Acme", [
    new Member("james"),
    new Member("rabecca")

]);
var_dump($acme);
// var_dump($acme->name());

// $acme->add('jamie');
// $acme->add("rebecca");

var_dump($acme->members());


