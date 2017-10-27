<?php 
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_SESSION[hak_akses]'");
$r=mysql_fetch_array($sql);
$xx = $r[h6];
if ($xx==0){
	 echo "<div class='alert alert-danger'>
			<li>$_SESSION[nama] Anda tidak diizinkan mengakses halaman ini.</li>
		</div>";	
}else{
?>
<h3>Multi Cargo</h3>

<?php 
if(isset($_GET['alert'])){
$alert=$_GET['alert'];
	if($alert=="success"){
		echo"	<div class='alert alert-success'>
			<li>Pesan Telah dikirim.</li>
		</div>";}else{
			echo"	<div class='alert alert-danger'>
			<li>Pesan gagal dikirim.</li>
		</div>";
		}
}
$lokasi="";
if(isset($_GET['lokasi'])){
	$lokasi=$_GET['lokasi'];
}
?>


<form class="form-horizontal" action="action/sms.php?sms=multy&lokasi=<?php echo $lokasi ?>" method="post">
 <div class="form-group">
    <label class="col-sm-3 control-label">Lokasi SPBU</label>
    <div class="col-sm-6">
      <select name="lokasi" class="form-control" onchange="document.location.href=this.options[this.selectedIndex].value;">

<?php
echo "<option value='' selected disabled>.: Pilih Lokasi :.</option>";
$sql = mysql_query("SELECT * FROM lokasi");
while ($r=mysql_fetch_array($sql)){
	if($r['nama_lokasi']==$lokasi){
		echo"<option selected='selected' value='?page=multy&lokasi=$r[nama_lokasi]'>$r[nama_lokasi]</option>";  
	}else{
		echo"<option value='?page=multy&lokasi=$r[nama_lokasi]'>$r[nama_lokasi]</option>";
	}
}
?>


      </select>
    </div>
  </div>
 
<div class="tabs">
    <ul class="tab-links">
        <li><a href="#tab4">Cargo 4</a></li>
        <li><a href="#tab3">Cargo 3</a></li>
        <li><a href="#tab2">Cargo 2</a></li>
        <li class="active"><a href="#tab1">Cargo 1</a></li>
    </ul>
<div class="tab-content">
    <div id="tab1" class="tab active">
     <!-- mulai tab -->
      <div class="checkbox">
            <label><input type="checkbox" name="cargo1" value="1" id="cargo1">Cargo 1</label>
         </div><br>
      <div class="form-group">
        <label class="col-sm-3 control-label">Plat Nomor</label>
        <div class="col-sm-4">
          <select name="plat_nomor1" class="form-control" id="plat_nomor1">

<option value="" selected disabled>Pilih Plat Nomor</option>
<?php
$sql = mysql_query("SELECT * FROM data_mobil where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_mobil]'>$x[plat_nomor]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">No SPBU</label>
        <div class="col-sm-6">
          <select name="no_spbu1" class="form-control" id="no_spbu1">

<option value="" selected disabled>.: Pilih Nomor SPBU :.</option>
<?php
$sql = mysql_query("SELECT * FROM spbu where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_spbu]'>$x[no_spbu]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="col-sm-12"><hr></div>
      <div class="form-group">
        <div class="col-sm-6">
    <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="az1" value="1" id="az1">Premium</label></div></td>
        <td><div class="input-group"><input name="va1" type="text" class="form-control" id="va1"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="az2" value="1" id="az2">Solar</label></div></td>
        <td><div class="input-group"><input name="va2" type="text" class="form-control" id="va2"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="az3" value="1" id="az3">Pertamax</label></div></td>
        <td><div class="input-group"><input name="va3" type="text" class="form-control" id="va3"><div class="input-group-addon">KL</div></div></td>
      </tr>
       </table>
    
        </div>
        <div class="col-sm-6">
        <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="az4" value="1" id="az4">Pertamax Plus</label></div></td>
        <td><div class="input-group"><input name="va4" type="text" class="form-control" id="va4"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="az5" value="1" id="az5">Pertalite</label></div></td>
        <td><div class="input-group"><input name="va5" type="text" class="form-control" id="va5"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="az6" value="1" id="az6">Pertadex</label></div></td>
        <td><div class="input-group"><input name="va6" type="text" class="form-control" id="va6"><div class="input-group-addon">KL</div></div></td>
      </tr>
    </table>	
        </div>  
      </div>         
    <!-- Akhir tab -->            
    </div>
	<div id="tab2" class="tab">
     <!-- mulai tab -->
      <div class="checkbox">
            <label><input type="checkbox" name="cargo2" value="1" id="cargo2">Cargo 2</label>
         </div><br>
      <div class="form-group">
        <label class="col-sm-3 control-label">Plat Nomor</label>
        <div class="col-sm-4">
          <select name="plat_nomor2" class="form-control" id="plat_nomor2">

<option value="" selected disabled>Pilih Plat Nomor</option>
<?php
$sql = mysql_query("SELECT * FROM data_mobil where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_mobil]'>$x[plat_nomor]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">No SPBU</label>
        <div class="col-sm-6">
          <select name="no_spbu2" class="form-control" id="no_spbu2">

<option value="" selected disabled>.: Pilih Nomor SPBU :.</option>
<?php
$sql = mysql_query("SELECT * FROM spbu where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_spbu]'>$x[no_spbu]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="col-sm-12"><hr></div>
      <div class="form-group">
        <div class="col-sm-6">
    <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="bz1" value="1" id="bz1">Premium</label></div></td>
        <td><div class="input-group"><input name="vb1" type="text" class="form-control" id="vb1"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="bz2" value="1" id="bz2">Solar</label></div></td>
        <td><div class="input-group"><input name="vb2" type="text" class="form-control" id="vb2"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="bz3" value="1" id="bz3">Pertamax</label></div></td>
        <td><div class="input-group"><input name="vb3" type="text" class="form-control" id="vb3"><div class="input-group-addon">KL</div></div></td>
      </tr>
       </table>
    
        </div>
        <div class="col-sm-6">
        <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="bz4" value="1" id="bz4">Pertamax Plus</label></div></td>
        <td><div class="input-group"><input name="vb4" type="text" class="form-control" id="vb4"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="bz5" value="1" id="bz5">Pertalite</label></div></td>
        <td><div class="input-group"><input name="vb5" type="text" class="form-control" id="vb5"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="bz6" value="1" id="bz6">Pertadex</label></div></td>
        <td><div class="input-group"><input name="vb6" type="text" class="form-control" id="vb6"><div class="input-group-addon">KL</div></div></td>
      </tr>
    </table>	
        </div>  
      </div>         
    <!-- Akhir tab -->            
    </div>
    <div id="tab3" class="tab">
     <!-- mulai tab -->
      <div class="checkbox">
            <label><input type="checkbox" name="cargo3" value="1" id="cargo3">Cargo 3</label>
         </div><br>
      <div class="form-group">
        <label class="col-sm-3 control-label">Plat Nomor</label>
        <div class="col-sm-4">
          <select name="plat_nomor3" class="form-control" id="plat_nomor3">

<option value="" selected disabled>Pilih Plat Nomor</option>
<?php
$sql = mysql_query("SELECT * FROM data_mobil where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_mobil]'>$x[plat_nomor]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">No SPBU</label>
        <div class="col-sm-6">
          <select name="no_spbu3" class="form-control" id="no_spbu3">

<option value="" selected disabled>.: Pilih Nomor SPBU :.</option>
<?php
$sql = mysql_query("SELECT * FROM spbu where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_spbu]'>$x[no_spbu]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="col-sm-12"><hr></div>
      <div class="form-group">
        <div class="col-sm-6">
    <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="cz1" value="1" id="cz1">Premium</label></div></td>
        <td><div class="input-group"><input name="vc1" type="text" class="form-control" id="vc1"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="cz2" value="1" id="cz2">Solar</label></div></td>
        <td><div class="input-group"><input name="vc2" type="text" class="form-control" id="vc2"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="cz3" value="1" id="cz3">Pertamax</label></div></td>
        <td><div class="input-group"><input name="vc3" type="text" class="form-control" id="vc3"><div class="input-group-addon">KL</div></div></td>
      </tr>
       </table>
    
        </div>
        <div class="col-sm-6">
        <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="cz4" value="1" id="cz4">Pertamax Plus</label></div></td>
        <td><div class="input-group"><input name="vc4" type="text" class="form-control" id="vc4"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="cz5" value="1" id="cz5">Pertalite</label></div></td>
        <td><div class="input-group"><input name="vc5" type="text" class="form-control" id="vc5"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="cz6" value="1" id="cz6">Pertadex</label></div></td>
        <td><div class="input-group"><input name="vc6" type="text" class="form-control" id="vc6"><div class="input-group-addon">KL</div></div></td>
      </tr>
    </table>	
        </div>  
      </div>         
    <!-- Akhir tab -->            
    </div>
    <div id="tab4" class="tab">
     <!-- mulai tab -->
      <div class="checkbox">
            <label><input type="checkbox" name="cargo4" value="1" id="cargo4">Cargo 4</label>
         </div><br>
      <div class="form-group">
        <label class="col-sm-3 control-label">Plat Nomor</label>
        <div class="col-sm-4">
          <select name="plat_nomor4" class="form-control" id="plat_nomor4">

<option value="" selected disabled>Pilih Plat Nomor</option>
<?php
$sql = mysql_query("SELECT * FROM data_mobil where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_mobil]'>$x[plat_nomor]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">No SPBU</label>
        <div class="col-sm-6">
          <select name="no_spbu4" class="form-control" id="no_spbu4">

<option value="" selected disabled>.: Pilih Nomor SPBU :.</option>
<?php
$sql = mysql_query("SELECT * FROM spbu where lokasi='$lokasi'");
while ($x=mysql_fetch_array($sql)){
echo "<option value='$x[id_spbu]'>$x[no_spbu]</option>";  
}
?>

          </select>
        </div>
      </div>
      <div class="col-sm-12"><hr></div>
      <div class="form-group">
        <div class="col-sm-6">
    <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="dz1" value="1" id="dz1">Premium</label></div></td>
        <td><div class="input-group"><input name="vd1" type="text" class="form-control" id="vd1"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="dz2" value="1" id="dz2">Solar</label></div></td>
        <td><div class="input-group"><input name="vd2" type="text" class="form-control" id="vd2"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="dz3" value="1" id="dz3">Pertamax</label></div></td>
        <td><div class="input-group"><input name="vd3" type="text" class="form-control" id="vd3"><div class="input-group-addon">KL</div></div></td>
      </tr>
       </table>
    
        </div>
        <div class="col-sm-6">
        <table width="100%" border="0">
      <tr>
        <td width="130"><div class="checkbox"><label><input type="checkbox" name="dz4" value="1" id="dz4">Pertamax Plus</label></div></td>
        <td><div class="input-group"><input name="vd4" type="text" class="form-control" id="vd4"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="dz5" value="1" id="dz5">Pertalite</label></div></td>
        <td><div class="input-group"><input name="vd5" type="text" class="form-control" id="vd5"><div class="input-group-addon">KL</div></div></td>
      </tr>
      <tr>
        <td><div class="checkbox"><label><input type="checkbox" name="dz6" value="1" id="dz6">Pertadex</label></div></td>
        <td><div class="input-group"><input name="vd6" type="text" class="form-control" id="vd6"><div class="input-group-addon">KL</div></div></td>
      </tr>
    </table>	
        </div>  
      </div>         
    <!-- Akhir tab -->            
    </div>
</div>
</div>


<br><br>
<button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-envelope"></span> Kirim</button>
</form> 
<?php }?>