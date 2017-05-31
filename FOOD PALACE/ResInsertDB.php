<?php
include ('ConnectDB.php');
    
$name = $_POST['NAME'];
$add = $_POST['ADDRESS'];
$area = $_POST['AREA'];


$sql = "INSERT INTO restaurantstable (ResName, 	ResAddress, ResArea) VALUES ('$name', '$add', '$area')";

if (mysql_query($sql)) {
               

    echo 'Inserted successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
