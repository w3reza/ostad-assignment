

<?php
// Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
// step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the
// function to print.
//Also do the same using while loop and do-while loop also. -->

function EvenFor($start, $end, $step)
{

    if ($start == 1) {
        $start = 2;
        for ($i = $start; $i <= $end; $i += $step) {
            if ($i % 2 == 0) {
                echo $i . PHP_EOL;
            }

        }
    }


}
echo "Result using for Loop" . PHP_EOL;
EvenFor(1, 20, 2);

//while loop

function EvenWhile($start, $end, $step)
{

    if ($start == 1) {
        $i = 2;

        while ($i <= $end) {
            if ($i % 2 == 0) {
                echo $i . PHP_EOL;
                $i += $step;
            }

        }
    }

}
echo "Result using for while loop" . PHP_EOL;
EvenWhile(1, 20, 2);

//Do while loop

function DoEvenWhile($start, $end, $step)
{

    if ($start == 1) {
        $i = 2;

        do {
            if ($i % 2 == 0) {
                echo $i . PHP_EOL;
                $i += $step;
            }

        } while ($i <= $end);
    }

}
echo "Result using for Do while loop" . PHP_EOL;
DoEvenWhile(1, 20, 2);




?>