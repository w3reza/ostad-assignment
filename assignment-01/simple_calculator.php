<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
  body {
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

input[type="number"], select {
    width: 95%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
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
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            //Task 7: Simple Calculator
           // Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1= $_POST['num1'];
                $number2 = $_POST['num2'];
                $operation = $_POST['operation'];
                switch($operation){
                    case 'add':
                        $result = $number1 + $number2;
                        echo "Result is {$result}";
                        break;
                    case 'subtract':
                        $result = $number1 - $number2;
                        echo "Result is {$result}";
                        break;
                    case 'multiply':
                        $result = $number1 * $number2;
                        echo "Result is {$result}";
                        break;
                    case "divide":
                        if ($number2 != 0 && $number1 != 0){
                        $result = $number1 / $number2;
                        echo "Result is {$result}";
                          }
                        else{
                            echo "unable to divide from 0";
                        }
                        break;
                                       
                }
                
                

                
            }
            ?>
        </div>
    </div>
</body>
</html>
