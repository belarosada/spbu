<?php
$a="";
$b="";
$c="";
if(!empty($_GET['ak'])){
$select=$_GET['ak'];
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
}}
$h1="";
$h2="";
$h3="";
$h4="";
$h5="";
$h6="";
$h7="";
$h8="";
if (isset($_GET['ak'])){
$sql = mysql_query("SELECT * FROM hak_akses where hak='$_GET[ak]'");
$ak=$_GET['ak'];
$r=mysql_fetch_array($sql);

	if ($r['h1']==1){
		$h1="checked='checked'";
		}
	if ($r['h2']==1){
		$h2="checked='checked'";
		}
	if ($r['h3']==1){
		$h3="checked='checked'";
		}
	if ($r['h4']==1){
		$h4="checked='checked'";
		}
	if ($r['h5']==1){
		$h5="checked='checked'";
		}
	if ($r['h6']==1){
		$h6="checked='checked'";
		}
	if ($r['h7']==1){
		$h7="checked='checked'";
		}
	if ($r['h8']==1){
		$h8="checked='checked'";
		}

}
?>
<form action="action/update.php?page=hak_akses&hak=<?php echo $ak ?>" method="post">
<h3>Hak Akses</h3>

<?php 
if(isset($_GET['alert'])){
$alert=$_GET['alert'];
	if($alert=="success"){
		echo"	<div class='alert alert-success'>
			<li>Hak Akses Telah di Perbaharui</li>
		</div>";}else{
			echo"	<div class='alert alert-danger'>
			<li>Silahkan Pilih Hak Akses</li>
		</div>";
		}
}
?>

<div class="form-group">
    <label class="col-sm-3 control-label">Hak Akses</label>
    <div class="col-sm-6">
      <select name="hak_akses" class="form-control" onchange="document.location.href=this.options[this.selectedIndex].value;">
        <option value="" selected disabled>Pilih Hak Ases</option>
        <option <?php echo $a; ?> value="?page=hak_akses&ak=Operator">Operator</option>
        <option <?php echo $b; ?> value="?page=hak_akses&ak=Admin">Admin</option>
        <option <?php echo $c; ?> value="?page=hak_akses&ak=SuperAdmin">Super Admin</option>
      </select>
    </div>
  </div>
<div class="col-sm-12"><hr>
<div class="col-sm-4">
    <div class="checkbox">
        <label>
          <input <?php echo $h1; ?> name="x1" type="checkbox" value="1" >
          Data Lokasi
        </label>
     </div>
     <div class="checkbox">
        <label>
          <input <?php echo $h2; ?> type="checkbox" name="x2" value="1">
          Data SPBU
        </label>
     </div>
     <div class="checkbox">
        <label>
          <input <?php echo $h3; ?> type="checkbox" name="x3" value="1">
          Data Mobil
        </label>
     </div>
     
</div>
<div class="col-sm-4">
    <div class="checkbox">
        <label>
          <input <?php echo $h4; ?> type="checkbox" name="x4" value="1">
          Data User
        </label>
     </div>
     <div class="checkbox">
        <label>
          <input <?php echo $h5; ?> type="checkbox" name="x5" value="1">
          Singel Cargo
        </label>
     </div>
     <div class="checkbox">
        <label>
          <input <?php echo $h6; ?> type="checkbox" name="x6" value="1">
          Multy Cargo
        </label>
     </div>  
</div>
<div class="col-sm-4">
     <div class="checkbox">
        <label>
          <input <?php echo $h7; ?> type="checkbox" name="x7" value="1">
          Hak Akses
        </label>
     </div>
     <div class="checkbox">
        <label>
          <input <?php echo $h8; ?> name="x8" type="checkbox" value="1">
          Laporan
        </label>
     </div>    
</div>
</div>
<div class="col-sm-12"><hr></div>
<button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-repeat"></span> Perbaharui</button>
</form>