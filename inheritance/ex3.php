<?php

class ArchievementType
{
    public function name()
    {
          //Archievement type
    }

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {

    }
}

class FirstThousandPoints extends ArchievementType
{ 

    public function qualifier($user)
    {
        # code...
    }

    public function name()
    {
        return 'Welcome Aboard!';
    }


}