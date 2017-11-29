<?php 

require_once ("DBController.php");

trait DBConnected
{
    private $databaseHandler;

   public function getDatabaseHandler()
    {
        if($this->databaseHandler == null)
        {
            $this->databaseHandler = new DBController();
        }
        return $this->databaseHandler;
    }
}
   

?>