<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABOUT KASHMIR</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="css/style2.css">
</head>

<body>

  <?php
  include 'include/_connection.php';
  ?>
  <?php
  include 'include/_nav-bar.php';
  ?>

  <div class="text-white mid-content ">
    <div class="container text-center inside">
      <div>
        <h1 style="font-size: 3rem;">In-depth stories you won't find anywhere else</h1>
      </div>
      <br>
      <div style="color: #96979d ;font-weight: 500;">
        <h2>Join now and start reading the best in stories.</h2>
      </div>
    </div>
    <div style="max-width: 55%;  " class="container mt-3 p-3">
      <input style="margin-bottom: 10%;" type="text" class="form-control" placeholder="for now will edit soon" readonly>
    </div>
  </div>
  <?php
  $sql = "SELECT * FROM `favperson` -- ORDER BY `person_id` DESC ";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
  $id = $row['person_id'];
  $cat = $row['person_name'];
  $desc = $row['person_description'];

  echo '
 <div class="text-center" style="margin-left: 5%; margin-right:10%;" >
       
          <div class="card mb-3" style="max-width: 700px; margin-top: 5%; margin-bottom: 2%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="view/img/person'. $id .'.jpg" class="img-fluid rounded-start" style="max-height: 180px; "  alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"> ' . $cat . '</h5>
                <p class="card-text"> ' . substr($desc, 0, 50) . '... </p>
                <a class="btn btn-primary" href="view/bio.php?catid=' . $id . ' " >view thread</a>
              </div>
            </div>
          </div>
        </div>
        ';
  ?>

  <?php
  $sql = "SELECT * FROM `places`";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
  $id = $row['place_id'];
  $cat = $row['place_name'];
  $desc = $row['place_desc'];
  echo '
    <div class="card mb-3 mob start-50" style="max-width: 700px; margin-top: 5%; margin-bottom: 2%; ">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/gul.jpg" class="img-fluid rounded-start" style="max-height: 250px;" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"> ' . $cat . '</h5>
              <p class="card-text"> ' . substr($desc, 0, 60) . '... </p>
              <a class="btn btn-primary" href="view/places.php?palid=' . $id . ' " >view thread</a>
            </div>
          </div>
        </div>
      </div>
  </div>
'; ?>

  <?php
  $sql = "SELECT * FROM `culture`";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
  $id = $row['culture_id'];
  $cat = $row['culture_name'];
  $desc = $row['culture_description'];
  echo '
        <div class="text-center" style="margin-left: 5%; margin-right:10%;  margin-bottom: 5%;" >
            <div class="card mb-3" style="max-width: 700px; margin-top: 5%; margin-bottom: 2%;">
                    <div class="row g-0">
               <div class="col-md-4">
     <img src="images/waz.jpg" class="img-fluid rounded-start" alt="...">
   </div>
   <div class="col-md-8">
     <div class="card-body">
       <h5 class="card-title"> ' . $cat . '</h5>
       <p class="card-text"> ' . substr($desc, 0, 60) . '... </p>
       <a class="btn btn-primary" href="view/culture.php?calid=' . $id . ' " >view thread</a>
     </div>
   </div>
   </div>
</div>

</div>';
  ?>

  <footer>
    <div style="background-color: rgba(0, 0, 0, 0.8);" class="footer-one">
      <div class="footer-nav">
        <a href="view/about.php">About</a>
        <a href="">Events</a>
        <a href="view/contact.php">Contact Us</a>

      </div>
      <div>
        <div style="max-width: 55%;  " class="container mt-3 p-3">
          <input style="margin-bottom: 10%;" type="text" class="form-control" placeholder="for now will edit soon" readonly>
        </div>
      </div>
      <div class="container text-white footer-end pb-3">
        <span style="color: rgba(233, 228, 228, 0.608);">©2022 About Kashmir. All Rights Reserved.</span>

      </div>
    </div>
  </footer>


</body>

</html>