<?php
    require 'functions.php';
    $trans = query("SELECT * FROM transaksi");

    session_start();
    if (!isset($_SESSION["login"])) {
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
  <title>Add Customer</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Bengkel Mobil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="customer.php">Customer <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transaction.php">Transaction</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<body>

  <form action="" method="POST" style="margin: 50px 100px;">
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="idpel">ID Pelanggan</label>
        <input type="text" class="form-control" id="idpel">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nama Pelanggan</label>
        <input type="text" class="form-control" id="inputEmail4">
      </div>
      <div class="form-group col-md-6">
        <label for="noHP">Nomor HP</label>
        <input type="text" class="form-control" id="noHP">
      </div>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat">
    </div>
    <div class="form-row">
      <div class="col-auto">
        <label for="nik">NIK</label>
        <input type="text" class="form-control" id="nik">
      </div>
      <div class="col-auto">
        <label for="merk">Merk</label>
        <input type="text" class="form-control" id="merk">
      </div>
      <div class="col-auto">
        <label for="nopol">Nomor Polisi</label>
        <input type="text" class="form-control" id="nopol">
      </div>
      <div class="col-auto">
        <label for="model">Model</label>
        <input type="text" class="form-control" id="model">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">DAFTAR SEKARANG!</button>
  </form>

</body>


</html>