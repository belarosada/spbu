<?php 
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_SESSION[hak_akses]'");
$r=mysql_fetch_array($sql);
$xx = $r[h5];
if ($xx==0){
	 echo "<div class='alert alert-danger'>
			<li>$_SESSION[nama] Anda tidak diizinkan mengakses halaman ini.</li>
		</div>";	
}else{
?>
<h3>Single Cargo</h3>
<?php 
if(isset($_GET['alert'])){
$alert=$_GET['alert'];
	if($alert=="success"){
		echo"	<div class='alert alert-success'>
			<li>Pesan Telah dikirim.</li>
		</div>";}else{
			echo"	<div class='alert alert-danger'>
			<li>Pesan gagal dikirim.</li>
		</div>";
		}
}
$lokasi="";
if(isset($_GET['lokasi'])){
	$lokasi=$_GET['lokasi'];
}
?>

<form class="form-horizontal" action="action/sms.php?sms=singel&lokasi=<?php echo $lokasi ?>" method="post">
   <div class="form-group">
    <label class="col-sm-3 control-label">Lokasi SPBU</label>
    <div class="col-sm-6">
      <select name="lokasi" class="form-control" onchange="document.location.href=this.options[this.selectedIndex].value;">
		
      
<?php
echo "<option value='' selected disabled>.: Pilih Lokasi :.</option>";
$sql = mysql_query("SELECT * FROM lokasi");
while ($r=mysql_fetch_array($sql)){
	if($r['nama_lokasi']==$lokasi){
		echo"<option selected='selected' value='?page=singel&lokasi=$r[nama_lokasi]'>$r[nama_lokasi]</option>";  
	}else{
		echo"<option value='?page=singel&lokasi=$r[nama_lokasi]'>$r[nama_lokasi]</option>";
	}
}
?>
      
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Plat Nomor</label>
    <div class="col-sm-4">
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

  <div class="form-group">
    <label class="col-sm-3 control-label">No SPBU</label>
    <div class="col-sm-6">
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
  <div class="col-sm-12"><hr></div>
  <div class="form-group">
  	<div class="col-sm-6">
<table width="100%" border="0">
  <tr>
    <td width="130"><div class="checkbox"><label><input type="checkbox" name="z1" value="1">Premium</label></div></td>
    <td><div class="input-group"><input type="text" name="x1" class="form-control"><div class="input-group-addon">KL</div></div></td>
  </tr>
  <tr>
    <td><div class="checkbox"><label><input type="checkbox" name="z2" value="1">Solar</label></div></td>
    <td><div class="input-group"><input type="text" name="x2" class="form-control"><div class="input-group-addon">KL</div></div></td>
  </tr>
  <tr>
    <td><div class="checkbox"><label><input type="checkbox" name="z3" value="1">Pertamax</label></div></td>
    <td><div class="input-group"><input type="text" name="x3" class="form-control"><div class="input-group-addon">KL</div></div></td>
  </tr>
   </table>

    </div>
    <div class="col-sm-6">
    <table width="100%" border="0">
  <tr>
    <td width="130"><div class="checkbox"><label><input type="checkbox" name="z4" value="1">Pertamax Plus</label></div></td>
    <td><div class="input-group"><input type="text" name="x4" class="form-control"><div class="input-group-addon">KL</div></div></td>
  </tr>
  <tr>
    <td><div class="checkbox"><label><input type="checkbox" name="z5" value="1">Pertalite</label></div></td>
    <td><div class="input-group"><input type="text" name="x5" class="form-control"><div class="input-group-addon">KL</div></div></td>
  </tr>
  <tr>
    <td><div class="checkbox"><label><input type="checkbox" name="z6" value="1">Pertadex</label></div></td>
    <td><div class="input-group"><input type="text" name="x6" class="form-control"><div class="input-group-addon">KL</div></div></td>
  </tr>
</table>	
    </div>  
  </div>
  
<div class="col-sm-13"><hr /></div>  
  <button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-envelope"></span> Kirim</button>
</form>
<?php }?>