<?php
 session_start();
 if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
 require 'functions.php';
 $id_pelanggan = $_SESSION["id_pelanggan"];
 $montir = query("SELECT * FROM montir");
 $sparepart = query("SELECT * FROM sparepart");
 //cek tombol submit

 if(isset($_POST["submit"])){  
     //cek apakah data berhasil ditambah
     if((tambahServis($_POST)) > 0){
        $_SESSION["jenis_pelayanan"] = $_POST["jenis_pelayanan"]; 
         echo "
             <script>
                 alert('servis berhasil ditambahkan');
                 document.location.href = 'index.php';
             </script>
         ";
     }
     else{
         echo "
             <script>
                 alert('servis gagal ditambahkan');
                 document.location.href = 'index.php';
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
  <title>Tambah servis</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin.php">Bengkel Mobil</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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



  <form action="" method="POST" style="margin: 50px 100px;">
  <input type="hidden" name="id_pelanggan" id="id_pelanggan" value="<?= $id_pelanggan ?>">
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="jenis_pelayanan">Jenis Pelayanan</label>
        <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
            <label for="id_montir">MONTIR</label>
            <select name="id_montir" id="id_montir">
                <option disabled selected> pilih </option>
                <?php foreach($montir as $m) : ?>
                <option value="<?=$m['id_montir']?>"><?=$m['nama_montir']?></option>
                <?php endforeach; ?>
            </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-2">
            <label for="id_part">SPAREPART</label>
            <select name="id_part" id="id_part">
                <option disabled selected> pilih </option>
                <?php foreach($sparepart as $s) : ?>
                <option value="<?=$s['id_part']?>"><?=$s['nama_part']?></option>
                <?php endforeach; ?>
            </select>
      </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Servis</button>
  </form>

</body>


</html>