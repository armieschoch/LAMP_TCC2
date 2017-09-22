<?php

    $number1 = 0;
    $number2 = 1;
    $number3 = 50;

    $result = 0;

    $result = $number1 + $number2; //plus operator
    
    echo 'The result is <br />' . $result;

    $result = $number1 - $number2; //minus operator
    
    echo '<br /> The result is <br />' . $result;

    $result = $result + 5; //long form direct assignment
    
    echo '<br /> The result is <br />' . $result;

    $result += 5; //shorthand direct assignment
    
    echo '<br /> The result is <br />' . $result;

    $result -= 2; //shorthand direct assignment
    
    echo '<br /> The result is <br />' . $result;


    $result++; //post increment, the same as $result = $result + 1
    
    echo '<br /> The result is <br />' . $result;

    ++$result; //pre increment, the same as $result = $result + 1
    
    echo '<br /> The result is <br />' . $result;



    $result--; //post decrement, the same as $result = $result - 1
    
    echo '<br /> The result is <br />' . $result;

    --$result; //pre decrement, the same as $result = $result - 1
    
    echo '<br /> The result is <br />' . $result;


    $result = 2 * 5; //multiplication
    
    echo '<br /> The result is <br />' . $result;

    $result = 30 / 2; //division
    
    echo '<br /> The result is <br />' . $result;

    $result *= 2; //shorthand multiplication
    
    echo '<br /> The result is <br />' . $result;

    $result/=2; //shorthand division
    
    echo '<br /> The result is <br />' . $result;

    $result = 25 % 4; //modulus - remainder
    
    echo '<br /> The result is <br />' . $result;


?>