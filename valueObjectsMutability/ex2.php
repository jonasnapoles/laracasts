<?php
// Mutability
//Avoids primitive obsession - and readability
// Helps with consistency
// Immutable

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
    
    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$age = $age->increment();
var_dump($age->get());

// function register(string $name, Age $age)
// {

// }

// register('Jonas Oli', $age);