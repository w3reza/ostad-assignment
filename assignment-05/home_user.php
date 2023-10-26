<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "user") {
  header("Location: login.php");
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
    
    
    <section class="vh-100 gradient-custom">
  <div class="container py-8 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-8">
          <button type="button" class="btn btn-outline-primary float-end"><a href="logout.php">logout</a></button>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Welcome User Panel</h3>
            
            
              <div class="row">

                <div class="col-md-12 mb-4">

                <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email Address</th>
      <th scope="col">User Name</th>
      <th scope="col">Role Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $_SESSION["emailAddress"];?></td>
      <td><?php echo $_SESSION["userName"];?></td>
      <td><?php echo $_SESSION["role"];?></td>
    </tr>
    
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>