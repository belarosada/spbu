<?php 
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_SESSION[hak_akses]'");
$r=mysql_fetch_array($sql);
$xx = $r[h1];
if ($xx==0){
	 echo "<div class='alert alert-danger'>
			<li>$_SESSION[nama] Anda tidak diizinkan mengakses halaman ini.</li>
		</div>";	
}else{
?>

<h3>Data Lokasi</h3>

<a href="?page=tambah_lokasi"><button type="button" class="btn btn-info pull-right"><span class="glyphicon glyphicon-map-marker"></span> Tambah Lokasi</button></a>
<br><br>
<table class="table table-bordered table-hover" width="100%">
  <tr>
    <th width="10%">No</th>
    <th>Lokasi</th>
    <th width="30%">Edit/Delete</th>
  </tr>
  
  
<?php
$no=1;
$sql = mysql_query("SELECT * FROM lokasi");
while ($r=mysql_fetch_array($sql)){
echo"
<tr> 
    <td>$no</td>
    <td>$r[nama_lokasi]</td>
    <td>
	
		<a href='?page=edit_lokasi&id=$r[id_lokasi]'>
			<button type='button' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></button>
			</a>
		
    	<a href='action/hapus.php?p=lokasi&id=$r[id_lokasi]'>
		<button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
		</a>
    </td>
</tr>
	";
$no++;
}
?>
  
</table>
<?php 
}
?>
