<?php 
// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.

//$FirstNumber = 0;
//$SecondNumber = 1;

function fibonacci($count){
    $FirstNumber=0;
    $SecondNumber = 1;




for ($i = 0; $i < $count; $i++) {

    if ($i == 0) {
        echo $FirstNumber . PHP_EOL;
    } elseif ($i == 1) {
        
        echo $SecondNumber . PHP_EOL;
    } else {
        $ThirdNumber = $FirstNumber + $SecondNumber;

       echo $ThirdNumber . PHP_EOL;
        $FirstNumber = $SecondNumber;
        $SecondNumber = $ThirdNumber;

    }


}
}

fibonacci(15);


?>
