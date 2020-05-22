<?php
    require 'functions.php';
    $trans = query("SELECT * FROM transaksi");

    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
    if ($_SESSION["username"]!="admin") {
        header("Location: index.php");
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
  <title>Add Transaction</title>
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
      <li class="nav-item">
        <a class="nav-link" href="customer.php">Customer</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="transaction.php">Transaction <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<body>

  <form style="margin: 50px 100px;">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="kode_trx">Kode Transaksi</label>
        <input type="text" class="form-control" id="kode_trx">
      </div>
      <div class="form-group col-md-6">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" id="tanggal">
      </div>
    </div>
    <div class="form-row">
      <div class="col-auto">
        <label for="service">ID Pelayanan</label>
        <input type="text" class="form-control" id="service">
      </div>
      <div class="col-auto">
        <label for="id_pel">ID Pelanggan</label>
        <input type="text" class="form-control" id="id_pel">
      </div>
      <div class="col-auto">
        <label for="part">ID Sparepart</label>
        <input type="text" class="form-control" id="part">
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
  </form>

</body>


</html>