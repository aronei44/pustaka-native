<?php 
session_start();
if(!isset($_SESSION['nama'])){
	header('Location:login.php');
}
else{
	$name = $_SESSION['nama'];
	$as   = $_SESSION['sebagai'];
	$idu  = $_SESSION['id'];
}

 ?>