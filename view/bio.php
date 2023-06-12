<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIO</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style2.css">
    <style>
        .part-one{
            min-height: 500px;
        }
    </style>
</head>

<body>
    <?php
    include 'include/_connection.php';
    include 'include/_nav-bar.php';

    $id = $_GET['catid'];
    $sql = "SELECT * FROM `favperson` WHERE person_id = $id";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
        $catname =$row['person_name'];
        $catdesc =$row['person_description'];
     

    ?>
    <div class="container text-center  pt-4 part-one">
    <h1 class="mb-4"><?php echo $catname; ?></h1>
    <p class="pb-4"><?php echo $catdesc; ?></p>
    </div>
    
    <?php include 'include/_footer.php'; ?>
</body>

</html>