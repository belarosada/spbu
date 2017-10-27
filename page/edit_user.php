<?php 
$sql = mysql_query("SELECT * FROM user where id_user=$_GET[id]");
$r=mysql_fetch_array($sql);
$a="";
$b="";
$c="";
$select=$r['hak_akses'];
switch($select){
case "Operator";
	$a="selected='selected'";
break;
case "Admin";
	$b="selected='selected'";
break;
case "SuperAdmin";
	$c="selected='selected'";
break;
}
?>

<h3>Edit User</h3>
<form class="form-horizontal" action="action/update.php?page=user" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-9">
      <input type="hidden" name="id_user" value="<?php echo $r['id_user'] ?>">
      <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $r['nama'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Username</label>
    <div class="col-sm-9">
      <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $r['username'] ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
      <input type="password" name="password" class="form-control" placeholder="password" value="<?php echo $r['password'] ?>">
    </div>
  </div>
    

  <div class="form-group">
    <label class="col-sm-3 control-label">Hak Akses</label>
    <div class="col-sm-4">
      <select name="hak_akses" class="form-control">
        <option value="" selected disabled>Pilih Hak Ases</option>
        <option <?php echo $a; ?> value="Operator">Operator</option>
        <option <?php echo $b; ?> value="Admin">Admin</option>
        <option <?php echo $c; ?> value="SuperAdmin">Super Admin</option>
      </select>
    </div>
  </div>
<div class="col-sm-13"><hr /></div>  
  <button type="submit" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-refresh"></span> Perbarui</button>
</form>