

<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
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
    <h2>Comparison Tool</h2>
    <form method="post" action="">
        <label for="scores">Enter Number 01:</label>
        <input type="number" name="number1"  required>
        <br><br>
        <label for="scores">Enter Number 02:</label>
        <input type="number" name="number2"  required>
        <br><br>
                
        <input type="submit" value="Submit">
    </form>
<div id="result">
<?php
//Task 6: Comparison Tool
//Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $result = ($number1 > $number2 )?"{$number1} is larger number than {$number2}": "{$number1} is Smaller number than {$number2}";
    echo $result;
 
    }
  
        
 ?>
        </div>
    </div>

    
</body>
</html>



