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


    function emptyFeeder($initialAmount, $portion_size) {

        echo "Received $initialAmount oz of food <br />";
        echo "Need to empty it using $portion_size oz Portion Size <br />"; 

        do {

            if($initialAmount >= $portion_size) {

            dispenceFood($initialAmount, $portion_size);
            
          $initialAmount -=  $portion_size;

            } elseif($initialAmount > 0) {

                dispenceFood($initialAmount, $initialAmount);
                
              $initialAmount =  0;
        
            }  echo "Dispenced $portion_size oz,
            have $initialAmount oz remaining <br />";

        } while ($initialAmount > 0);
        echo "All Done!";
    } 



?>