<?php

if($_POST){
    $id_register=$_POST['id_register'];

    $nama=$_POST['nama'];

    $alamat=$_POST['alamat'];

    $telp=$_POST['telp'];

    $username=$_POST['username'];

    $password= $_POST['password'];

    $level=$_POST['level'];

    if(empty($nama)){

        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";


    } elseif(empty($username)){

        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";

    } elseif(empty($password)){

        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";

    } else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into register (nama, alamat, telp, username, password, level) value ('".$nama."','".$alamat."','".$telp."','".$username."','".md5($password)."','".$level."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan');location.href='login.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan');location.href='register.php';</script>";

        }

    }

}

?>