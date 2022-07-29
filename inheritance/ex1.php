<?php


class CoffeeMaker
{
    
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
    
}



class SpecialtyCofferMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing the latte');
    }
}



(new SpecialtyCofferMaker())->brew();