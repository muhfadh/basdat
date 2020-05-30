<?php
    $conn = mysqli_connect("localhost", "root", "", "basdat");
    $id_montir ='';
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function registrasi($data){
        global $conn;
        
        $nama_pelanggan = htmlspecialchars($data["nama_pelanggan"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        $nik = htmlspecialchars($data["nik"]);
        $nopol = htmlspecialchars($data["nopol"]);
        $merk = htmlspecialchars($data["merk"]);
        $model = htmlspecialchars($data["model"]);

        if(empty($nama_pelanggan)){
            echo "  <script>
                            alert('Nama kosong!');
                    </script>"; 
            return false;
        }

        // cek no_hp
        if(empty($no_hp)){
            echo "  <script>
                            alert('No HP kosong!');
                    </script>"; 
            return false;
        }
        else{
            if(!is_numeric($no_hp)){
                echo "  <script>
                            alert('No HP harus nomor!');
                    </script>"; 
                return false;
            }
        }

        // cek alamat
        if(empty($alamat)){
            echo "  <script>
                            alert('Alamat kosong!');
                    </script>"; 
            return false;
        }
        

        //cek username udh ada blm
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
        if(mysqli_fetch_assoc($result)){
            echo "  <script>
                            alert('Username sudah terdaftar!');
                    </script>"; 
            return false;
        }
    
        //cek konfirmasi password
    
        if($password !== $password2){
            echo "  <script>
                            alert('Konfirmasi Password tidak sesuai');
                    </script>";
            return false;
        }

        if(empty($nik)){
            echo "  <script>
                            alert('nik kosong!');
                    </script>"; 
            return false;
        }
        else{
            if(!is_numeric($nik)){
                echo "  <script>
                            alert('nik harus nomor!');
                    </script>"; 
                return false;
            }
        }

        // cek nopol
        if(empty($nopol)){
            echo "  <script>
                            alert('Nopol kosong!');
                    </script>"; 
            return false;
        }

        // cek merk
        if(empty($merk)){
            echo "  <script>
                            alert('Merk kosong!');
                    </script>"; 
            return false;
        }

        // cek Model
        if(empty($model)){
            echo "  <script>
                            alert('Model kosong!');
                    </script>"; 
            return false;
        }
        
        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //query mobil
        $query1 = "INSERT INTO mobil VALUES('$nik', '$nopol', '$merk', '$model')";
        mysqli_query($conn, $query1);
        
        //query pelanggan
        $query2 = "INSERT INTO `pelanggan` (`nama_pelanggan`, `no_hp`, `alamat`) VALUES ('$nama_pelanggan', '$no_hp', '$alamat')";
        mysqli_query($conn, $query2);

        $id_pelanggan = mysqli_insert_id($conn);

        $query3 = "INSERT INTO `user` (`username`, `password`, `id_pelanggan`) VALUES ('$username', '$password', '$id_pelanggan')"; 
        mysqli_query($conn, $query3);

        $query4 = "UPDATE pelanggan SET nik = '$nik' WHERE id_pelanggan = '$id_pelanggan'";
        mysqli_query($conn, $query4);

        return mysqli_affected_rows($conn);
    }


    function tambahMontir($data){
        global $conn;
        $nama_montir = htmlspecialchars($data["nama_montir"]);
        //query insert data
        $query = "INSERT INTO montir 
                    VALUES ('','$nama_montir')
                ";
        mysqli_query($conn, $query );

        return mysqli_affected_rows($conn);
    }


    function tambahSparepart($data){
        global $conn;
        $id_part = htmlspecialchars($data["id_part"]);
        $nama_part = htmlspecialchars($data["nama_part"]);
        $harga = htmlspecialchars($data["harga"]);
        //query insert data
        $query = "INSERT INTO sparepart 
                    VALUES ('$id_part','$nama_part','$harga')
                ";
        mysqli_query($conn, $query );

        return mysqli_affected_rows($conn);
    }

    function tambahSupplier($data){
        global $conn;
        $id_supplier = htmlspecialchars($data["id_supplier"]);
        $jumlah_barang = htmlspecialchars($data["jumlah_barang"]);
        //query insert data
        $query = "INSERT INTO supplier 
                    VALUES ('$id_supplier','$jumlah_barang')
                ";
        mysqli_query($conn, $query );

        return mysqli_affected_rows($conn);
    }

    function refreshGudang($data){
        global $conn;

        $id_part = $data["id_part"];
        $id_supplier = $data["id_supplier"];
        $query = "INSERT INTO gudang VALUES('$id_part', '$id_supplier')";
        mysqli_query($conn, $query);
    }

    //TRANSAKSI
    function tambahServis($data){
    global $conn;
    $jenis_pelayanan = htmlspecialchars($data["jenis_pelayanan"]);
    $id_pelanggan = $_SESSION["id_pelanggan"];
    $id_part = $data["id_part"];
    $id_montir = $data["id_montir"];
    $tgl = date("Y-m-d H:i:s");
    //query insert data
    
    $query1 = "INSERT INTO pelayanan 
                VALUES ('','$jenis_pelayanan','$tgl','','$id_montir')
            ";
    mysqli_query($conn, $query1 );

    $id_pelayanan = mysqli_insert_id($conn);

    $query2 = "INSERT INTO transaksi 
                VALUES ('','$tgl','$id_pelayanan','$id_pelanggan','$id_part')
            ";
    mysqli_query($conn, $query2 );

    return mysqli_affected_rows($conn);
    }
?>
