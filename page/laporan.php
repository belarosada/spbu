<?php 
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_SESSION[hak_akses]'");
$r=mysql_fetch_array($sql);
$xx = $r[h8];
if ($xx==0){
	 echo "<div class='alert alert-danger'>
			<li>$_SESSION[nama] Anda tidak diizinkan mengakses halaman ini.</li>
		</div>";	
}else{
?>
<h3>Laporan</h3>

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
        <th>Aksi</th>
      </tr>
      

<?php
$no=1;
include ("action/koneksi.php");
$sql = mysql_query("SELECT * FROM pengiriman, data_mobil, spbu where data_mobil.id_mobil=pengiriman.id_mobil and spbu.id_spbu=pengiriman.id_spbu");
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
		<td align='center'>
			<a href='action/hapus.php?p=pengiriman&id=$r[id_pengiriman]'>
			<button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
			</a>
		</td>
		</tr>
	";
	$no++;
}
?>
 
        
        
      
    </table>
 </div><br><br>
 <a href="../spbu/laporan.php"><button type="button" class="btn btn-info pull-right"><span class="glyphicon glyphicon-search"></span> Preview laporan</button>
 <?php 
}
 ?>
 
 