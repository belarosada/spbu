<h3>Tambah SPBU</h3>
<form class="form-horizontal" action="action/simpan.php?p=spbu" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">No SPBU</label>
    <div class="col-sm-4">
      <input type="text" name="no_spbu" class="form-control" placeholder="No SPBU">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Pemilik</label>
    <div class="col-sm-9">
      <input type="text" name="pemilik" class="form-control" placeholder="Nama Pemilik">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-9">
      <input type="text" name="alamat" class="form-control" placeholder="Alamat SPBU">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">No HP 1</label>
    <div class="col-sm-4">
      <input type="text" name="nohp1" class="form-control" placeholder="No HP 1">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">No HP 2</label>
    <div class="col-sm-4">
      <input type="text" name="nohp2" class="form-control" placeholder="No HP 2">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Lokasi SPBU</label>
    <div class="col-sm-6">
      <select name="lokasi" class="form-control">
        <option selected disabled>.: Pilih Lokasi :.</option>
<?php
include ("../action/koneksi.php");
$sql = mysql_query("SELECT * FROM lokasi");
while ($r=mysql_fetch_array($sql)){
echo "<option value='$r[nama_lokasi]'>$r[nama_lokasi]</option>";  
}
?>
    
        
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Estimasi</label>
    <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="form-control" name="estimasi">
          <div class="input-group-addon">Menit</div>
        </div>
    </div>
  </div>
<div class="col-sm-13"><hr /></div>
      <button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-save"></span> Simpan</button>
</form>