<?php
    if ($_GET['id_register']) {
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn, "delete from register where id_register='".$_GET['id_register']."'");
        if ($qry_hapus) {
            echo "<script>alert ('Sukses hapus register'); location.href='data_register.php';</script>";
        }else {
            echo "<script>alert ('Gagal hapus register'); location.href='data_register.php';</script>";
        }
    }
?> 