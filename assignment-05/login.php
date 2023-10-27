<?php


session_start();

if (isset($_SESSION["role"]) && $_SESSION["role"] == "user"){
  header("Location: home_user.php");
  exit;
}
elseif (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
  header("Location: roleManagement.php");
  exit;
}

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
          

        if ($emailAddresschk == $emailAddress[$i] && $passwordchk == $password[$i] && $role[$i] == "admin") {
          $_SESSION["role"] = $role[$i];
          $_SESSION["emailAddress"] = $emailAddress[$i];
          $_SESSION["userName"] = $userName[$i];

          

          header("Location: roleManagement.php");
        }
        else if ($emailAddresschk == $emailAddress[$i] && $passwordchk == $password[$i] && $role[$i] == "user") {
          $_SESSION["role"] = $role[$i];
          $_SESSION["emailAddress"] = $emailAddress[$i];
          $_SESSION["userName"] = $userName[$i];

          header("Location: index.php");
        }

        else if ($emailAddresschk == $emailAddress[$i] && $passwordchk == $password[$i] && $role[$i] == "manager") {
          $_SESSION["role"] = $role[$i];
          $_SESSION["emailAddress"] = $emailAddress[$i];
          $_SESSION["userName"] = $userName[$i];

          header("Location: index.php");
        }

        else {
          $errorMessage = "Wrong email or password";
        }
      }
    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    
    
    <section class="gradient-custom">
  <div class="container py-5 h-100">
    
    
    <div class="row justify-content-center align-items-center h-100">
    
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="alert alert-success" role="alert">
        <strong>User Access:</strong> Email: user@gmail.com Password: 12345
      </div>
      <div class="alert alert-info" role="alert">
    <strong>Admin Access:</strong> Email: reza@gmail.com Password: 12345
  </div>
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login Form</h3>
            <form action="login.php" method="POST">
              <div class="row">

                <div class="col-md-12 mb-4">

                <div class="form-outline">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input type="text" name="emailAddress" id="emailAddress" class="form-control form-control-lg" />
                </div>

                </div>
                <div class="col-md-12 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" />
                  </div>
                  <p class="text-danger"><?php echo $errorMessage ?? '';?></p>

                </div>
              </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
            <p>Don't have an account? <a href="registration.php">Sign up</a></p>
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