<?php
include ('ConnectDB.php');
    
$name = $_POST['NAME'];
$pri = $_POST['PRICE'];
$type = $_POST['TYPE'];
$Rest_ID = $_POST['RestID'];
$Itm_ID = $_POST['ITMID'];


$sql = "UPDATE itemtable SET ItemName = '$name', ItemPrice = '$pri', ItemType = '$type',ResID='$Rest_ID' WHERE ItemID=$Itm_ID;";

if (mysql_query($sql)) {
               

    echo 'Item Updated successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
