<?php


    define("MAX_AGE", 120);
    define("NAME", "Cooper");
  

    echo MAX_AGE . "<br />";

    $age = MAX_AGE;

    echo $age . "<br />";

    $age += 300;

    echo $age . "<br />";

    echo MAX_AGE . "<br />";
    echo NAME. " is" . MAX_AGE . " years old <br />";

    function countCalls()
    {
        static $call_counter = 0;
        // $call_counter++;
        echo "Called " . ++$call_counter . " times! <br />";
    }

    countCalls();
    countCalls();
    countCalls();

?>