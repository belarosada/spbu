<?php 
error_reporting(0);
session_start();
include("action/koneksi.php");
if (empty($_SESSION[hak_akses])){
  echo "<link href='css/style_login.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses Halaman Administrator, Anda harus login <br>";
  echo "<a href=login.php><b>LOGIN</b></a></center>";
}
else{
	
	include("top.php");
	if(isset($_GET['page'])){ 
		include("page/".$_GET['page'].".php");
	}else{ 
		include("page/home.php"); 
	}
	include("bottom.php"); 
}
?>