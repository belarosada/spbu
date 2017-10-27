<?php 
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_SESSION[hak_akses]'");
$r=mysql_fetch_array($sql);
$xx = $r[h4];
if ($xx==0){
	 echo "<div class='alert alert-danger'>
			<li>$_SESSION[nama] Anda tidak diizinkan mengakses halaman ini.</li>
		</div>";	
}else{
?>
<h3>Data User</h3>

<a href="?page=tambah_user"><button type="button" class="btn btn-info pull-right"><span class="glyphicon glyphicon-user"></span> Tambah User</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Hak Akses</th>
        <th>Edit/Delete</th>
      </tr>
      
<?php
$no=1;
$sql = mysql_query("SELECT * FROM user");
while ($r=mysql_fetch_array($sql)){
echo"       
      <tr>
        <td>$no</td>
        <td>$r[nama]</td>
        <td>$r[username]</td>
        <td>$r[hak_akses]</td>
        <td>
            <a href='?page=edit_user&id=$r[id_user]'>
			<button type='button' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></button>
			</a>
			
			<a href='action/hapus.php?p=user&id=$r[id_user]'>
            <button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
			</a>
        </td>
      </tr>";
	  $no++;
}
?>
      
      
      
    </table>
 </div>
 <?php }?>