<?php

include 'action/koneksi.php';
$action = $_GET['action'];
if ($action == 'get') {
    header("Content-Type:text/xml");
    echo "<?xml version='1.0'?>";
    echo "<data>";
    $outbox = mysql_query("select * from outbox");
    while ($o = mysql_fetch_array($outbox)) {
        echo "<sms>";
        echo "<DestinationNumber>$o[DestinationNumber]</DestinationNumber>";
        echo "<TextDecoded>$o[TextDecoded]</TextDecoded>";
        echo "<SendingDateTime>$o[SendingDateTime]</SendingDateTime>";
        echo "<ID>$o[ID]</ID>";
        echo"</sms>";
    }
    echo "</data>";
} else {
    $id = $_GET['id'];
    header("Content-Type:text/xml");
    echo "<?xml version='1.0'?>";
    echo "<data>";
    $outbox = mysql_query("delete from outbox where ID='$id'");
    echo "</data>";
}
?>