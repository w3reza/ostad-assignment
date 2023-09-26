<?php 
// Task 4: Multidimensional Array

// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrade = [

    ['Math' => 85, 'English' => 90, 'Science' => 78],
    ['Math' => 70, 'English' => 65, 'Science' => 78],
    ['Math' => 85, 'English' => 90, 'Science' => 78]
    
];

function MultidimensionalArray($studentGrade ){

foreach ($studentGrade as $grades) {

    //print_r($grades);
    $avarage =  array_sum($grades);
    $result = $avarage / count($grades);
    echo "The average grade for each student ". number_format($result , 2) ;
    echo PHP_EOL;
   
 }
}

MultidimensionalArray($studentGrade);
 
?>

