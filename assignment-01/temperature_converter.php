<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
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
    width: 100%;
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
        <label for="temperature">Enter Temperature:</label>
        <input type="text" name="temperature" id="temperature" required>
        <br><br>
        <label for="conversion">Select Conversion:</label>
        <select name="conversion" id="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br><br>
        <input type="submit" value="Convert">
    </form>
<div id="result">
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $temperature = $_POST['temperature'];
    $conversion = $_POST['conversion'];
    switch ($conversion ){
        case 'celsius_to_fahrenheit':
        $result = ($temperature * 9/5) + 32;
        echo "<p>{$temperature} Celsius is equal to {$result} Fahrenheit.</p>";
        break;
        case 'fahrenheit_to_celsius':
        $result = ($temperature - 32) * 5/9;
        echo "<p>{$temperature} Fahrenheit is equal to {$result} Celsius.</p>";
        break;


    


    }

    
 }
        
 ?>
        </div>
    </div>

    
</body>
</html>