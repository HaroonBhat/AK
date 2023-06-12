<?php

$insert = false;
include 'include/_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];




  $sql = "INSERT INTO `contact` ( `fullname`, `email`, `phoneno`, `message`) VALUES ( '$name', '$email', '$phone', '$message')";

  $result = mysqli_query($conn, $sql);
  if ($result) {

    $insert = true;
  } else {
    echo "We  could not update the record successfully";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Contact US </title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/contactus.css">
  <script src="../js/bootstrap.js"></script>
  <link rel="stylesheet" href="../css/style2.css">
</head>

<body class="bg">
  <?php
  include 'include/_nav-bar.php';

  if ($insert) {
    echo "<div class='alert alert-success alert-dismissible fade show'  role='alert'>
  <strong>Success !</strong> Your report have been submited successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
  }
  ?>
  </div>

  <div class="container contact_zero text-white ">
    
    <h1 class="contact_one">Contact Us</h1>
    <br>
    <p class="contact_two"> Enter your details</p>
    <div>
      <form action="../view/contact.php" method="POST" class="contact_three">
        <label for="text"  class="contact_four">YOUR NAME</label>
        <input type="text" name="name" id="name" placeholder="Full Name" required="true"><br>
        <label for="Email" class="contact_four">EMAIL ADDRESS</label><br>
        <input type="email" name="email" id="email" placeholder="Eg. example@gmail.com"><br>
        <label for="Phone Number" class="contact_four">PHONE NUMBER</label><br>
        <input type="number" name="phone" id="phone" placeholder="Eg +1800000000" required="true" onkeypress="return onlyNumberKey(event)"><br>
        <label for="message" class="contact_four">MESSAGE</label><br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your comments"></textarea>
        <button type="submit" class="btn end ">Submit</button>

      </form>
    </div>

  </div>
  <?php
  include 'include/_footer.php';
  ?>
  <script>
        function onlyNumberKey(evt) {
              
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
    </script>
</body>

</html>