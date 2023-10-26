<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
  header("Location: login.php");
  exit;
}


$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$id = array();
$emailAddress = array();
$userName = array();
$password = array();
$role = array();
while (!feof($myfile)) {
  $line = fgets($myfile);
  $values = explode(",", $line); // role, email, password, firstname, lastname, age
  if (count($values) >= 5) {
    array_push($id, trim($values[0]));
    array_push($emailAddress, trim($values[1]));
    array_push($userName, trim($values[2]));
    array_push($password, trim($values[3]));
    array_push($role, trim($values[4]));
  }


}
fclose($myfile);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="mystyle.css">
</head>

<body>


  <section class="gradient-custom">
    <div class="container py-8 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-9">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-8">
              <button type="button" class="btn btn-outline-primary float-end"><a href="logout.php">logout</a></button>
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Welcome Admin Panel</h3>


              <div class="row">

                <div class="col-md-12 mb-4">
                <button type="button" class="btn btn-primary float-end"  style='margin-bottom: 10px;'><a class="acolor" href="registrationRole.php">Create
                      New User</a></button>

                  <table class="table table-bordered">
                    <thead>
                      <tr>

                        
                        <th scope="col">Email Address</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Role Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      for ($i = 0; $i < count($emailAddress); $i++) {
                       

                        echo "<tr>";
                        echo " <td>" . $emailAddress[$i] . "</td>";
                        echo " <td>" . $userName[$i] . "</td>";
                        echo " <td>" . $role[$i] . "</td>";
                        echo " <td style='width: 20px;'> <button type='button' class='btn btn-success'><a class='acolor' href='registrationRoleEdit.php?id={$id[$i]}&emailAddress={$emailAddress[$i]}&userName={$userName[$i]}'>" . "Edit" . "</a></button> </td>";
                        echo " <td style='width: 20px;'> <button type='button' class='btn btn-danger'> <a  class='acolor' href='userDelete.php?id={$id[$i]}'>" . "Delete" . "</a></button> </td>";
                        echo "</tr>";

                      }


                      ?>

                    </tbody>
                  </table>


                  <button type="button" class="btn btn-primary float-end"><a class="acolor" href="createRole.php">Create
                      New Role</a></button>
                  <h3 class="mb-0 pb-2 pb-md-0 mb-md-0">Role Management</h3>
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

                  <table class="table table-bordered" style='margin-top: 20px;'>
                    <thead>
                      <tr>

                        <th scope="col">ID</th>
                        <th scope="col">Role Name</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      for ($i = 0; $i < count($id); $i++) {
                        echo "<tr>";
                        echo " <td>" . $id[$i] . "</td>";
                        echo " <td>" . $role[$i] . "</td>";
                        echo " <td style='width: 20px;'> <button type='button' class='btn btn-success'><a class='acolor' href='editRole.php?id={$id[$i]}&role={$role[$i]}'>" . "Edit" . "</a></button> </td>";
                        echo " <td style='width: 20px;'> <button type='button' class='btn btn-danger'> <a  class='acolor' href='userRoleDelete.php?id={$id[$i]}'>" . "Delete" . "</a></button> </td>";

                        echo "</tr>";

                      }


                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
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