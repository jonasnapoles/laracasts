<?php

// class Eletrodomestico
// {
    
// }




abstract class Animal {
    //Propiedades
    protected $name;
    protected $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }


    //metodos
    public function eat($food)
    {
         
        var_dump($this->name . ' esta a comer ' . $food);
    }

    public function sum($a, $b)
    {
        var_dump($a + $b);
    }

    
    public function speak()
    {
        var_dump($this->name . ' esta a comunicar');
    }

    public function breathe()
    {
        var_dump($this->name . 'esta a respirar');
    }
}

class Dog extends Animal
{
    
}


$dog = new Dog('Maxy', 'Masculino');

// var_dump($dog->eat());

$food = $dog->eat('Milho');

