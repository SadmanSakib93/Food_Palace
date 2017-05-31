<style>
    #EditRes
    {
        position: relative;
        border: 2px dashed #000;
        width: 200px;
        padding: 15px;
        font-size: 15px;
        margin: 15px;
        


        
    }
    #DIV
    {
        left: 10%;
        

    }
    
</style>
<?php

    include ('ConnectDB.php');
    $resultSet = mysql_query("SELECT * FROM orderdetails ORDER BY OrderID DESC");
    $OrderSet = mysql_query("SELECT * FROM ordermain ORDER BY OrderID DESC");
    $rows = mysql_fetch_assoc($resultSet); 
    

    while($OrderSetRows = mysql_fetch_assoc($OrderSet)){
        $OrderID = $OrderSetRows['OrderID'];
        $UserID = $OrderSetRows['UserID'];
        $GetUserID =mysql_fetch_assoc( mysql_query("SELECT * FROM usertable WHERE ID=$UserID"));
        $UserName=$GetUserID['NAME'];
 
        ?><div id="DIV"> <?php
        echo"<p id=EditRes>Order ID: $OrderID<br/>User ID: $UserID<br/>User NAME: $UserName<br/></p>";
        
        
	while($rows['OrderID']==$OrderSetRows['OrderID']){
	
	$OrderDetailsID = $rows['OrderID'];
        $ItemID = $rows['ItemID'];
        $ItemName = $rows['ItemName'];
        $Quantity = $rows['Quantity'];
        
        
     //   


	?>
	<form    > <?php
	echo"<p id=DIV>Item ID: $ItemID<br />Item Name: $ItemName<br />Quantity: $Quantity<br />";
        $rows = mysql_fetch_assoc($resultSet);?>        
        </form></div> <?php
	
	}
    }
	


?>