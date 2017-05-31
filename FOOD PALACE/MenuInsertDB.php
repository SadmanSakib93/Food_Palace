<?php
include ('ConnectDB.php');
    
$name = $_POST['NAME'];
$pri = $_POST['PRICE'];
$type = $_POST['TYPE'];
$Rest_ID = $_POST['RestID'];


$sql = "INSERT INTO itemtable (ItemName, ItemPrice, ItemType,ResID) VALUES ('$name', '$pri', '$type' , '$Rest_ID')";

if (mysql_query($sql)) {
               

    echo 'Item Inserted successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
