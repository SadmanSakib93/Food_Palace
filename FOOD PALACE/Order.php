<?php

include ('ConnectDB.php');
session_start();
$USER_ID= $_SESSION["UserID"];
$sqlQry = "INSERT INTO ordermain (UserID) VALUES ('$USER_ID')";
$result = mysql_query($sqlQry);

                    
                    $SqlOrderID="SELECT MAX(OrderID) from ordermain";
                    $QueryOrderID=mysql_query($SqlOrderID); 
                    $FetchOrderID=mysql_fetch_array($QueryOrderID);
                    
                 //   echo $FetchOrderID[0];
                    
                    
           
            $sql="SELECT * FROM itemtable WHERE ItemID IN ("; 
                      
                    foreach($_SESSION['cart'] as $id => $value) { 
                        $sql.=$id.","; 
                    } 
                      
                    $sql=substr($sql, 0, -1).") ORDER BY ItemName ASC"; 
                    $query=mysql_query($sql); 
                    $totalprice=0; 
                    while($row=mysql_fetch_array($query)){ 
                        $subtotal=$_SESSION['cart'][$row['ItemID']]['quantity']*$row['ItemPrice']; 
                        $totalprice+=$subtotal; 
                    
                    $ItemsID=$row['ItemID'];
                    $ItemsName=$row['ItemName'];
                    
                    $Quant=$_SESSION['cart'][$row['ItemID']]['quantity'];
                    
                    $SQL_QUERY_INSERT_ORDER_ITEMS = "INSERT INTO `foodpalacedb`.`orderdetails` (`OrderDetailsID`, `OrderID`, `ItemID`, `ItemName`, `Quantity`) VALUES (NULL, '$FetchOrderID[0]', '$ItemsID', '$ItemsName', '$Quant');";
                 //   $result_s = mysql_query($SQL_QUERY_INSERT_ORDER_ITEMS);  
                    if(mysql_query($SQL_QUERY_INSERT_ORDER_ITEMS))
                    echo 'Your Orders is recieved !';
                          
                    }                    

 
?>