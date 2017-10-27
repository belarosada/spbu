 <?php
include ("../action/koneksi.php");
$hapus=$_GET['p'];
switch($hapus){
case "lokasi";
	mysql_query("DELETE FROM lokasi WHERE id_lokasi='$_GET[id]'");
	header('Location: ../?page=lokasi');
break;

case "spbu";
	mysql_query("DELETE FROM spbu WHERE id_spbu='$_GET[id]'");
	header('Location: ../?page=spbu');
break;

case "mobil";
	mysql_query("DELETE FROM data_mobil WHERE id_mobil='$_GET[id]'");
	header('Location: ../?page=mobil');
break;

case "user";
	mysql_query("DELETE FROM user WHERE id_user='$_GET[id]'");
	header('Location: ../?page=user');
break;


}
?>