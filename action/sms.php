<?php 
include ("../action/koneksi.php");
$tgl=date("Y-m-d");
$pukul=date("H:i:s");
$simpan=$_GET[sms];
switch($simpan){
case "singel";
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
if (isset($_POST['z1'])){
	$a=" Premium Volume " . $_POST['x1'] . " KL,";
}
if (isset($_POST['z2'])){
	$b=" Solar Volume " . $_POST['x2'] . " KL,";
}
if (isset($_POST['z3'])){
	$c=" Pertamax Volume " . $_POST['x3'] . " KL,";
}
if (isset($_POST['z4'])){
	$d=" Pertamax Plus Volume " . $_POST['x4'] . " KL,";
}
if (isset($_POST['z5'])){
	$e=" Pertalite Volume" . $_POST['x5'] . " KL,";
}
if (isset($_POST['z6'])){
	$f=" Pertadex Volume " . $_POST['x6'] . " KL,";
}

$bbm=$a . $b . $c . $d . $e . $f;
$query = mysql_query("INSERT INTO pengiriman (
										id_pengiriman,
										tanggal,
										pukul,
										nama_lokasi,
										id_mobil,
										id_spbu,
										bbm,
										status										
										) 
								VALUES (
										'',
										'$tgl',
										'$pukul',
										'$_GET[lokasi]',
										'$_POST[plat_nomor]',
										'$_POST[no_spbu]',
										'$bbm',
										'Terkirim'
										)");
mysql_query ($query);

$sqlx = mysql_query("SELECT * FROM spbu where id_spbu='$_POST[no_spbu]'");
$r=mysql_fetch_array($sqlx);
$sqlz = mysql_query("SELECT * FROM data_mobil where id_mobil='$_POST[plat_nomor]'");
$z=mysql_fetch_array($sqlz);
$pesan="Dh, SPBU " . " MT " . $z['plat_nomor'] . " (" . $z['sopir'] . ")" . " Telah berangkat dari " . $_GET['lokasi'] . " Pukul " . $pukul . " Estimasi Pengiriman " . $r['estimasi'] . " Menit";
$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp1]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
	mysql_query($sql);
$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp2]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
	mysql_query($sql);


header('Location: ../?page=singel&alert=success');

break;

