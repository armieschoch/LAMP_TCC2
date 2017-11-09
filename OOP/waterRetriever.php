<?php 

require_once ("swimmer.php");
require_once ("retriever.php");

trait WaterRetriever 
{

    use Retriever, Swimmer;

    function fetch()
    {
        echo "<br /> <br /> (Retriever Trait) Fetch the ball";
    }

    public function swim()
    {
        echo "<br /> Swim";
    }

    public function fetchDuck()
    {
        $this->swim();
        $this->fetch();
        $this->swim();
        echo " Got a Duck ";
    }
}
   

?>