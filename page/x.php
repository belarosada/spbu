<h3>Laporan</h3>
<?php
$lokasi="";
if(isset($_GET['lokasi'])){
	$lokasi=$_GET['lokasi'];
}
?>

<div class="col-sm-9">  
  <div class="form-group">
    <label class="col-sm-4 control-label">Lokasi SPBU</label>
    <div class="col-sm-8">
      <select name="lokasi" class="form-control" onchange="document.location.href=this.options[this.selectedIndex].value;">
		
      
<?php
echo "<option value='' selected disabled>.: Pilih Lokasi :.</option>";
$sql = mysql_query("SELECT * FROM lokasi");
while ($r=mysql_fetch_array($sql)){
	if($r['nama_lokasi']==$lokasi){
		echo"<option selected='selected' value='?page=x&lokasi=$r[nama_lokasi]'>$r[nama_lokasi]</option>";  
	}else{
		echo"<option value='?page=x&lokasi=$r[nama_lokasi]'>$r[nama_lokasi]</option>";
	}
}
?>
      
      </select>
<form action="?page=x" method="get">  
<input type="hidden" name="page" value="x">
<input type="hidden" name="view" value="ya">
<input type="hidden" name="lokasi" value="<?php echo $lokasi ?>">
    </div>
  </div>
  <br /><br />
  <div class="form-group">
    <label class="col-sm-4 control-label">Plat Nomor</label>
    <div class="col-sm-8">
      <select name="plat_nomor" class="form-control">
        <option value="" selected disabled>Pilih Plat Nomor</option>
<?php
$sql = mysql_query("SELECT * FROM data_mobil where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_mobil]'>$x[plat_nomor]</option>";  
}
?>
      </select>
    </div>
  </div>
  <br /><br />
  <div class="form-group">
    <label class="col-sm-4 control-label">No SPBU</label>
    <div class="col-sm-8">
      <select name="no_spbu" class="form-control">
      	<option value="" selected disabled>.: Pilih Nomor SPBU :.</option>
<?php
$sql = mysql_query("SELECT * FROM spbu where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_spbu]'>$x[no_spbu]</option>";  
}
?>
      </select>
    </div>
  </div>
  <br /><br />
  <div class="form-group">
    <label class="col-sm-4 control-label">Tanggal</label>
    <div class="col-sm-8">
      <input type="text" name="tanggal" class="form-control" placeholder="tahun-bulan-tanggal">
    </div>
  </div>
  <br /><br />
</div>
<div class="col-sm-12">
<button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-save"></span> Lihat</button><br><br>
</div>
</form>



<!-- =================================================== -->
<div class="col-sm-12">
<?php
if(isset($_GET['view'])){
?>
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
$L_lokasi=$_GET[lokasi];
$L_idmobil=$_GET[plat_nomor];
$L_idspbu=$_GET[no_spbu];
$L_tanggal=$_GET[tanggal];
$no=1;
include ("action/koneksi.php");
$sql = mysql_query("SELECT * FROM pengiriman, data_mobil, spbu where data_mobil.id_mobil=pengiriman.id_mobil 
						and spbu.id_spbu=pengiriman.id_spbu 
						and pengiriman.nama_lokasi='$L_lokasi' 
						and data_mobil.id_mobil='$L_idmobil' 
						and spbu.id_spbu='$L_idspbu' 
						and pengiriman.tanggal='$L_tanggal'
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
 
        
        
      
    </table>
 </div><br><br>
 <a href="../spbu/laporan.php?lokasi=<?php echo $L_lokasi ?>&id_mobil=<?php echo $L_idmobil ?>&id_spbu=<?php echo $L_idspbu ?>&tanggal=<?php echo $L_tanggal ?>"><button type="button" class="btn btn-info pull-right"><span class="glyphicon glyphicon-search"></span> Preview laporan</button>
 
<?php
}
?>
</div>
