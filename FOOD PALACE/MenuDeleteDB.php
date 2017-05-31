<?php
    include ('ConnectDB.php');

$Itm_ID = $_POST['IID'];



$sql = "DELETE FROM itemtable WHERE ItemID = $Itm_ID;";

if (mysql_query($sql)) {
               

    echo 'Deleted successfully!!';
    header('refresh:0; url=AdminHome.php');
}


mysql_close();