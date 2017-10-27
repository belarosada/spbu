<?php 
include ("../action/koneksi.php");
$page=$_GET[page];
switch($page){
	
case "lokasi";
$query = mysql_query("UPDATE lokasi SET	nama_lokasi		= '$_POST[nama_lokasi]'
									WHERE 	id_lokasi	= '$_POST[id_lokasi]'");
				
$hasil=mysql_query ($query);
header( 'Location: ../?page=lokasi' ) ;
break;	
	
case "spbu";
$query = mysql_query("UPDATE spbu SET		no_spbu			= '$_POST[no_spbu]',
											pemilik			= '$_POST[pemilik]',
											alamat			= '$_POST[alamat]',
											nohp1			= '$_POST[nohp1]',
											nohp2			= '$_POST[nohp2]',
											lokasi			= '$_POST[lokasi]',
											estimasi		= '$_POST[estimasi]'
									WHERE 	id_spbu			= '$_POST[id_spbu]'");
				
$hasil=mysql_query ($query);
header( 'Location: ../?page=spbu' ) ;
break;

case "mobil";
$query = mysql_query("UPDATE data_mobil SET	plat_nomor		= '$_POST[plat_nomor]',
											sopir			= '$_POST[sopir]',
											no_hp			= '$_POST[no_hp]',
											lokasi			= '$_POST[lokasi]'
									WHERE 	id_mobil		= '$_POST[id_mobil]'");
				
$hasil=mysql_query ($query);
header( 'Location: ../?page=mobil' ) ;
break;

case "user";
$query = mysql_query("UPDATE user SET		username		= '$_POST[username]',
											nama			= '$_POST[nama]',
											password		= '$_POST[password]',
											hak_akses		= '$_POST[hak_akses]'
									WHERE 	id_user			= '$_POST[id_user]'");
				
$hasil=mysql_query ($query);
header( 'Location: ../?page=user' ) ;
break;

case "hak_akses";
$query = mysql_query("UPDATE hak_akses SET	h1	= '$_POST[x1]',
											h2	= '$_POST[x2]',
											h3	= '$_POST[x3]',
											h4	= '$_POST[x4]',
											h5	= '$_POST[x5]',
											h6	= '$_POST[x6]',
											h7	= '$_POST[x7]',
											h8	= '$_POST[x8]'
									WHERE 	hak	= '$_GET[hak]'");
				
$hasil=mysql_query ($query);
header('Location: ../?page=hak_akses&alert=success') ;
break;


}

?>