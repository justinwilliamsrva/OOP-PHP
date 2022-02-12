
<?php
// PART I
class Coffeemaker
{
    public function brew()
    {
        echo("I make a cup of coffee \n");
    }
}
class SpecialCoffeeMaker extends Coffeemaker
{
    public function brewLatte()
    {
        echo("I make a lovely latte \n");
    }
}

(new Coffeemaker())->brew();
(new SpecialCoffeemaker())->brew();
(new SpecialCoffeemaker())->brewLatte();


// PART II





































?>