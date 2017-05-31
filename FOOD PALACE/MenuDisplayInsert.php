
<style>
    #EditRes
    {
        position: relative;
        left: 35%;
        border-bottom: 1px solid #7c7d7e;
        width: 30%;
    }
</style>

<?php
include ('ConnectDB.php');
$resultSet = mysql_query("SELECT * FROM itemtable");
	while($rows = mysql_fetch_assoc($resultSet)){
	
	$name = $rows['ItemName'];
        $price = $rows['ItemPrice'];
        $type = $rows['ItemType'];
        $id = $rows['ItemID'];


	?>
<form id="EditRes" action="MenuUpdate.php" method="post" > <?php
	echo"<p>Name: $name<br />Price: $price<br />Item Type: $type<br />Item ID: $id<br />"; ?><?php
	echo "<input type=hidden name=RESI value=".$rows['ItemID']." >" ?><?php
	echo "<p>" . "<input  type=submit name=Rid value=UPDATE id=updateButton  ". " </p>"; ?>
        
	</form> <?php
	
	}
	


?>