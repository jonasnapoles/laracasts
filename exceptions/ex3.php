<?php

//To find the error we need take a more specific exception

function add($one,$two)
{
    if(! is_float($one) || ! is_float($two))
    {
        //we take exception
        throw new InvalidArgumentException('Please privide a float');
    }

    return $one + $two;
}

try{
    echo add(2,[]);
} catch (InvalidArgumentException $e){
    echo 'Oh well';
}
