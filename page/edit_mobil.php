<?php 
$sql = mysql_query("SELECT * FROM data_mobil where id_mobil=$_GET[id]");
$r=mysql_fetch_array($sql);
?>
<h3>Edit Mobil</h3>
<form class="form-horizontal" action="action/update.php?page=mobil" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">Plat Nomor</label>
    <div class="col-sm-4">
      <input type="hidden" name="id_mobil" value="<?php echo $r['id_mobil'] ?>">
      <input type="text" name="plat_nomor" class="form-control" placeholder="Plat Nomor" value="<?php echo $r['plat_nomor'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Supir</label>
    <div class="col-sm-9">
      <input type="text" name="sopir" class="form-control" placeholder="Nama Supir" value="<?php echo $r['sopir'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">No HP</label>
    <div class="col-sm-4">
      <input type="text" name="no_hp" class="form-control" placeholder="No HP Supir" value="<?php echo $r['no_hp'] ?>">
    </div>
  </div>
    

  <div class="form-group">
    <label class="col-sm-3 control-label">Lokasi SPBU</label>
    <div class="col-sm-6">
      <select name="lokasi" class="form-control">
      	<option selected disabled>.: Pilih Lokasi :.</option>
      
<?php
$sql = mysql_query("SELECT * FROM lokasi");
while ($l=mysql_fetch_array($sql)){
if ($l['nama_lokasi']==$r['lokasi']){
	echo "<option selected='selected' value='$l[nama_lokasi]'>$l[nama_lokasi]</option>";  
}else{
	echo "<option value='$l[nama_lokasi]'>$l[nama_lokasi]</option>";  
}}
?>
      </select>
    </div>
  </div>
 <div class="col-sm-13"><hr /></div> 
  <button type="submit" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-refresh"></span> Perbarui</button>
</form>