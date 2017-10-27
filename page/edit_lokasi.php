<?php 
$sql = mysql_query("SELECT * FROM lokasi where id_lokasi=$_GET[id]");
$r=mysql_fetch_array($sql);
?>
<h3>Edit Lokasi</h3>
<form class="form-horizontal" action="action/update.php?page=lokasi" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">Lokasi</label>
    <div class="col-sm-4">
      <input type="hidden" name="id_lokasi" value="<?php echo $r['id_lokasi'] ?>">
      <input type="text" name="nama_lokasi" class="form-control" placeholder="Lokasi" value="<?php echo $r['nama_lokasi'] ?>">
    </div>
  </div>
  
  </div>
 <div class="col-sm-13"><hr /></div> 
  <button type="submit" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-refresh"></span> Perbarui</button>
</form>