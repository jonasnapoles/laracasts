<?php


class Age
{
    private $age;

    public function __construct($age)
    {
            if($age < 0 || $age > 120 ){
        throw new InvalidArgumentException('That makes no sense');
    }

        $this->age = $age;
    }

    
}

function register(string $name, Age $age)
{

}

$age = new Age(35);

// $age->age = 500;

register('Jonas Oli', $age);