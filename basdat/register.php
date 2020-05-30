<?php
session_start();
require 'functions.php';

    if(isset($_POST["register_pertama"])){
        if(registrasi($_POST) > 0){
            echo "  <script>
                        document.location.href = 'login.php';
                    </script>";
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
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="no_hp">Nomor HP</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
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
                    <div class="form-group col-md-4">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="password2">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password2" id="password2">
                    </div>
                </center>
                <button type="submit" name="register_pertama" class="btn btn-primary">Lanjut</button>
                
            </form>
            <a class="btn btn-primary mt-3" href="login.php">Sudah punya akun?</a> 
        </div>
    </div>

</body>
</html>