<?php 
include "fungsi.php";
include "sesi_off.php";
if(isset($_POST["submit"])){
    $nama     = htmlspecialchars($_POST["nama"]);
    $password = htmlspecialchars($_POST["pw"]);
    $pinjam   = 0;
    $peran    = "user";
    $tgl      = $_POST["tgl"];
    $pw       = password_hash($password,PASSWORD_DEFAULT);
    tambah("INSERT INTO user(id, nama, password, tgl_gabung, jml_pinjam, peran) VALUES('','$nama','$pw','$tgl','$pinjam','$peran')");
    header("Location:login.php");
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
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" method="post" action="">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" placeholder="Password" name="pw">
                                </div>
                                <input type="hidden" name="pinjam" value="0">
                                <input type="hidden" name="peran" value="user">
                                <input type="hidden" name="tgl" id="tgl">








                                <button class="btn btn-primary btn-user btn-block" name="submit" type="submit">
                                    Buat Akun
                                </button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
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