<a href="gammu/index.php">SMS GATEWAY</a>
<?php

include ("db.php"); 

?>


 INBOX

<table cellpadding=1 cellspacing=1 border=1>

<tr class="headlist" >


<td >NO</td>
<td >RECEIVINGDATETIME</td>
<td >SENDERNUMBER</td>
<td >TEXTDECODED</td>
</tr>

<?php 
$i =0;
$sql = mysql_query("SELECT * FROM inbox order by ReceivingDateTime desc");
while ($r=mysql_fetch_array($sql)){
echo "
    <tr>
    <td>$i</td>
    <td>$r[ReceivingDateTime]</td>
    <td>$r[SenderNumber]</td>
    <td>$r[TextDecoded]</td>
  </tr>";
  $i++;
}
?>

</table>

