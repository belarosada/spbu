<?php 
$sql = mysql_query("SELECT * FROM spbu where id_spbu=$_GET[id]");
$r=mysql_fetch_array($sql);
?>

<h3>Edit SPBU</h3>
<form class="form-horizontal" action="action/update.php?page=spbu" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">No SPBU</label>
    <div class="col-sm-4">
      <input type="text" name="no_spbu" class="form-control" placeholder="No SPBU" value="<?php echo $r['no_spbu'] ?>">
      <input type="hidden" name="id_spbu" value="<?php echo $r['id_spbu'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Pemilik</label>
    <div class="col-sm-9">
      <input type="text" name="pemilik" class="form-control" placeholder="Nama Pemilik" value="<?php echo $r['pemilik'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-9">
      <input type="text" name="alamat" class="form-control" placeholder="Alamat SPBU" value="<?php echo $r['alamat'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">No HP 1</label>
    <div class="col-sm-4">
      <input type="text" name="nohp1" class="form-control" placeholder="No HP 1" value="<?php echo $r['nohp1'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">No HP 2</label>
    <div class="col-sm-4">
      <input type="text" name="nohp2" class="form-control" placeholder="No HP 2" value="<?php echo $r['nohp2'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Lokasi SPBU</label>
    <div class="col-sm-6">
      <select name="lokasi" class="form-control">
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
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Estimasi</label>
    <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="form-control" name="estimasi" value="<?php echo $r['estimasi'] ?>">
          <div class="input-group-addon">Menit</div>
        </div>
    </div>
  </div>
<div class="col-sm-13"><hr /></div>
      <button type="submit" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-refresh"></span> Perbarui</button>
</form>