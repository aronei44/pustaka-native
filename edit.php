<?php 
include "fungsi.php";
include "sesi_on.php";
$id = $_GET["id"];
$row = query("SELECT * FROM buku WHERE id = '$id'")[0];

if(isset($_POST["submit"])){
    $judul    = htmlspecialchars($_POST["judul"]);
    $kategori = htmlspecialchars($_POST["kategori"]);
    $penerbit = htmlspecialchars($_POST["penerbit"]);
    $penulis  = htmlspecialchars($_POST["penulis"]);
    $tahun    = htmlspecialchars($_POST["tahun"]);
    $halaman  = htmlspecialchars($_POST["halaman"]);
    $jmlbuku  = htmlspecialchars($_POST["jumlah"]);
    tambah("UPDATE buku SET id='$id',judul='$judul',kategori='$kategori',penerbit='$penerbit',penulis='$penulis',tahun='$tahun',jml_halaman='$halaman',jml_buku='$jmlbuku' WHERE id = '$id'");
    header('Location:buku.php');
    
}

 ?>







<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pustaka Digi - Buat Akun</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Buku!</h1>
                            </div>
                            <form class="user" method="post" action="">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?=$row['judul'];?>" name="judul">
                                </div>
                                <div class="form-group">
                                    <select name="kategori" class="form-control">
                                        <option>IPU</option>
                                        <option>Bahasa</option>
                                        <option>Matematika</option>
                                        <option>Novel dan Komik Fiksi</option>
                                        <option>Lain lain</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?=$row['penerbit'];?>" name="penerbit">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?=$row['penulis'];?>" name="penulis">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" value="<?=$row['tahun'];?>" name="tahun">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" value="<?=$row['jml_halaman'];?>" name="halaman">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" value="<?=$row['jml_buku'];?>" name="jumlah">
                                </div>








                                <button class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                    Edit Data Buku
                                </button>
                                
                            </form>
                            <hr>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        setInterval(function(){
            var d = new Date();
            var day = d.getDate();
            var month = d.getMonth()+1;
            var year = d.getFullYear();
            document.getElementById("tgl").value=`${day}/${month}/${year}`;
        },100);
    </script>

</body>

</html>