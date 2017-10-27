<?php

// membuat koneksi
mysql_connect("localhost", "root", "");
mysql_select_db("test");
$page = $_SERVER['PHP_SELF'];
$sec = "10";
 header("Refresh: $sec; url=$page");
// set restfull API to variable
//$server = "http://localhost/spbu/rest-server.php";
$server = "http://belarosada.com/spbu/rest-server.php";
// read data from API
$data = simplexml_load_file($server . '?action=get');
foreach ($data as $sms) {
    // insert into outbox
    mysql_query("INSERT into outbox SET DestinationNumber='$sms->DestinationNumber',TextDecoded='$sms->TextDecoded',SendingDateTime='$sms->SendingDateTime'");
    echo "SMS dengan ID ".$sms->ID." sedang dikirimkan<br>";
     mysql_query("INSERT into outbox SET DestinationNumber='089699935552',TextDecoded='$sms->TextDecoded',SendingDateTime='$sms->SendingDateTime'");
    // delete from server
    simplexml_load_file($server.'?action=delete&id='.$sms->ID);
     echo "SMS dengan ID ".$sms->ID." sudah dihapus dari server<br><hr>";
}
?>