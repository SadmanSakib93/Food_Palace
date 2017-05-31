<!doctype html>
<link rel="stylesheet" type="text/css" href="MainStyle.css"/>
<style>
    #Restaurant
    {
      
        width: 100%;
        height: 150px;
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
        left:35%;
    }
    #ListInfo
    {
        position: relative;
        left:47%;
        bottom: 50%;
    }
    #ReviewDiv
    {
        width: 100%;
    }
    #InputBox
    {
        width: 50%;
        max-width: 50%;
        height: 80px;
        border: 1px solid black;
        box-shadow: 2px 2px #7c7d7e  ;
        border-radius:5px;
    }
    
            #SubmitReviewButton
            {
                position: relative;
                text-align: center;
                opacity: 1;
                border-radius:5px;
                margin:5px;
                font-size:22px;
                color:black;
                cursor: pointer;
                transition: all 0.4s ease;            
                box-shadow: 2px 2px black; 
                font-weight: bold;                
            }
            #SubmitReviewButton:hover
            {
                background-color: black;
                box-shadow: 3px 3px #A6A5A9;
                color: whitesmoke;
            }
            #SubmitReviewButton:active
            {
                background-color: slateblue;
                box-shadow: 3px 3px darkgrey;
                color: black;
                font-size: 28px;
            }
            #ReviewDiv
            {
                position: relative;
                border-bottom:1px solid silver;
                width: 40%;
                max-width: 40%;
                text-align: center;
                margin: 5px;
                left:31.5%;
            }
            #GiveRivForm
            {
                position: relative;
                padding: 5px;
                margin-top: 20px;
                width: 50%;
                left: 31.5%;
            }
            #UN
            {
                font-size: 20px;
                font-weight: bold;     
            }
            #UR
            {
                font-size: 15px;
                font-weight: normal;               
            }

</style>

<?php

include ('ConnectDB.php');
    session_start();
    $UserID=$_SESSION["UserID"];
    $ResID=$_REQUEST['id'];
    $ResInfo=mysql_query("SELECT * FROM restaurantstable  WHERE ResID='$ResID'");
    
    $ResReview=mysql_query("SELECT * FROM reviewtable  WHERE ResID='$ResID'");
    $UserName=mysql_query("SELECT * FROM usertable,reviewtable  WHERE usertable.ID=reviewtable.UserID AND reviewtable.ResID='$ResID'");


?>
        <div class="TitleBar">
              
                <img src="images/HeaderBurger.png" id="HeaderBurger"> 
                <img src="images/HeaderIceCream.png" id="HeaderBurger"> 
                <right>              
                    <img src="images/HeaderPizza.png" id="HeaderPizza">
                    <img src="images/HeaderSandwich.png" id="HeaderPizza">
                </right>         
                <center> <?php
                   echo "<a href=UserMain.php?id=$UserID id=TitleBarLOGO>"."<center id=TitleBarLOGOText>". "FOOD PALACE"."</center>"."</a>"; ?>
                        
                </center>  
        </div>  <?php

while($ResInfoRow = mysql_fetch_assoc($ResInfo)) {  

        ?><div id="Restaurant"> <?php
            echo  "<a href=index.php>";
            echo  "<img   src=".$ResInfoRow["ResImageLogoPath"];  "</br>"?> id="ResPic" >  <?php
            echo  "<li id=ListInfo>"."Restaurant Name: ". $ResInfoRow["ResName"]; "</li>" ?><?php
            echo "</a>";

        ?></div>
<?php
}
        
while(($ResReviewRow = mysql_fetch_assoc($ResReview)) && ($UserNameFetch=mysql_fetch_assoc($UserName))) { ?>
        <div id="ReviewDiv"><?php
        
            
            echo  "<li id=UN>". $UserNameFetch["NAME"]; "</li>" ?><?php
            echo  "<p id=UR>". $ResReviewRow["ReviewMessage"]; "</p>" ?><?php
           

        ?></div>

<?php
} ?>
<form id="GiveRivForm" action="InsertReviw.php" method="get"> 
            Enter Your Review:  <input id="InputBox" type="text" name="Review" placeholder="Enter Your Review Here"   /> <?php
            echo "<input type=submit name=SubmitReviewButton id=SubmitReviewButton value=POST>" ?><?php
            echo "<input type=hidden name=UID value=$UserID; >" ?><?php
            echo "<input type=hidden name=RID value=$ResID; >" ?>
        </form> 



        
