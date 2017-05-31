<!doctype html>
<?php
    include ('ConnectDB.php');
    session_start();
    $UserID=$_SESSION["UserID"];
    $QryRes=  mysql_query("SELECT * FROM UserTable WHERE ID=$UserID");
    $QryResArray=  mysql_fetch_assoc($QryRes);
    
    
    $name = $QryResArray['NAME'];
    $add = $QryResArray['ADDRESS'];
    $email = $QryResArray['E_MAIL'];
    $mobno = $QryResArray['MOBILE_NO'];
?>



<html>
    <head>
        <title> User Profile </title>
        <link rel="stylesheet" type="text/css" href="MainStyle.css"/>
        <style>
            body 
            {
                background-color: beige;
                background-image: url(images/back1);

            }
            @font-face
            {
                font-family: NewRocker;
                src:url(fonts/NewRocker.otf);
            } 
            #UserInfo
            {
                position: relative;
                padding: 50px;
                padding-top: 150px;
                width: 25%;
                left: 33%;
                border: 2px solid window;
            }
            .UserProfileHeader
            {
                text-decoration: underline;
                font-size: 25px;
                color:  #000;
                font-family:NewRocker;
                font-weight: bold;
                
            }
            .Infos
            {
                margin-left: 80px;
                font-size: 20px;
                color:  darkslategray;
                font-weight: normal;
                text-decoration: none;
                
                

            }
        </style>
    
    </head>
    
<body>
    
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
        </div>
    
    <div id="UserInfo"
         
        <p class="UserProfileHeader"><?php echo $name ?> 's Profile</p>
         
        <li class="Infos">Name: <?php echo $name ?></li><br>
        <li class="Infos">Address: <?php echo $add ?></li><br>
        <li class="Infos">E-mail: <?php echo $email ?></li><br>
        <li class="Infos">Mobile No: <?php echo $mobno ?></li><br>
                   
    </div>
        
        
        
        </body>
</html>
        
