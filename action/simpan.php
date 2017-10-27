<?php 
include ("../action/koneksi.php");
$simpan=$_GET[p];
switch($simpan){
case "lokasi";
$query = mysql_query("INSERT INTO lokasi (
										id_lokasi,
										nama_lokasi
										) 
								VALUES (
										'',
										'$_POST[lokasi]'
										)");
$hasil=mysql_query ($query);
header( 'Location: ../?page=lokasi' ) ;
break;

case "spbu";
$query = mysql_query("INSERT INTO spbu (
										id_spbu,
										no_spbu,
										pemilik,
										alamat,
										nohp1,
										nohp2,
										lokasi,
										estimasi
										) 
								VALUES (
										'',
										'$_POST[no_spbu]',
										'$_POST[pemilik]',
										'$_POST[alamat]',
										'$_POST[nohp1]',
										'$_POST[nohp2]',
										'$_POST[lokasi]',
										'$_POST[estimasi]'
										)");
$hasil=mysql_query ($query);
header( 'Location: ../?page=spbu' ) ;
break;

case "mobil";
$query = mysql_query("INSERT INTO data_mobil (
										plat_nomor,
										sopir,
										no_hp,
										lokasi
										) 
								VALUES (
										'$_POST[plat_nomor]',
										'$_POST[sopir]',
										'$_POST[no_hp]',
										'$_POST[lokasi]'
										)");
$hasil=mysql_query ($query);
header( 'Location: ../?page=mobil' ) ;
break;

case "user";
$query = mysql_query("INSERT INTO user (
										username,
										nama,
										password,
										hak_akses
										) 
								VALUES (
										'$_POST[username]',
										'$_POST[nama]',
										'$_POST[password]',
										'$_POST[hak_akses]'
										)");
$hasil=mysql_query ($query);
header( 'Location: ../?page=user' ) ;
break;

}?>