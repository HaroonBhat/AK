<?php
include 'include/_connection.php';

$showalert=false;
$showerror=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


  $existsql = "SELECT * FROM `users12` WHERE username = '$username'";
  $result = mysqli_query($conn, $existsql);
  $numExitsRows = mysqli_num_rows($result);
  if ($numExitsRows > 0) {
    $showerror = "Username already Exists";
  } else {

    if ($password == $cpassword) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users12` ( `username`, `email`, `password`, `date`) VALUES ( '$username', '$email', '$hash', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showalert = true;
       
      }
    } 
    else {
      $showerror = "password do not match";
    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USER | SIGN UP</title>
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/css/style2.css">
  <script src="vendor/js/bootstrap.js"></script>
</head>

<body>
  <?php
  include 'include/-nav_signin.php';
  ?>
    <?php
    if($showalert){
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success !</strong> Your account have been created successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
 if($showerror){
                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR !</strong> '.$showerror.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
            }
    ?>

  <div class="container text-center form-control  ">
    <div class="header align-middle">
      <h1>SIGN UP</h1>
      <hr class="ali">
    </div>
    <form action="../users/signup.php?sigup=true" method="POST">
      <div class="row mb-3 mt-4">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" id="username" name="username" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" id="email" name="email" class="form-control">
        </div>
      </div>
      <div class="row mb-3">
        <label for="password" class="col-sm-2 col-form-label">Password</label>

        <div class="col-sm-10">
          <input type="password" id="password" name="password" class="form-control">
        </div class="row mb-3">
      </div>
      <div class="row mb-3">
        <label for="cpassword" class="col-sm-2 col-form-label">Confirm password</label>
        <div class="col-sm-10">
          <input type="cpassword" name="cpassword" id="cpassword" class="form-control">
        </div>
      </div>
      <button class="btn end mt-3 mb-4" type="submit">Sign up</button>

    </form>
  </div>

</html>