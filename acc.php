<?php 
include 'koneksi.php';

include "sesi_on.php";
$id = $_GET['id'];
global $conn;
mysqli_query($conn, "UPDATE pinjam SET status='Mengembalikan' WHERE id = '$id'");
header('Location:log.php');
 ?>