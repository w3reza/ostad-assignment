

<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
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
    <h2>Weather Report</h2>
    <form method="post" action="">
        <label for="number">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <br><br>
               
        <input type="submit" value="Submit">
    </form>
<div id="result">
<?php
//Task 5: Weather Report
//Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $temperature = $_POST['temperature'];
    
     
    switch ($temperature){
        case ($temperature<=15):
         echo "<p>It's freezing!</p>";
        break;
        case ($temperature>15 && $temperature<=30):
            echo "<p>It's cool.</p>";
        break;
        case ($temperature>30):
            echo "<p>It's warm.</p>";
        break;

    }
}
    
        
 ?>
        </div>
    </div>

    
</body>
</html>



