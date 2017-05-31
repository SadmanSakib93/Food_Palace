
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
$resultSet = mysql_query("SELECT * FROM restaurantstable");
	while($rows = mysql_fetch_assoc($resultSet)){
	
	$name = $rows['ResName'];
        $add = $rows['ResAddress'];
        $area = $rows['ResArea'];


	?>
<form id="EditRes" action="ResUpdate.php" method="post" > <?php
	echo"<p>Name: $name<br />Add: $add<br />Area: $area<br />"; ?><?php
	echo "<input type=hidden name=UID value=".$rows['ResID']." >" ?><?php
	echo "<p>" . "<input  type=submit name=Rid value=UPDATE id=updateButton  ". " </p>"; ?>
        
	</form> <?php
	
	}
	


?>