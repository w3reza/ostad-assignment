

<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
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
    <h2>Even or Odd Checker</h2>
    <form method="post" action="">
        <label for="number">Enter Number:</label>
        <input type="number" name="number" id="temperature" required>
        <br><br>
               
        <input type="submit" value="Submit">
    </form>
<div id="result">
<?php
//Task 4: Even or Odd Checker
//Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST['number'];
    $result = $number%2;
     
    switch ($result ){
        case '0':
         echo "<p>The number is Even</p>";
        break;
        default:
        echo "<p>The number is ODD</p>";
        break;

    }
}
    
        
 ?>
        </div>
    </div>

    
</body>
</html>



