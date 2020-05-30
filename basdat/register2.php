<?php
session_start();
require 'functions.php';
    if (!isset($_SESSION["lanjut"])) {
        header("Location: register.php");
        exit;
    }

    $nik = $_POST["nik"];
    if(isset($_POST["register"])){
        if(registrasi2($_POST)> 0){
            
            echo "  <script>
                        alert('User baru berhasil ditambahkan');
                        document.location.href = 'login.php';
                    </script>";
            $_SESSION["selesai"] = true;
            
            
        }
        else{
            echo mysqli_error($conn);
        }
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
        <h5 class="card-header">Register Pelanggan</h5>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <center>
                    <div class="form-group col-md-4">
                        <label for="nik">NIK Mobil</label>
                        <input type="number" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nopol">Nomor Polisi</label>
                        <input type="text" class="form-control" id="nopol" name="nopol">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="merk">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" id="model" name="model">
                    </div>
                </center>
                <button type="submit" name="register" class="btn btn-primary">Register</button>     
            </form>
        </div>
    </div>

</body>
</html>