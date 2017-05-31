<style>
    #Frm
    {
        position: relative;
        padding: 15px;
        left: 35%;
    }
    #Btn
    {
        position: absolute;
        left: 20%;
        top:13%;
    }
    #Adref
    {
         
        text-decoration: none;
        background:transparent;
        font-size: 20px;
        transition: all 0.7s ease;            
        box-shadow: 4px 3px  3px #A6A5A9; 
    }
    #Adref:hover
    {
        font-size: 23px;
        color: whitesmoke;
        background-color: #555555;
    }
    
</style>
<?php

    include ('ConnectDB.php');
    session_start();
    $AdID=$_SESSION["AdminID"];
    $Query=  mysql_query("SELECT * FROM admintable WHERE AdminID=$AdID");
    $QryResArray=  mysql_fetch_assoc($Query);
    
    $name = $QryResArray['AdminName'];
    $id = $QryResArray['AdminID'];
    
    ?>
   <div id="Frm">  <?php
    echo "ADMIN NAME:".$name."</br>";
    echo "ADMIN ID:".$id."</br>"; ?>
       
       <a id="Btn" href="AdminPanel.php">LOG OUT</a>
       <?php
    
    
    
    
?>
<ul>
    <li><a id="Adref" href="ResInsert.php" >INSERT RESTAURANT</a> </li>
    <li><a id="Adref" href="DisplayInsert.php" >EDIT RESTAURANT INFO</a> </li>
    <li><a id="Adref" href="DeleteInsert.php" >DELETE RESTAURANT </a> </li>   
    
</ul>
</br>
<ul>
    <li><a id="Adref" href="MenuInsert.php" >INSERT RESTAURANT MENU</a> </li>
    <li><a id="Adref" href="MenuDisplayInsert.php" >EDIT RESTAURANT MENU</a> </li>
    <li><a id="Adref" href="MenuDeleteInsert.php" >DELETE RESTAURANT MENU </a> </li>   
    
</ul>
<ul>
    <li><a  id="Adref" href="OrderDisplay.php" >LATEST ORDERS</a> </li>

    
</ul>
   </div>



