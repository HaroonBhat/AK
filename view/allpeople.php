<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style2.css">
    <script src="../js/bootstrap.js"></script>
  
</head>

<body>

    <?php
    include 'include/_connection.php';
    
    include 'include/_nav-bar.php';
    ?>
    
    <div class="container my-4  ">
    <div class="row my-4 ">
    <?php
    $sql = "SELECT * FROM `favperson`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['person_id'];
        $cat = $row['person_name'];
        $desc = $row['person_description'];

        echo '
        <div class="col-md-4 my-2 ">
            <div class="card " style="max-width: 200px; margin-top: 5%; margin-bottom: 2%;">
               <img src="img/person' .$id  . '.jpg" class="card-img-top w-auto" style="max-height: 200px; "alt="...">
                 <div class="card-body">
                    <b class="card-title">' . $cat . '</b>
                    <p class="card-text"> ' . substr($desc, 0, 15) . '...</p>
                    <a class="btn btn-primary" href="bio.php?catid=' . $id . ' " >view thread</a>
                </div>
             </div>
         </div>
  ';
    }
    
    
    ?>
    </div>
</div>
<?php include 'include/_footer.php'; ?>




</body>

</html>