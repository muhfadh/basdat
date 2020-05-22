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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Transaction</title>
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
                <a class="nav-link" href="transaction.php">Transaction<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-light" style="background-color: transparent;">
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
</nav>

<body>

    <center>
        <table class="table" style="margin: 50px">
            <thead>
                <tr>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Tanggan</th>
                    <th scope="col">Jenis Pelayanan</th>
                    <th scope="col">ID Pelanggan</th>
                    <th scope="col">ID Part</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($trans as $row) : ?>
                    <tr>
                        <td><?= $row["kode_trx"]; ?></td>
                        <td><?= $row["tanggal"]; ?></td>
                        <td><?= $row["id_pelayanan"]; ?></td>
                        <td><?= $row["id_pelanggan"]; ?></td>
                        <td><?= $row["id_part"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</body>

</html>