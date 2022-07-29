<?php

class Member
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        $this->members[] = $member;
    }
    
    public function members()
    {
        return $this->members;
    }
}

$team = new Team; //has a maximun of three members
$team->add(new Member('Jane Doe'));

var_dump($team->members());
