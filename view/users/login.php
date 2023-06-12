<?php
$login = false;
$showerror = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'include/_connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from users12 where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: /ak/index.php");
            } else {
                $showerror = "Invalid id or password";
            }
        }
    } else {
        $showerror = "Invalid id or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER | LOG IN</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/css/style2.css">
    <script src="vendor/js/bootstrap.js"></script>
</head>

<body>
    <?php include 'include/_nav-bar.php'  ?>
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success !</strong> LOGIN  successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showerror) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR !</strong> ' . $showerror . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="container text-center form-control  ">
        <div class="header align-middle">
            <h1>LOG IN</h1>
            <hr class="ali">
        </div>
        <form action="../users/login.php" method="POST">
            <div class="row mb-3 mt-4">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" id="username" name="username" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>

                <div class="col-sm-10">
                    <input type="password" id="password" name="password" class="form-control">
                </div class="row mb-3">
            </div>

            <button class="btn end mt-3 mb-4" type="submit">log in</button>

        </form>
    </div>

</body>

</html>