<?php
session_start();
if (!isset($_SESSION["login"]) && !isset($_SESSION["admin"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin.php">Bengkel Mobil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transaksi.php">Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pelanggan.php">Pelanggan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pelayanan.php">Pelayanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mobil.php">Mobil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="montir.php">Montir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sparepart.php">sparepart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="supplier.php">supplier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gudang.php">gudang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>



  <center>
    <div class="alert alert-success" role="alert">
    <?php echo "Hai, " . $_SESSION["nama_pelanggan"];?>
    </div>
  </center>
  
    <div class="card-deck row" style="margin: 80px 250px">
        <div class="card col">
        <img src="img/transaksi.png" class="card-img-top mt-2" width="100px">
        <div class="card-body"><br>
            <center><a class="btn btn-primary" href="transaksi.php" role="button">Transaksi</a></center>
        </div>
        </div>

        <div class="card col">
        <img src="img/customers.png" class="card-img-top mt-2" width="100px">
        <div class="card-body"><br>
            <center><a class="btn btn-primary" href="pelanggan.php" role="button">Pelanggan</a></center>
        </div>
        </div>

        <div class="card col">
        <img src="img/technical-support.png" class="card-img-top mt-2" width="100px">
        <div class="card-body"><br>
            <center><a class="btn btn-primary" href="pelayanan.php" role="button">Pelayanan</a></center>
        </div>
        </div>

        <div class="card col">
        <img src="img/transport.png" class="card-img-top mt-2" width="100px">
        <div class="card-body">
            <center><a class="btn btn-primary" href="mobil.php" role="button">Mobil</a></center>
        </div>
        </div>
    </div>

    <div class="card-deck row" style="margin: 80px 250px">
        <div class="card col">
        <img src="img/worker.png" class="card-img-top mt-2" width="100px">
        <div class="card-body">
            <center><a class="btn btn-primary" href="montir.php" role="button">Montir</a></center>
        </div>
        </div>


        <div class="card col">
        <img src="img/spare.png" class="card-img-top mt-2" width="100px">
        <div class="card-body">
            <center><a class="btn btn-primary" href="sparepart.php" role="button">Sparepart</a></center>
        </div>
        </div>
        <div class="card col">
        <img src="img/supplier.png" class="card-img-top mt-2" width="100px">
        <div class="card-body">
            <center><a class="btn btn-primary" href="supplier.php" role="button">Supplier</a></center>
        </div>
        </div>
        <div class="card col">
        <img src="img/factory.png" class="card-img-top mt-2" width="100px">
        <div class="card-body">
            <center><a class="btn btn-primary" href="gudang.php" role="button">Gudang</a></center>
        </div>
        </div>
    </div>
  </div>

</body>

</html>