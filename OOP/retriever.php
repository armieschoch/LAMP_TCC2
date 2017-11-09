<?php 

trait Retriever 
{
    function fetch()
    {
        echo "<br /> <br /> (Retriever Trait) Fetch the ball";
    }

    public function sayHello()
    {
        echo "<br /> hello from Retriever";
    }

    protected function protectedWoof() {
        echo "Woof from retriever";
    }
}
   
?>