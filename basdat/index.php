<?php
session_start();
if (!isset($_SESSION["login"])) {
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Bengkel Mobil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servis.php">Servis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user-transaksi.php">Transaksi</a>
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

  <center>
  <div class="card-deck" style="margin: 80px 450px">
  <div class="card col-6">
        <div class="card-body mb-2">
          <img src="img/sp.png" class="card-img-top mt-2" width="10px">
        </div>
        
        <div class="card-body">
            <a class="btn btn-primary" href="servis.php" role="button">Servis</a>
        </div>
  </div>
  <div class="card col-6">
        <div class="card-body mb-2">
          <img src="img/transaksi.png" class="card-img-top mt-2" width="10px">
        </div>
        
        <div class="card-body">
            <a class="btn btn-primary" href="user-transaksi.php" role="button">Transaksiku</a>
        </div>
  </div>
  </div>
  </center>

</body>

</html>