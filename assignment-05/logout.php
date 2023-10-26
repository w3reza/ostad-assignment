<?php

session_start();



$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    $id = array();
    $emailAddress =array();
    $userName = array();
    $password = array();
    $role = array();
    while(!feof($myfile)) {
      $line = fgets($myfile);
      $values = explode(",", $line);  // role, email, password, firstname, lastname, age
      if (count($values) >= 5) {
        array_push($id, trim($values[0]));
        array_push($emailAddress, trim($values[1]));
        array_push($userName, trim($values[2]));
        array_push($password, trim($values[3]));
        array_push($role, trim($values[4]));
      }
     

      
    }
      fclose($myfile);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $emailAddresschk = $_POST['emailAddress'];
      $passwordchk = $_POST['password'];
      for ($i=0; $i < count($emailAddress); $i++) { 
     
          $_SESSION["role"] = $role[$i];
          $_SESSION["emailAddress"] = $emailAddress[$i];
          $_SESSION["userName"] = $userName[$i];

          
                    
      
      }
    }

    session_unset();
    session_destroy();


header("Location: login.php");

?>