<h3>Tambah User</h3>
<form class="form-horizontal" action="action/simpan.php?p=user" method="post">
  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-9">
      <input type="text" name="nama" class="form-control" placeholder="Nama">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Username</label>
    <div class="col-sm-9">
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-3 control-label">Password</label>
    <div class="col-sm-9">
      <input type="password" name="password" class="form-control" placeholder="password">
    </div>
  </div>
    

  <div class="form-group">
    <label class="col-sm-3 control-label">Hak Akses</label>
    <div class="col-sm-4">
      <select name="hak_akses" class="form-control">
      	<option selected disabled>.: Pilih Hak Akses:.</option>
        <option value="Operator">Operator</option>
        <option value="Admin">Admin</option>
        <option value="SuperAdmin">SuperAdmin</option>
      </select>
    </div>
  </div>
<div class="col-sm-13"><hr /></div>  
  <button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-save"></span> Simpan</button>
</form>