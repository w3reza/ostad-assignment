<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
  header("Location: login.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailAddress = $_POST['emailAddress'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ( empty( $emailAddress ) || empty( $userName ) || empty( $password ) ) {
      $errorMsg = "Please fill  all the fields.";
  } else{

    
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

 

    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "{$newID}, ${emailAddress}, {$userName}, {$password}, ${role} \n";
    fwrite($myfile, $txt);
    fclose($myfile);

    echo "<script type='text/javascript'>alert('User created successfully');</script>";
    header("Location: login.php");  
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User create</title>
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
                <?php
                  $myrolefile = fopen("role.txt", "r") or die("Unable to open file!");
                  // Output one line until end-of-file
                  $id = array();
                  $role = array();

                  while (!feof($myrolefile)) {
                    $line = fgets($myrolefile);
                    $values = explode(",", $line); // role, email, password, firstname, lastname, age
                    if (count($values) >= 2) {
                      array_push($id, trim($values[0]));
                      array_push($role, trim($values[1]));

                    }


                  }
                  fclose($myrolefile);
                  ?>


                <label class="form-label select-label">Choose User Role</label>
                  <select required class="select form-control-lg" name="role">
                    <option value="1" disabled>Choose option</option>
                    <?php
                      for ($i = 0; $i < count($id); $i++) {
                        echo "<tr>";
                        echo " <option value=". $role[$i] .">" . $role[$i] . "</option>";
                        echo " <td>" . $role[$i] . "</td>";
                        //echo " <td style='width: 20px;'> <button type='button' class='btn btn-success'><a class='acolor' href='editRole.php?id={$id[$i]}&role={$role[$i]}'>" . "Edit" . "</a></button> </td>";
                        //echo " <td style='width: 20px;'> <button type='button' class='btn btn-danger'> <a  class='acolor' href='userRoleDelete.php?id={$id[$i]}'>" . "Delete" . "</a></button> </td>";

                        echo "</tr>";

                      }


                      ?>
                    
                    
                  </select> 

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