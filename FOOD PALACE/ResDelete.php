<?php
    include ('ConnectDB.php');

$RRID=$_POST['RID'];



$sql = "DELETE FROM restaurantstable WHERE ResID = $RRID;";

if (mysql_query($sql)) {
               

    echo 'Hotel Deleted successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();

