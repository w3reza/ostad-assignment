<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailAddress = $_POST['emailAddress'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $file = 'newfile.txt';

     // Check if the file exists
  if (file_exists($file)) {
    // Read the existing content
    $content = file($file);
    // Get the number of lines
    $lineCount = count($content);
  } else {
    // If the file doesn't exist, start the ID from 1
    $lineCount = 0;
  }

  // Increment the ID for the new line
  $newID = $lineCount + 1;

  // Open the file in append mode
  //$fileHandle = fopen($file, 'a');
  

    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "{$newID}, ${emailAddress}, {$userName}, {$password}, ${role} \n";

    fwrite($myfile, $txt);
    fclose($myfile);
    
    //header("Location: login.php");  
    echo "<script type='text/javascript'>alert('User created successfully');</script>";
    header("Location: login.php");  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    
    
    <section class="gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="registration.php" method="POST">

              <div class="row">
                <div class="col-md-12 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input required type="email" name="emailAddress" id="emailAddress" class="form-control form-control-lg" />
                    
                  </div>

                </div>
                <div class="col-md-12 mb-4">

                <div class="form-outline">
                <label class="form-label" for="lastName">User Name</label>
                <input required type="text" name="userName" id="userName" class="form-control form-control-lg" />
                </div>

                </div>
                <div class="col-md-12 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="password">Password</label>
                    <input required type="password" name="password" id="password" class="form-control form-control-lg" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">
                <input type="hidden" name="role" id="role" value="user" class="form-control form-control-lg" />

                <!-- <label class="form-label select-label">Choose User Role</label>
                  <select class="select form-control-lg" name="role">
                    <option value="1" disabled>Choose option</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    
                  </select> -->

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>