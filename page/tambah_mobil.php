<h3>Tambah Mobil</h3>
<form class="form-horizontal" action="action/simpan.php?p=mobil" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">Plat Nomor</label>
    <div class="col-sm-4">
      <input type="text" name="plat_nomor" class="form-control" placeholder="Plat Nomor">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Supir</label>
    <div class="col-sm-9">
      <input type="text" name="sopir" class="form-control" placeholder="Nama Supir">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">No HP</label>
    <div class="col-sm-4">
      <input type="text" name="no_hp" class="form-control" placeholder="No HP Supir">
    </div>
  </div>
    

  <div class="form-group">
    <label class="col-sm-3 control-label">Lokasi SPBU</label>
    <div class="col-sm-6">
      <select name="lokasi" class="form-control">
      	<option selected disabled>.: Pilih Lokasi :.</option>
      
<?php
$sql = mysql_query("SELECT * FROM lokasi");
while ($r=mysql_fetch_array($sql)){
echo "<option value='$r[nama_lokasi]'>$r[nama_lokasi]</option>";  
}
?>
      </select>
    </div>
  </div>
 <div class="col-sm-13"><hr /></div> 
  <button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-save"></span> Simpan</button>
</form>