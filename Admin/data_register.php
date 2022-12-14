<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Register</title>
    </head>
    <body>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Register</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Kit Font Awesome -->
        <script src="https://kit.fontawesome.com/1a01d4b743.js" crossorigin="anonymous"></script>

        <!-- Link Css -->
        <link rel="stylesheet" href="../css/dataProduk.css">
        <link rel="stylesheet" href="../css/navbar.css">
    </body>
    <br></br>
    <div class="container">
            <div class="card">
                <div class="card-header">
                <h3 class="text-center mt-2 mb-3">Data Register<h3>    
                    <form action="data_register.php" method="post">
                        <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                    </form> 
                </div>
                <div class="card-body">
                    <table class="table table-bordered fs-5 fw-light text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</td>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No.Telp</th>
                                <th scope="col">Username</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "../koneksi.php";
                                if (isset($_POST["cari"])) {
                                    // jika ada keyword pencarian 
                                    $cari=$_POST['cari'];
                                    $query_register= mysqli_query($conn,"SELECT * FROM register WHERE id_register LIKE '%$cari%' OR nama LIKE '%$cari%' OR username LIKE '%$cari%' OR alamat LIKE '%$cari%'");
                                }else{
                                    //jika tidak ada keyword pencarian
                                    $query_register= mysqli_query($conn,"SELECT * FROM register  ");
                                }
                                $no=0;
                                while($data_register= mysqli_fetch_assoc($query_register)) { 
                                    $no++;
                                    ?>
                                    <tr>
                                        <td><?= $no?></td>
                                        <td><?= $data_register["nama"]; ?></td>
                                        <td><?= $data_register["alamat"]; ?></td>
                                        <td><?= $data_register["telp"]; ?></td>
                                        <td><?= $data_register["username"]; ?></td>
                                        <td> <a href="hapus_register.php?id_register=<?=$data_register['id_register']?>" onclick="return confirm ('Apakah anda yakin menghapus data ini?')" ><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>

                                <!-- Jumlah Register -->
                                <?php 
                                include '../koneksi.php';
                                $data_register = mysqli_query($conn,"SELECT * FROM register");
                                    // menghitung data barang
                                $jumlah_barang_data = mysqli_num_rows($data_register);
                                $jumlah_barang = $jumlah_barang_data;

                                ?>
                            
                                <p>Jumlah data Register : <b><?php echo $jumlah_barang_data; ?></b></p>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </html>