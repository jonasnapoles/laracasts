<?php

//To find the error we need take a excepetion and validaction 

function add($one,$two)
{
    if(! is_float($one) || ! is_float($two))
    {
        //we take exception
        throw new Exception('Please privide a float');
    }

    return $one + $two;
}

try{
    echo add(2,[]);
} catch (Exception $e){
    echo 'Oh well';
}
