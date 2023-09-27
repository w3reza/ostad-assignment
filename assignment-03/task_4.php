<?php 
// Task 4: Multidimensional Array

// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrade = [

    'Student_01'=>['Math' => 40, 'English' => 60, 'Science' => 50],
    'Student_02'=>['Math' => 70, 'English' => 65, 'Science' => 78],
    'Student_03'=>['Math' => 85, 'English' => 90, 'Science' => 78]
    
];

function MultidimensionalArray($studentGrade ){

foreach ($studentGrade as $tudentIndex => $grades) {

    //print_r($grades);
    $avarage =  array_sum($grades);
    $result = $avarage / count($grades);
    $result=number_format($result , 2);
    if ($result<=39){
        echo "{$tudentIndex} your avarage marks is {$result} and Grade is F";

    }
    else if($result<=59){
        echo "{$tudentIndex} your avarage marks is {$result} and Grade is B";

    }
    else if($result<=79){
        echo "{$tudentIndex} your avarage marks is {$result} and Grade is A";

    }
    else {
        echo "{$tudentIndex} your avarage marks is {$result} and Grade is A+";
    }
    
    echo PHP_EOL;
   
 }
}

MultidimensionalArray($studentGrade);
 
?>

