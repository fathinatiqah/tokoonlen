<?php 
    /* Cek jika tombol regrister sudah ditekan */
    if( isset($_POST["register"])){

        if(($_POST) > 0){
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                    location.href='login.php';
                </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login User</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/RegisterUser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
</head>
<body >
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="./assets/logo-camille.png" style="width: 185px;" alt="logo">
                    <div class= "judul">
                      <h4 class="mt-1 mb-5 pb-1">Camille</h4>
                    </div>
                </div>

                <form action="proses_register.php" method="post">
                                Nama Pengguna :
                                <input type="text" name="nama" value="" class="form-control">
                                Alamat :
                                <input type="text" name="alamat" value="" class="form-control">
                                Telp :
                                <input type="text" name="telp" value="" class="form-control">
                                Username :
                                <input type="text" name="username" value="" class="form-control">
                                Password :
                                <input type="password" name="password" value="" class="form-control">
                                Level :
                                <select name="level" class="form-control">
                                    <option></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Pengguna">Pengguna</option>
                                </select>
                                <?php 
                                include "koneksi.php";
                                $qry_register=mysqli_query($conn,"SELECT * FROM register");
                                while($data_register=mysqli_fetch_array($qry_register)){
                }
            ?>
        </select>
        <br>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</php>
              <p>have an account?<a href="login.php">Login</a></p>
            </form>

              </div>
            </div>
            <div class="col-lg-6 ">
              <img src="./assets/login1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
