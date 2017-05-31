
<!doctype html>
<style>
    #CartDiv
    {
        border: 2px solid black;
        padding: 20px;
        margin: 20px;
        position: absolute;
        box-shadow: 4px 4px 4px #7c7d7e  ;
        border-radius:4px;
        top: 15%;
        left: 70%;
    }
    #Tprice
    {
        font-size: 20px;
        font-weight: bolder;
        
    }
    #Order
    {
        border: 1px solid #A6A5A9;
        background: bottom;
        font-size: 15px;
        font-weight: bold;
        width: 30px;
        height: 10px;
        padding: 10px;
        margin: 20px;
        transition: all 0.5s ease;            
        box-shadow: 3px 3px 3px #7c7d7e  ;
        border-radius:4px;
    }
        #Order:hover
    {
        background-color: black;
        box-shadow: 3px 3px #A6A5A9;
        color: whitesmoke;
        cursor: pointer;
    }
    #Order:active
    {
        background-color: windowframe;
        box-shadow: 3px 3px #fff;
        border: 1px solid black;
        color: black;
        cursor: pointer;

    }
    #Refresh
    {
        position: relative;
        border: 1px solid #A6A5A9;
        background: bottom;
        font-size: 15px;
        font-weight: bold;
        left:15px;
        padding: 10px;
        width: 30px;
        height: 10px;
        margin: 20px;
        transition: all 0.5s ease;            
        box-shadow: 3px 3px 3px #7c7d7e  ;
        border-radius:4px;
    }
        #Refresh:hover
    {
        background-color: black;
        box-shadow: 3px 3px #A6A5A9;
        color: whitesmoke;
        cursor: pointer;
    }
    #Refresh:active
    {
        background-color: windowframe;
        box-shadow: 3px 3px #fff;
        border: 1px solid black;
        color: black;
        cursor: pointer;

    }
    #cart
    {
        font-weight: bold;
        text-align:center;
        border: 1px solid black;
        background: darkred;
        border-radius:4px;
        color: #fff;
    }
    
</style>
  <?php 
    session_start(); 
    require("ConnectDB.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("products", "cart"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="products"; 
              
        } 
          
    }else{ 
          
        $_page="products"; 
          
    } 
  
?> 
<!doctype html>
<html> 
<head> 
      
  
    <title>ORDER</title> 
  
  
</head> 
  
<body> 
      
    <div id="container"> 
  
        <div id="main"> 
              
            <?php require($_page.".php"); ?> 
  
        </div><!--end of main--> 
          
        <div id="sidebar"> 
              
        </div><!--end of sidebar--> 
  
    </div><!--end container--> 
  
</body> 
</html>
<div id="CartDiv">
    <h1 id="cart">Cart</h1> 
<?php 
  
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM itemtable WHERE ItemID IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
        $totalprice=0;   
        $sql=substr($sql, 0, -1).") ORDER BY ItemName ASC"; 
        $query=mysql_query($sql); 
        while($row=mysql_fetch_array($query)){ 
              
        
                $subtotal=$_SESSION['cart'][$row['ItemID']]['quantity']*$row['ItemPrice']; 
                $totalprice+=$subtotal; 
?> 
                <li><?php echo $row['ItemName'] ?> x <?php echo $_SESSION['cart'][$row['ItemID']]['quantity']; ?></li> 
                <p> <?php echo '  Price:'.$row['ItemPrice']*$_SESSION['cart'][$row['ItemID']]['quantity']; ?> </p>

        <?php  

        }
        
?>
        <p id="Tprice">Total Price: <?php echo $totalprice .' tk' ?></p> 
        <a href="Order.php" id="Order">ORDER</a>
        <a href="index.php?page=cart" id="Refresh">UPDATE CART</a>
    <?php 
          
    }else{ 
          
        echo "<p>Your Cart is empty. Please add some products.</p>"; 
          
    } 
  
?>
</div>