<?php 
/*
Ini merupakan file core. jangan dirubah kaya yang tau aja hehe....



*/





$namadb  = "perpustakaan";

$koneksi = mysqli_connect("localhost","root","");
$query   = mysqli_query($koneksi,"CREATE DATABASE IF NOT EXISTS $namadb");
echo mysqli_error($koneksi);

$conn    = mysqli_connect("localhost","root","",$namadb);
var_dump($conn);
$table1  = mysqli_query($conn,"CREATE TABLE buku ( id INT(11) NOT NULL AUTO_INCREMENT , judul VARCHAR(2000) NOT NULL , kategori VARCHAR(50) NOT NULL , penerbit VARCHAR(50) NOT NULL , penulis VARCHAR(50) NOT NULL , tahun INT(11) NOT NULL , jml_halaman INT(11) NOT NULL , jml_buku INT(11) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB");
$table2  = mysqli_query($conn,"CREATE TABLE pinjam ( id INT(11) NOT NULL AUTO_INCREMENT , judul VARCHAR(2000) NOT NULL , kategori VARCHAR(50) NOT NULL , nama VARCHAR(50) NOT NULL , status VARCHAR(50) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB");
$table3  = mysqli_query($conn,"CREATE TABLE user ( id INT(11) NOT NULL AUTO_INCREMENT , nama VARCHAR(50) NOT NULL , password VARCHAR(1000) NOT NULL , tgl_gabung VARCHAR(50) NOT NULL , jml_pinjam INT(11) NOT NULL , peran VARCHAR(20) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB");
 ?>