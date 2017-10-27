<?php 
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_SESSION[hak_akses]'");
$r=mysql_fetch_array($sql);
$xx = $r[h2];
if ($xx==0){
	 echo "<div class='alert alert-danger'>
			<li>$_SESSION[nama] Anda tidak diizinkan mengakses halaman ini.</li>
		</div>";	
}else{
?>
<h3>Data SPBU</h3>

<a href="?page=tambah_spbu"><button type="button" class="btn btn-info pull-right"><span class="glyphicon glyphicon-home"></span> Tambah SPBU</button></a>
<br><br>
<div class="table-responsive">
    <table class="table table-hover table-bordered">
      <tr>
        <th>No</th>
        <th>No SPBU</th>
        <th>Pemilik</th>
        <th>Alamat</th>
        <th>No HP 1</th>
        <th>No HP 2</th>
        <th>Lokasi</th>
        <th>Estimasi</th>
        <th>Edit/Delete</th>
      </tr>
      

<?php
$no=1;
include ("action/koneksi.php");
$sql = mysql_query("SELECT * FROM spbu");
while ($r=mysql_fetch_array($sql)){
echo"   <tr>
        <td>$no</td>
        <td>$r[no_spbu]</td>
        <td>$r[pemilik]</td>
        <td>$r[alamat]</td>
        <td>$r[nohp1]</td>
        <td>$r[nohp2]</td>
        <td>$r[lokasi]</td>
        <td>$r[estimasi]</td>
        <td align='center'>
			
            <a href='?page=edit_spbu&id=$r[id_spbu]'>
			<button type='button' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-edit'></span></button>
			</a>
			
			<a href='action/hapus.php?p=spbu&id=$r[id_spbu]'>
            <button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>
			</a>
        </td>
		</tr>
	";
	$no++;
}
?>
 
        
        
      
    </table>
 </div>
 <?php }?>
 
 