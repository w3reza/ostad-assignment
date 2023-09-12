

<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
body{
    font-family: Arial, sans-serif;
    text-align: center;
}

.container {
    margin: 50px auto;
    width: 300px;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

input[type="number"],input[type="text"], select {
    width: 95%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
label{
    font-family: Arial, sans-serif;
    text-align: center;
    line-height: 35px;
}

button,input[type="submit"] {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

#result {
    margin-top: 20px;
    font-size: 18px;
}
</style>
</head>
<body>

<div class="container">
    <h2>Temperature Converter</h2>
    <form method="post" action="">
        <label for="scores">Test scores 01:</label>
        <input type="text" name="scores1" id="temperature" required>
        <br><br>
        <label for="temperature">Test scores 02:</label>
        <input type="text" name="scores2" id="temperature" required>
        <br><br>
        <label for="temperature">Test scores 03:</label>
        <input type="text" name="scores3" id="temperature" required>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
<div id="result">
<?php
//Task 3: Grade Calculator
//Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $scores1 = $_POST['scores1'];
    $scores2 = $_POST['scores2'];
    $scores3 = $_POST['scores3'];
    $average = ($scores1+$scores2+$scores3)/3;
    $formatted_average = number_format($average, 2);
    
    switch ($average ){
        case ($average >= 80 && $average <= 100):
         echo "<p>Result: A. Your Score is {$formatted_average}</p>";
        break;
        case ($average >= 60 && $average <= 79):
            echo "<p>Result: B. Your Score is {$formatted_average}</p>";
        break;
        case ($average >= 50 && $average <= 59):
            echo "<p>Result: C. Your Score is {$formatted_average}</p>";
        break;
        case ($average >= 40 && $average <= 49):
            echo "<p>Result: D. Your Score is {$formatted_average}</p>";
        break;
        default:
        echo "<p>Result: F. Your Score is {$formatted_average}</p>";
        break;


    


    }

    
 }
        
 ?>
        </div>
    </div>

    
</body>
</html>



