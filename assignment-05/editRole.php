<?php
session_start();


if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
  header("Location: login.php");

}



if (isset($_GET['id']) && isset($_GET['role'])) {
  $id = $_GET['id'];
  $role = $_GET['role'];

}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Newid = $_POST['id']; // New role name
  $Newrole = $_POST['role']; // New role name

  $new_content_for_line = $Newid . ", {$Newrole}"; // New content for the specific line

  $file = 'role.txt';

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
  // Display the alert
  echo "<script type='text/javascript'>alert('Role Updated successfully');</script>";

  // Redirect after displaying the alert
  header("Location: roleManagement.php");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Role</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="mystyle.css">
</head>

<body>


  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Create Role</h3>
              <form action="editRole.php" method="POST">

                <div class="row">
                  <div class="col-md-12 mb-4">

                    <div class="form-outline">
                      <input type="hidden" name="id" value="<?php echo $id ?? ''; ?>" id="id"
                        class="form-control form-control-lg" />
                      <label class="form-label" for="role">Role Name</label>
                      <input type="text" name="role" id="role" value="<?php echo $role ?? ''; ?>"
                        class="form-control form-control-lg" />

                    </div>

                  </div>

                </div>




                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
</body>

</html>