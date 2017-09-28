<?php
require_once('catfeedervalidator.php');
function handleRemainder($remainder)
{

}

    function dispenceFood($initialAmount, $portion_size)
    {
        $is_valid = validateInitialAmount($initialAmount) &&
                    validatePortionSize($initialAmount, $portion_size);

        if(!$is_valid) {
            echo "Validation: Failed! <br />";
        }  
       
        $portion = 0;
        $remainder = 0;

        $portion = $portion_size;
        $remainder = $initialAmount - $portion;
    

        handleRemainder($remainder);
        return $portion;
    }

    function addFood($remainder, $add_amount)
    {
        $available_food = $remainder + $add_amount;

        return $available_food;

    }




?>