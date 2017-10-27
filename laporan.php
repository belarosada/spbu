<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/laporan.css" rel="stylesheet">
<style type="text/css">
@media print {
    input#printButton {
        display: none;
        }
    }
</style>

<title>Laporan Data Barang</title>
</head>
<script type="text/javascript">
function cetak(){
 print();
}
</script>
<body>

<h3>Laporan Pengiriman BBM</h3>

<div class="table-responsive">
    <table class="table table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Pukul</th>
        <th>Plat Nomor</th>
        <th>No SPBU</th>
		<th>Pemilik</th>
        <th>BBM</th>
        <th>Nama Lokasi</th>
		<th>Estimasi</th>
        <th>Status</th>
      </tr>
<?php
date_default_timezone_set('Asia/Jakarta');
$no=1;
include ("action/koneksi.php");
$sql = mysql_query("SELECT * FROM pengiriman, data_mobil, spbu where data_mobil.id_mobil=pengiriman.id_mobil 
						and spbu.id_spbu=pengiriman.id_spbu 
						and pengiriman.nama_lokasi='$_GET[lokasi]' 
						and data_mobil.id_mobil='$_GET[id_mobil]' 
						and spbu.id_spbu='$_GET[id_spbu]' 
						and pengiriman.tanggal='$_GET[tanggal]'
						");
while ($r=mysql_fetch_array($sql)){
echo"   <tr>
        <td>$no</td>
        <td>$r[tanggal]</td>
        <td>$r[pukul]</td>
        <td>$r[plat_nomor]</td>
        <td>$r[no_spbu]</td>
		<td>$r[pemilik]</td>
        <td>$r[bbm]</td>
        <td>$r[nama_lokasi]</td>
		<td>$r[estimasi] Menit</td>
        <td>$r[status]</td>
		</tr>
	";
	$no++;
}
?>  
      
    </table><br><br>
	<input class="btn btn-success btn-lg" type="button" id="printButton" onclick="window.print();" value="Print Page" />
	</body>
</html>