<?php
    session_start();
    require 'functions.php';

    
    $trans = query("SELECT * FROM transaksi");   
    if (!isset($_SESSION["login"]) && !isset($_SESSION["admin"])) {
        header("Location: login.php");
        exit;
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
    <title>Transaksi</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin.php">Bengkel Mobil</a>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servis.php">Servis</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="user-transaksi.php">Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
        </ul>
    </div>
</nav>
<!-- <nav class="navbar navbar-light" style="background-color: transparent;">
    <a class="btn btn-primary" href="addTrx.php" role="button" style="margin: 30px">+ Tambah Transaksi</a>
    <form class="form-inline my-2 my-lg-0">
        <select class="custom-select" style="margin-right: 6px">
            <option selected>Cari Berdasarkan</option>
            <option value="nama">No. Transaksi</option>
            <option value="idpel">ID Pelanggan</option>
            <option value="nik">NIK Mobil</option>
        </select>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav> -->
    <div class="container mt-3">
        <center>
        <div class="card" style="width: 18rem;">
            <?php foreach($trans as $t) : ?>
            <div class="card-header">
                TransaksiKu
            </div>  
                  
            <ul class="list-group list-group-flush">
                
                <li class="list-group-item">Kode Transaksi : <?= $t["kode_trx"] ?></li>
                <li class="list-group-item">Tanggal : <?= $t["tanggal"] ?></li>
                <li class="list-group-item">Nama Pelanggan : <?= $_SESSION["nama_pelanggan"] ?></li>
                <li class="list-group-item">NIK Mobil : <?= $_SESSION["nik"] ?></li>
                <li class="list-group-item">Jenis Pelayanan : <?= $_SESSION["jenis_pelayanan"] ?></li>
                <li class="list-group-item">No HP : <?= $_SESSION["no_hp"] ?></li>
                
            </ul>
            <?php endforeach ?>
        </div>
        </center>
    </div>
</body>

</html>