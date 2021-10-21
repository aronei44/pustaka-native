<?php
include 'koneksi.php'; 

include "sesi_on.php";
$id = $_GET['id'];
global $conn;

mysqli_query($conn,"DELETE FROM buku WHERE id = '$id'");

header('Location:buku.php');


 ?>