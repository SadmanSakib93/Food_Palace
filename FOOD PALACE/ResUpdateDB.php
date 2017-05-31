<?php
include ('ConnectDB.php');

$RID=$_POST['hiddenID'];
$name = $_POST['NAME'];
$add = $_POST['ADDRESS'];
$area = $_POST['AREA'];



$sql = "UPDATE restaurantstable SET ResName = '$name', ResAddress = '$add', ResArea = '$area' WHERE ResID = $RID;";

if (mysql_query($sql)) {
               

    echo 'Updated successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
