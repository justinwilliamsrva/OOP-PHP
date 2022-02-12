
<?php
// ********** PART I **********

class Coffeemaker
{
    public function brew()
    {
        echo ("I make a cup of coffee \n");
    }
}
class SpecialCoffeeMaker extends Coffeemaker
{
    public function brewLatte()
    {
        echo ("I make a lovely latte \n");
    }
}

// (new Coffeemaker())->brew();
// (new SpecialCoffeemaker())->brew();
// (new SpecialCoffeemaker())->brewLatte();



// ********** ********** **********
// **********   PART II  **********
// ********** ********** **********


class Collection
{
    protected array $items;

    public function __construct(array $items)
    {

        $this->items = $items;
    }

    public function sum($key)
    {

        //    return array_sum(array_map(function ($item) use ($key){return $item->$key;},$this->items));
        //    return array_sum(array_map((fn ($item) => $item->$key) , $this->items));
        return array_sum(array_column($this->items, $key));
    }
}

class VideoCollection extends Collection
{

    public function length()
    {

        return $this->sum('length');
    }
}


class Video
{

    public $title;
    public $length;
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$collection = new VideoCollection([

    new Video("Running Away", 200),
    new Video("Fleeing", 120),
    new Video("Gladiator", 170)
]);

var_dump($collection->length());


// ********** ********** **********
// **********  PART III  **********
// ********** ********** **********






























?>