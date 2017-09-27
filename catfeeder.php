<?php

function handleRemainder($remainder)
{

}

    function dispenceFood($initial_amount, $portion_size)
    {
        $portion = 0;
        $remainder = 0;

        $portion = $portion_size;
        $remainder = $initial_amount - $portion;

        handleRemainder($remainder);
        return $portion;
    }

    function addFood($remainder, $add_amount)
    {
        $available_food = $remainder + $add_amount;

        return $available_food;

    }




?>