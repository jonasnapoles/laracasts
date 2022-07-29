<?php

class ArchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        //FirstThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', '$0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-',$this->name())) . '.png';
    }
}


class FirstThousandPoints extends ArchievementType
{
    public function qualifier($user)
    {
        
    }
}

class FirstBestAnwer extends ArchievementType
{
    
    public function qualifier($user)
    {
        
    }
}

$archievemnt = new FirstBestAnwer();

echo $archievemnt->name();