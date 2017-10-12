<?php

class CatFeederValidator
{

    public function validateAddFood($amountToAdd, $currentAmount, 
    $capacity)
    {
        $is_valid = is_numeric($amountToAdd);

        if(!$is_valid ) 
        {
            echo "Amount to add is not numeric! ";
            return false;
        }
        $is_valid = is_numeric($currentAmount);
        
                if(!$is_valid ) 
                {
                    echo "Current amount is not numeric! ";
                    return false;
                }

                $is_valid = $amountToAdd > 0;
                                
                        if(!$is_valid) 
                        {
                            echo "Amount to add should be greater than 0 ";
                            return false;
                        }
                        $is_valid = $currentAmount >= 0;
                        if(!$is_valid ) 
                        {
                            echo "Current amount to add should be greater than 0 ";
                            return false;
                        }
                        $is_valid = $capacity > 0;
                        
                                if(!$is_valid) 
                                {
                                    echo "Capacity should be greater than 0 ";
                                    return false;
                                }
                                
                                $is_valid = $amountToAdd + $currentAmount <= $capacity;
                                if(!$is_valid)
                                {
                                    echo "Amount added exceeded capacity";
                                    return false;
                                }

                                return $is_valid;
    }

    public function validateInitialAmount($initialAmount) 
    {
        $is_valid = is_numeric($initialAmount);
        if(!$is_valid) 
        {
            echo "Initial amount is not numeric <br />";
        return false;
    }

         $is_valid = $initialAmount > 0;
        if(!$is_valid) 
        {
            echo "Initial amount should be greater than zero <br />";
        return false;
    }
        $is_valid = $portion_size <= $initialAmount;
        if(!$is_valid) 
        {
            echo "Portion size cannot be greater than initial amount <br />";
        return;
    }
    return true;
}

    public function validatePortionSize($portion_size, $initialAmount,
    $accetablePortionSizes) 
    {
        $is_valid = is_numeric($portion_size);

        if(!$is_valid) 
        {
            echo "Portion size is not numeric <br />";
        return false;
    }

        $is_valid = $portion_size > 0;
        if(!$is_valid) 
    {
            echo "Portion size should be greater than zero <br />";
        return false;
    }

        $is_valid = $portion_size <= $initialAmount;
        if(!$is_valid) 
        {
            echo "Initial amount must be greater than portion size <br />";
        return false;
    }
       $is_valid = in_array($portion_size, $accetablePortionSizes);
       if(!is_valid)
       {
           echo "Invalid portion size";
       }
       return $is_valid;
    }
}

?>