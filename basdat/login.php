<?php
session_start();
require 'functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM pelanggan INNER JOIN user ON pelanggan.id_pelanggan=user.id_pelanggan WHERE username='$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["nama_pelanggan"] = $row["nama_pelanggan"];
            $_SESSION["id_pelanggan"] = $row["id_pelanggan"];
            $_SESSION["no_hp"] = $row["no_hp"];
            $_SESSION["nik"] = $row["nik"];
            if($username == "admin"){
                header("Location: admin.php");
                $_SESSION["admin"] = true;
                exit;
            }
            header("Location: index.php");
            exit;
        }
    }

    
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Login</title>
</head>

<body>

    <div class="card text-center" style="margin: 100px 200px">
        <h5 class="card-header">Login</h5>
        <div class="card-body">
            <form action="" method="POST">
                <center>
                    <div class="form-group col-md-4">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </center>
                <button type="submit" name="login" class="btn btn-primary">Login</button> 
            </form>
            <a class="btn btn-primary mt-3" href="register.php">Belum punya akun?</a> 
        </div>
    </div>

</body>
<?php if (isset($error)) : ?>
    <script>
        alert('WARNING!!! Username atau Password Salah!')
    </script>;
<?php endif; ?>

</html>