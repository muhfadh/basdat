<?php
 session_start();
 if (!isset($_SESSION["login"]) && !isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
 require 'functions.php';
 //cek tombol submit
 if(isset($_POST["submit"])){  
     //cek apakah data berhasil ditambah
     if(tambahSupplier($_POST) > 0){
         echo "
             <script>
                 alert('Supplier berhasil ditambahkan');
                 document.location.href = 'supplier.php';
             </script>
         ";
     }
     else{
         echo "
             <script>
                 alert('Supplier gagal ditambahkan');
                 document.location.href = 'supplier.php';
             </script>
         ";
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
  <title>Tambah Supplier</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin.php">Bengkel Mobil</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="admin.php">Home</span></a>
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
            <li class="nav-item active">
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



  <form action="" method="POST" style="margin: 50px 100px;">
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="id_supplier">Id Supplier</label>
        <input type="text" class="form-control" id="id_supplier" name="id_supplier">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="jumlah_barang">Jumlah Barang</label>
        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang">
      </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
  </form>

</body>


</html>