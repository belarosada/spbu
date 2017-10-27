<?php 
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_SESSION[hak_akses]'");
$r=mysql_fetch_array($sql);
$xx = $r[h3];
if ($xx==0){
	 echo "<div class='alert alert-danger'>
			<li>$_SESSION[nama] Anda tidak diizinkan mengakses halaman ini.</li>
		</div>";	
}else{
?>

<h3>Data MOBIL</h3>

<a href="?page=tambah_mobil"><button type="button" class="btn btn-info pull-right"><span class="glyphicon glyphicon-inbox"></span> Tambah Mobil</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>Plat Nomor</th>
        <th>Supir</th>
        <th>No HP</th>
        <th>Lokasi</th>
        <th>Edit/Delete</th>
      </tr>
      
<?php
$no=1;
$sql = mysql_query("SELECT * FROM data_mobil");
while ($r=mysql_fetch_array($sql)){
echo"      
      
      <tr>
        <td>$no</td>
        <td>$r[plat_nomor]</td>
        <td>$r[sopir]</td>
        <td>$r[no_hp]</td>
        <td>$r[lokasi]</td>
        <td>
            <a href='?page=edit_mobil&id=$r[id_mobil]'>
			<button type='button' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></button>
			</a>
			
			<a href='action/hapus.php?p=mobil&id=$r[plat_nomor]'>
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