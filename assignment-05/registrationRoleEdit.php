<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
  header("Location: login.php");
  exit;
}

if (isset($_GET['id']) && isset($_GET['emailAddress']) && isset($_GET['userName'])) {
  $id = $_GET['id'];
  $emailAddressvalue = $_GET['emailAddress'];
  $userNamevalue = $_GET['userName'];
 
 
  

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Newid = $_POST['id']; // New role name
  $Newemail = $_POST['emailAddress']; // New role name
  $Newuser = $_POST['userName']; // New role name
  $Newpassword = $_POST['password'];
  $Newrole = $_POST['role']; // New role name

  if ( empty( $Newemail ) || empty( $Newuser ) || empty( $Newpassword ) ) {
    $errorMsg = "Please fill  all the fields.";
} else{

  $new_content_for_line = $Newid . ", {$Newemail}, {$Newuser}, {$Newpassword}, {$Newrole}"; // New content for the specific line

  $file = 'newfile.txt';

  // Read the existing content
  $lines = file($file);

  // Open the file for writing
  $fileHandle = fopen($file, 'w');

  // Loop through the lines
  foreach ($lines as $line_num => $line) {
    $line_id = explode(',', $line)[0]; // Assuming ID is at the beginning of each line before ':'
    // Check if the line ID matches the ID to edit
    if ($line_id == $Newid) {
      // Update the line content
      $lines[$line_num] = $new_content_for_line . "\n";
    }
  }

  // Write the updated content back to the file
  fwrite($fileHandle, implode('', $lines));

  // Close the file handle
  fclose($fileHandle);

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
    <title>User Edit</title>
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit User Data</h3>
            <form action="registrationRoleEdit.php" method="POST">

              <div class="row">
                <div class="col-md-12 mb-4 pb-2">

                  <div class="form-outline">
                  <input type="hidden" name="id" value="<?php echo $id ?? ''; ?>" id="id"
                        class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Email</label>
                    <input required type="email" name="emailAddress" id="emailAddress" value="<?php echo $emailAddressvalue; ?>" class="form-control form-control-lg" />
                    
                  </div>

                </div>
                <div class="col-md-12 mb-4">

                <div class="form-outline">
                <label class="form-label" for="lastName">User Name</label>
                <input required type="text" name="userName" id="userName" value="<?php echo $userNamevalue; ?>" class="form-control form-control-lg" />
                </div>

                </div>

              </div>
              <div class="row">
                <div class="col-md-12 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="password">Password</label>
                    <input required type="password" name="password" id="password" class="form-control form-control-lg" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">
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
                  <select class="select form-control-lg" name="role">
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
            <p><a href="roleManagement.php">Back</a></p>
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