//==============================================================================//
case "multy";
$a1="";
$b1="";
$c1="";
$d1="";
$e1="";
$f1="";
if (isset($_POST['az1'])){
	$a1=" Premium Volume " . $_POST['va1'] . " KL,";
}
if (isset($_POST['az2'])){
	$b1=" Solar Volume " . $_POST['va2'] . " KL,";
}
if (isset($_POST['az3'])){
	$c1=" Pertamax Volume " . $_POST['va3'] . " KL,";
}
if (isset($_POST['az4'])){
	$d1=" Pertamax Plus Volume " . $_POST['va4'] . " KL,";
}
if (isset($_POST['az5'])){
	$e1=" Pertalite Volume" . $_POST['va5'] . " KL,";
}
if (isset($_POST['az6'])){
	$f1=" Pertadex Volume " . $_POST['va6'] . " KL,";
}
$bbm1=$a1 . $b1 . $c1 . $d1 . $e1 . $f1;
//==============================================================================//
$a2="";
$b2="";
$c2="";
$d2="";
$e2="";
$f2="";
if (isset($_POST['bz1'])){
	$a2=" Premium Volume " . $_POST['vb1'] . " KL,";
}
if (isset($_POST['bz2'])){
	$b2=" Solar Volume " . $_POST['vb2'] . " KL,";
}
if (isset($_POST['bz3'])){
	$c2=" Pertamax Volume " . $_POST['vb3'] . " KL,";
}
if (isset($_POST['bz4'])){
	$d2=" Pertamax Plus Volume " . $_POST['vb4'] . " KL,";
}
if (isset($_POST['bz5'])){
	$e2=" Pertalite Volume" . $_POST['vb5'] . " KL,";
}
if (isset($_POST['bz6'])){
	$f2=" Pertadex Volume " . $_POST['vb6'] . " KL,";
}
$bbm2=$a2 . $b2 . $c2 . $d2 . $e2 . $f2;
//==============================================================================//
$a3="";
$b3="";
$c3="";
$d3="";
$e3="";
$f3="";
if (isset($_POST['cz1'])){
	$a3=" Premium Volume " . $_POST['vc1'] . " KL,";
}
if (isset($_POST['cz2'])){
	$b3=" Solar Volume " . $_POST['vc2'] . " KL,";
}
if (isset($_POST['cz3'])){
	$c3=" Pertamax Volume " . $_POST['vc3'] . " KL,";
}
if (isset($_POST['cz4'])){
	$d3=" Pertamax Plus Volume " . $_POST['vc4'] . " KL,";
}
if (isset($_POST['cz5'])){
	$e3=" Pertalite Volume" . $_POST['vc5'] . " KL,";
}
if (isset($_POST['cz6'])){
	$f3=" Pertadex Volume " . $_POST['vc6'] . " KL,";
}
$bbm3=$a3 . $b3 . $c3 . $d3 . $e3 . $f3;
//==============================================================================//
$a4="";
$b4="";
$c4="";
$d4="";
$e4="";
$f4="";
if (isset($_POST['dz1'])){
	$a4=" Premium Volume " . $_POST['vd1'] . " KL,";
}
if (isset($_POST['dz2'])){
	$b4=" Solar Volume " . $_POST['vd2'] . " KL,";
}
if (isset($_POST['dz3'])){
	$c4=" Pertamax Volume " . $_POST['vd3'] . " KL,";
}
if (isset($_POST['dz4'])){
	$d4=" Pertamax Plus Volume " . $_POST['vd4'] . " KL,";
}
if (isset($_POST['dz5'])){
	$e4=" Pertalite Volume" . $_POST['vd5'] . " KL,";
}
if (isset($_POST['dz6'])){
	$f4=" Pertadex Volume " . $_POST['vd6'] . " KL,";
}
$bbm4=$a4 . $b4 . $c4 . $d4 . $e4 . $f4;
//==============================================================================//
if (isset($_POST['cargo1'])){
$query = mysql_query("INSERT INTO pengiriman (
										id_pengiriman,
										tanggal,
										pukul,
										nama_lokasi,
										id_mobil,
										id_spbu,
										bbm,
										status										
										) 
								VALUES (
										'',
										'$tgl',
										'$pukul',
										'$_GET[lokasi]',
										'$_POST[plat_nomor1]',
										'$_POST[no_spbu1]',
										'$bbm1',
										'Terkirim'
										)");
$hasil=mysql_query ($query);

$sqlx = mysql_query("SELECT * FROM spbu where id_spbu='$_POST[no_spbu1]'");
$r=mysql_fetch_array($sqlx);
$sqlz = mysql_query("SELECT * FROM data_mobil where id_mobil='$_POST[plat_nomor1]'");
$z=mysql_fetch_array($sqlz);
$pesan="Dh, SPBU " . " MT " . $z['plat_nomor'] . " (" . $z['sopir'] . ")" . " Telah berangkat dari " . $_GET['lokasi'] . " Pukul " . $pukul . " Estimasi Pengiriman " . $r['estimasi'] . " Menit";
$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp1]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);
$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp2]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);
//===============================================================
}
if (isset($_POST['cargo2'])){
$query = mysql_query("INSERT INTO pengiriman (
										id_pengiriman,
										tanggal,
										pukul,
										nama_lokasi,
										id_mobil,
										id_spbu,
										bbm,
										status										
										) 
								VALUES (
										'',
										'$tgl',
										'$pukul',
										'$_GET[lokasi]',
										'$_POST[plat_nomor2]',
										'$_POST[no_spbu2]',
										'$bbm2',
										'Terkirim'
										)");
$hasil=mysql_query ($query);

$sqlx = mysql_query("SELECT * FROM spbu where id_spbu='$_POST[no_spbu2]'");
$r=mysql_fetch_array($sqlx);
$sqlz = mysql_query("SELECT * FROM data_mobil where id_mobil='$_POST[plat_nomor2]'");
$z=mysql_fetch_array($sqlz);
$pesan="Dh, SPBU " . " MT " . $z['plat_nomor'] . " (" . $z['sopir'] . ")" . " Telah berangkat dari " . $_GET['lokasi'] . " Pukul " . $pukul . " Estimasi Pengiriman " . $r['estimasi'] . " Menit";
$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp1]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);

