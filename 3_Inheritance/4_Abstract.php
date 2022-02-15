<?php


abstract class AchievementType{

    public function name()
    {
        $class = get_class($this);
        return trim(preg_replace('/[A-Z]/',' $0', $class));
    }
    public function icon()
    {
        return strtolower(str_replace(' ','-',$this->name())) . '.png';
    }
    abstract public function qualifier($user);
}


class FirstTokenBadge extends AchievementType{

public function qualifier($user)
{

}

}


$achievement = new FirstTokenBadge();

echo $achievement->name();
echo "\n";
echo $achievement->icon();





?>