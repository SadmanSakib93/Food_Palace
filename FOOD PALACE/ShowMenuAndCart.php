<!doctype html>
<link rel="stylesheet" type="text/css" href="MainStyle.css"/>
<style>
     @font-face
            {
                font-family: BRUSHSTP;
                src:url(fonts/BRUSHSTP.ttf);
            }
             @font-face
            {
                font-family: RAPSCALL;
                src:url(fonts/RAPSCALL.ttf);
            }           
    #Restaurant
    {
      
        width: 25%;
        height: 400px;
        padding-top: 20px;
        margin-top: 20px;
        border: 1px solid darkblue;
        background-color: beige;
        font-size: 18px;

        
    }
    #ResPic
    {
        position: relative;
        border: 1px solid darkblue;
        box-shadow: 3px 3px #7c7d7e  ;
        border-radius:4px;
        left:30%;
    }
    #MenuForm
    {
        position: relative;
        padding: 15px;
        bottom: 430px;
        left: 34%;
        width: 30%;
        background-color: azure;
        color: #7c7d7e;
        padding-top: 20px;
        margin-top: 20px;
        border: 1px solid #000;
        box-shadow: 3px 2px #7c7d7e  ;
    }
    #MenuTypeItem
    {
        border-top: 1px dashed grey;
        padding-top: 15px;
        padding-bottom: 15px;
        
    }
    #MenuType
    {
        position: relative;
        text-align: center;
        background-color: #000;
        color: white;
        opacity: .7;
        border: 1px solid black;
        box-shadow: 2px 2px lightgrey  ;
        border-radius:4px;
        
    }
    #OrderForm
    {
        position: absolute;
        border: 1px solid #000;
        top:150px;
        left:73%;
        width: 340px;
    }
    #ListInfo
    {
        font-weight: bold;
        padding-bottom: 15px;
        
    }
    #ReviewButton
    {
        position: relative;
        width: 100%;
        height: 7%;
        padding: 20px;
        top:20px;
        left: 18%;
        margin: 20px;
        font-size: 20px;
        transition: all 0.5s ease;            
        box-shadow: 2px 2px 2px 2px #A6A5A9; 
    }
    #ReviewButton:hover
    {
        background-color: black;
        box-shadow: 3px 3px #A6A5A9;
        color: whitesmoke;
        cursor: pointer;
    }
    #ReviewButton:active
    {
        background-color: windowframe;
        box-shadow: 3px 3px #fff;
        border: 1px solid black;
        color: black;
        cursor: pointer;

    }
    #addToCart 
    {
        font-family: RAPSCALL;
        font-size: 22px;
        color: #7c7d7e;
        
    }

    #addToCart:hover 
    {
        cursor: pointer;
        font-size: 26px;
        color: #000;

        
    }

    </style>

<?php  
$IDRES=0;

        if($IDRES==0)
            $IDRES=$_SESSION['ResturantID'];

       $UsrID=$_SESSION["UserID"];
        

        $QryRestaurantNamePic=mysql_query("SELECT * FROM restaurantstable  WHERE ResID=$IDRES");
        
        $QryRes=  mysql_query("SELECT * FROM itemtable  WHERE ResID=$IDRES ORDER BY ItemType");
        $row= mysql_fetch_assoc($QryRes);
        
        $ItemTypeQry= mysql_query("SELECT DISTINCT ItemType FROM itemtable  WHERE ResID=$IDRES ORDER BY ItemType");
        
        ?>
        <div class="TitleBar">
              
                <img src="images/HeaderBurger.png" id="HeaderBurger"> 
                <img src="images/HeaderIceCream.png" id="HeaderBurger"> 
                <right>              
                    <img src="images/HeaderPizza.png" id="HeaderPizza">
                    <img src="images/HeaderSandwich.png" id="HeaderPizza">
                </right>         
                <center> <?php
                   echo "<a href=UserMain.php?id=$UsrID id=TitleBarLOGO>"."<center id=TitleBarLOGOText>". "FOOD PALACE"."</center>"."</a>"; ?>
                        
                </center>  
        </div>
<?php

  while($ResInfoRow = mysql_fetch_assoc($QryRestaurantNamePic)) {  
?>

    <div id="Restaurant"> <?php
            
            echo  "<img   src=".$ResInfoRow["ResImageLogoPath"]; "</br>"?> id="ResPic" >  <?php
            echo "<ul>";
            echo  "<li id=ListInfo>"."Restaurant Name: ". $ResInfoRow["ResName"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Restaurant Address: ". $ResInfoRow["ResAddress"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Restaurant Area: ". $ResInfoRow["ResArea"]; "</li>" ?><?php
            echo "</ul>" ?><?php
            $RID=$ResInfoRow["ResID"];
            // echo  "<button onClick='GoReviewPage()' id=ReviewButton>". "GIVE REVIEW" ."</button>" ?><?php
            echo  "<a href=Review.php?id=$RID id=ReviewButton>". "GIVE REVIEW" . "</a>" ?>

    </div>
    
<?php


}
?>


<form id='MenuForm' action="#"  method=get>
   
  <?php
    while($TypeRow = mysql_fetch_array($ItemTypeQry)) 
        {
        ?>
    <div id='MenuType'>
        <?php
           echo "### ITEM TYPE ###"  ."<br>". $TypeRow["ItemType"]. "<br>"."<br>"; 
           ?>
    </div>
    <?php

          
        while( $row["ItemType"] == $TypeRow["ItemType"]) {

            ?>
            <div id='MenuTypeItem'>
                 <?php
                 $ItemID=$row["ItemID"];
                echo "Name: " . $row["ItemName"];
                echo "<input type=hidden name='$ItemID'  value=".$row["ItemPrice"]."/> " . "<br>"; 
                echo "Price: ".$row["ItemPrice"]."<br>"; ?>
                <a id="addToCart" href="index.php?page=products&action=add&id=<?php echo $row['ItemID'] ?>">Add to cart</a>  <?php               
                $row = mysql_fetch_assoc($QryRes);
                ?>
                
            </div>
    <?php

        } 
      }
        
           
    ?>   
