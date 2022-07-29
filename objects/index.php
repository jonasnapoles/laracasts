<?php

class Team
{
    protected $name;
    
    protected $members = [];
    
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }
    
    public static function start(...$params)
    {
        var_dump($params);
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
        $this->add('João');
    }

    public function manager()
    {
        $this->cancel 
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        
    }

    public function lastViewed()
    {
        # code...
    }
     
}

$acme = Team::start( 'Acme',[
    new Member('Harry POtter'),
    new Member('John Potter')
    
]);

$laracasts = new Team('Laracasts');

$laracasts = new Team('Food');

// $acme->add('Jhon Potter');

var_dump($acme->members());