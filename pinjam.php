<?php 
include 'fungsi.php';

include "sesi_on.php";
$idbuku = $_GET['id'];
$iduser = $_GET['user'];
$data = query("SELECT * FROM buku WHERE id = '$idbuku'")[0];
$judul = $data['judul'];
$kategori = $data['kategori'];
$nama = $name;
$status = "Meminjam";

tambah("INSERT INTO pinjam VALUES('','$judul','$kategori','$nama','$status')");

$row = query("SELECT * FROM user WHERE id = '$iduser'")[0];
$jmlbk = $row['jml_pinjam'];
$total = $jmlbk+1;
tambah("UPDATE user SET jml_pinjam = '$total' WHERE id ='$iduser'");
echo $jmlbk;


header('Location:log.php');
 ?>