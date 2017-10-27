<?php
include "../action/koneksi.php";
error_reporting(0);
$pass=$_POST[password];

$login=mysql_query("SELECT * FROM user WHERE username='$_POST[username]' AND password='$_POST[password]'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
   $_SESSION[hak_akses] = $r['hak_akses'];
   $_SESSION[nama]=$r['nama'];
  header('location:/spbu');
}
else{
  echo "<script>window.alert('Username atau Password Salah!!!');
        window.location=('../login.php')</script>";
}
?>
