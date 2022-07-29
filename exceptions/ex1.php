<?php

function add(float $one, float $two)
{
    return $one + $two;
}

echo add(2, []);

//return error because call a type float secod argument