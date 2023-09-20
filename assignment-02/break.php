<?php
// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.

$FirstNumber = 0;
$SecondNumber = 1;

for ($i = 0; $i < 100; $i++) {

    if ($i == 0) {
        echo $FirstNumber . PHP_EOL;
    } elseif ($i == 1) {
        
        echo $SecondNumber . PHP_EOL;
    } else {
        $ThirdNumber = $FirstNumber + $SecondNumber;

        if ($ThirdNumber > 100) {
            break;
        }
        echo $ThirdNumber . PHP_EOL;
        $FirstNumber = $SecondNumber;
        $SecondNumber = $ThirdNumber;

    }

}
// Below Code was Before WahtsApp Post
/*
$FirstNumber = 0;
$SecondNumber = 1;
$count = 0;

for ($i = 0; $count < 10; $i++) {

    if ($i == 0) {
        echo $FirstNumber . PHP_EOL;
    } elseif ($i == 1) {
        
        echo $SecondNumber . PHP_EOL;
    } else {
        $ThirdNumber = $FirstNumber + $SecondNumber;

        if ($ThirdNumber > 100) {
            break;
        }
        echo $ThirdNumber . PHP_EOL;
        $FirstNumber = $SecondNumber;
        $SecondNumber = $ThirdNumber;

    }

    $count++;

}
*/


?>