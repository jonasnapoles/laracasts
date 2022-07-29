<?php
// Encapsulation => Enclose within a capsule

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'Software developer';
    }

    public function favoriteTeam()
    {

    }

    public function thingsThatKeepUpAtNight()
    {
        return 'We are all going to die and that is terrifying';
    }
}

$bob = new Person('Bob');

var_dump($bob->job());