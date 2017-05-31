<!doctype html>
 <link rel="stylesheet" type="text/css" href="MainStyle.css"/>
<style>
    #CartUpdate
    {
        position: absolute;
        left: 30%;
        top: 30%;
        padding: 30px;
        margin: 10px;
        background-color: whitesmoke;
        border:1px solid black;
    }
    #text
    {
        
        font-style: bold;
        font-size: 25px;
        font-style: italic;
        color: black;
        text-shadow: 3px 3px 3px #A6A5A9;

    }
    #Tab
    {
        
        border-bottom: 1px solid black;
        
    }
    #UpdateButton
    {
        
        position: relative;
        border: 1px solid #A6A5A9;
        background: bottom;
        font-size: 15px;
        font-weight: bold;
        padding: 10px;
        width: 150px;
        height: 40px;
        margin: 20px;
        transition: all 0.5s ease;            
        box-shadow: 3px 3px 3px #7c7d7e  ;
        border-radius:4px;
    }
        #UpdateButton:hover
    {
        background-color: black;
        box-shadow: 3px 3px #A6A5A9;
        color: whitesmoke;
        cursor: pointer;
    }
    #UpdateButton:active
    {
        background-color: windowframe;
        box-shadow: 3px 3px #fff;
        border: 1px solid black;
        color: black;
        cursor: pointer;

    }
    #GoBack
    {
        font-size: 20px;
        font-weight: bold;
        color:salmon;
    }
    #GoBack:hover
    {
        
        text-shadow: 4px 3px 3px #A6A5A9;
        transition: all 0.5s ease-in-out;  
        color: red;
        font-size:22px;
        cursor: pointer;
    }
    
</style>  


 <?php 
  
    if(isset($_POST['submit'])){ 
          
        foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
            }else{ 
                $_SESSION['cart'][$key]['quantity']=$val; 
            } 
        } 
          
    } 
  
?> 
        <div class="TitleBar">
              
                <img src="images/HeaderBurger.png" id="HeaderBurger"> 
                <img src="images/HeaderIceCream.png" id="HeaderBurger"> 
                <right>              
                    <img src="images/HeaderPizza.png" id="HeaderPizza">
                    <img src="images/HeaderSandwich.png" id="HeaderPizza">
                </right>


               
                <center><div id="TitleBarLOGO"><center id="TitleBarLOGOText"> FOOD PALACE</center></div></center>  
        </div> 
 
<form id="CartUpdate" method="post" action="index.php?page=cart"> 
    <p ><a id='GoBack' href="index.php?page=products">Go back to the products page.</a></p>    
    <table id="Tab" > 
          
        <tr> 
            <th id="TableRow">Name</th> 
            <th>Quantity</th> 
            <th>Price</th> 
            <th>Items Price</th> 
        </tr> 
          
        <?php 
          
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
                    ?> 
                        <tr> 
                            <td><?php echo $row['ItemName'] ?></td> 
                            <td><input type="text" name="quantity[<?php echo $row['ItemID'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['ItemID']]['quantity'] ?>" /></td> 
                            <td><?php echo $row['ItemPrice'] ?> tk</td> 
                            <td><?php echo $_SESSION['cart'][$row['ItemID']]['quantity']*$row['ItemPrice'] ?> tk</td> 
                        </tr> 
                    <?php 
                          
                    } 
        ?> 
                    <tr> 
                        <td colspan="4">Total Price: <?php echo $totalprice ?></td> 
                    </tr> 
          
    </table> 
    <br /> 
    <button id="UpdateButton" type="submit" name="submit">Update Cart</button> 
</form> 
 
<p id="text">  <strong>*To remove an item set its quantity to 0.</strong> </p>