<?php 
include "koneksi.php";



function query($row){
	global $conn;
	$result = mysqli_query($conn,$row);
	$hasil = [];
	while($raw = mysqli_fetch_assoc($result)){
		$hasil[]=$raw;
	}
	return $hasil;
}
function tambah($row){
	global $conn;
	mysqli_query($conn,$row);
}

 ?>