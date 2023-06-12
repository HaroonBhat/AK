<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CULTURE</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style2.css">
</head>

<body>
    <?php
    include 'include/_connection.php';
    include 'include/_nav-bar.php';

    $id = $_GET['calid'];
    $sql = "SELECT * FROM `culture` WHERE culture_id = $id";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
        $catname =$row['culture_name'];
        $catdesc =$row['culture_description'];
     

    ?>
    <div class="container text-center bg-dark text-white pt-4 ">
    <h1 class="mb-4"><?php echo $catname; ?></h1>
    <p class="pb-4"><?php echo $catdesc; ?></p>
    </div>
    <?php include 'include/_footer.php'; ?>
</body>

</html>