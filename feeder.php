<?php
require_once('catfeedervalidator.php');

class Feeder
{
    private $portionSizes;
    private $CatFeedervalidator;
    private $foodBinCapacity;
    private $currentFoodAmount;

    public function __construct($foodBinCapacity, $portionSizes)
    {
        $this->foodBinCapacity = $foodBinCapacity;
        $this->CatFeederValidator = new CatFeederValidator();
        $this->portionSizes = $portionSizes;
        $this->currentFoodAmount = 0;

    } //constructor end

    public function foodBinCapacity()
    {
        return $this->foodBinCapacity;
    }
    public function portionSizes()
    {
        return $this->portionSizes;
    }
    
    public function dispenceFood($portion_size)
    {
        $is_valid = 
        $this->CatFeederValidator->validateInitialAmount(
            $this->currentFoodAmount) &&
        $this->CatFeederValidator->validatePortionSize(
            $portion_size, $this->currentFoodAmount,
        $this->portionSizes);

       if(!$is_valid) 
       {
            die ("Validation: Failed! <br />");
       }

        $this->currentFoodAmount -= $portion_size;
      
    } //end dispence food

    public function addFood($add_amount)
    {
        $is_valid = $this->CatFeederValidator->validateAddFood(
            $add_amount, $this->currentFoodAmount,
            $this->foodBinCapacity
        );

        if(!$is_valid) {
            die ("Validation failed!");
        }

        $this->currentFoodAmount += $add_amount;
       
       } //end addFood

    public function emptyFeeder($portion_size) 
    {
        echo "Starting with $this->currentFoodAmount oz of food <br />";
        echo "Need to empty it using $portion_size oz Portion Size <br />"; 

        do {

            if($this->currentFoodAmount >= $portion_size) 
            {

            $this->dispenceFood($portion_size);
            
            } elseif($this->currentFoodAmount > 0) 
            {
                $this->dispenceFood($portion_size);
              $this->currentFoodAmount =  0;
            }  echo "Dispenced $portion_size oz,
            have $this->currentFoodAmount oz remaining <br />";

        } while ($this->currentFoodAmount > 0);
        echo "All Done!";

    } //end empty feeder
}

    
    




?>