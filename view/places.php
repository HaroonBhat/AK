<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLACES</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <?php include 'include/_connection.php';
    include 'include/_nav-bar.php';

    $id = $_GET['palid'];
    $sql = "SELECT * FROM `places` WHERE place_id = $id";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
        $palname =$row['place_name'];
        $paldesc =$row['place_desc'];
     
    ?>
     <div class="container text-center bg-dark text-white pt-4 ">
    <h1 class="mb-4"><?php echo $palname; ?></h1>
    <p class="pb-4"><?php echo $paldesc; ?></p>
    </div>
    <?php include 'include/_footer.php'; ?>

</body>
</html>