$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp2]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);
//===============================================================
}
if (isset($_POST['cargo3'])){
$query = mysql_query("INSERT INTO pengiriman (
										id_pengiriman,
										tanggal,
										pukul,
										nama_lokasi,
										id_mobil,
										id_spbu,
										bbm,
										status										
										) 
								VALUES (
										'',
										'$tgl',
										'$pukul',
										'$_GET[lokasi]',
										'$_POST[plat_nomor3]',
										'$_POST[no_spbu3]',
										'$bbm3',
										'Terkirim'
										)");
$hasil=mysql_query ($query);

$sqlx = mysql_query("SELECT * FROM spbu where id_spbu='$_POST[no_spbu3]'");
$r=mysql_fetch_array($sqlx);
$sqlz = mysql_query("SELECT * FROM data_mobil where id_mobil='$_POST[plat_nomor3]'");
$z=mysql_fetch_array($sqlz);
$pesan="Dh, SPBU " . " MT " . $z['plat_nomor'] . " (" . $z['sopir'] . ")" . " Telah berangkat dari " . $_GET['lokasi'] . " Pukul " . $pukul . " Estimasi Pengiriman " . $r['estimasi'] . " Menit";
$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp1]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);

$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp2]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);
//===============================================================
}
if (isset($_POST['cargo4'])){
$query = mysql_query("INSERT INTO pengiriman (
										id_pengiriman,
										tanggal,
										pukul,
										nama_lokasi,
										id_mobil,
										id_spbu,
										bbm,
										status										
										) 
								VALUES (
										'',
										'$tgl',
										'$pukul',
										'$_GET[lokasi]',
										'$_POST[plat_nomor4]',
										'$_POST[no_spbu4]',
										'$bbm4',
										'Terkirim'
										)");
$hasil=mysql_query ($query);

$sqlx = mysql_query("SELECT * FROM spbu where id_spbu='$_POST[no_spbu1]'");
$r=mysql_fetch_array($sqlx);
$sqlz = mysql_query("SELECT * FROM data_mobil where id_mobil='$_POST[plat_nomor1]'");
$z=mysql_fetch_array($sqlz);
$pesan="Dh, SPBU " . " MT " . $z['plat_nomor'] . " (" . $z['sopir'] . ")" . " Telah berangkat dari " . $_GET['lokasi'] . " Pukul " . $pukul . " Estimasi Pengiriman " . $r['estimasi'] . " Menit";
$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp1]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);


$sql="INSERT INTO outbox (
								`UpdatedInDB` ,
								`InsertIntoDB` ,
								`SendingDateTime` ,
								`Text` ,
								`DestinationNumber` ,
								`Coding` ,
								`UDH` ,
								`Class` ,
								`TextDecoded` ,
								`ID` ,
								`MultiPart` ,
								`RelativeValidity` ,
								`SenderID` ,
								`SendingTimeOut` ,
								`DeliveryReport` ,
								`CreatorID`
							)
							VALUES 
							(
								NOW() , 
								NOW(), 
								'0000-00-00 00:00:00', 
								NULL , 
								'$r[nohp2]', 
								'Default_No_Compression', 
								NULL , 
								'-1', 
								'$pesan', 
								NULL , 
								'false', 
								'-1', 
								NULL , 
								'0000-00-00 00:00:00', 
								'default', 
								''
							)";
mysql_query($sql);

//===============================================================
}	
header('Location: ../?page=multy&alert=success');
break;


}

?>