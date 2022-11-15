<?php 
if ($_POST) {
   $username=$_POST['username'];
   $password=$_POST['password'];
   if (empty($username)) {
    echo "<script>alert('Username tidak boleh kosong'); location.href='login.php';</script>";
   }elseif (empty($password)) {
    echo "<script>alert('Password tidak boleh kosong'); location.href='login.php';</script>";
   }else {
    include "koneksi.php";
    $qry_login=mysqli_query($conn, "select * from register where username='$username' and password='$password'");
    $row = mysqli_num_rows($qry_login);
        if ($row > 0) {
            $dt_login=mysqli_fetch_assoc($qry_login);
			if ($dt_login['level']=="admin"){
				session_start();
				$_SESSION['level']="admin";
				$_SESSION['username']=$dt_login['username'];
				$_SESSION['password']=$dt_login['password'];
				$_SESSION["login"]=true;
				header ("location: Admin/halaman_admin.php");


			}elseif($dt_login['level']=="pengguna"){
				session_start();	 
				$_SESSION['level']="pengguna";
				$_SESSION['username']=$dt_login['username'];
				$_SESSION['password']=$dt_login['password'];
				$_SESSION["login"]=true;
				header ("location: Pengguna/halaman_pengguna.php");
			
        }else {
			header("location:login.php?pesan=gagal");
		}
	}
}
}
?>