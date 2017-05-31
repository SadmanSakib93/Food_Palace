<!doctype html>

    <?php
    include ('ConnectDB.php');
    $Id=$_REQUEST['id'];
    $QryRes=  mysql_query("SELECT * FROM UserTable WHERE ID='$Id'");
    $QryResArray=  mysql_fetch_assoc($QryRes);
    
    $name = $QryResArray['NAME'];
    
    ?>

<html>
    <head>
       <title> 
           FOOD PALACE
       </title>
        
        <link rel="stylesheet" type="text/css" href="MainStyle.css"/>
        
        <style>
            body 
            {
                background-color: beige;
                background-image: url(images/food12.jpg);

            }
            @font-face
            {
                font-family: WC_Wunderbach_Rough_Bta;
                src:url(fonts/WC_Wunderbach_Rough_Bta.otf);
            } 
            @font-face
            {
                font-family: NewRocker;
                src:url(fonts/NewRocker.otf);
            } 
            @font-face
            {
                font-family: District;
                src:url(fonts/District.ttf);
            }

            #SearchDiv
            {
                position: relative;
                background-color: #000;
                opacity: .6;
                width: 100%;
                height: 100px;
                color: cornflowerblue;
                top: 250px;
                text-align: center;
                border: 1px solid whitesmoke;
                border-radius: 3px;
            }
            #SearchRes
            {
                position: relative; 
                font-size: 30px;
                text-spacing: 5px;
                text-shadow: 4px 4px 6px #333;
                text-align: center;
                top:20px;
                width: 30%;
                height: 60px;
                opacity: 1;
                border: 1px solid #000;
                font-family: District;
                border-radius: 7px;
                
            }           
            #Text
            {
                position: relative;
                text-align: center;
                top:20px;
                opacity: 1;
                font-size: 30px;
                font-family:NewRocker;
                font-weight: bold;
            }
            #FindButton
            {
                position: relative;
                text-align: center;
                top: 18px;;
                left: 2%;
                opacity: 1;
                border-radius:5px;
                margin:5px;
                font-size:22px;
                color:black;
                cursor: pointer;
                transition: all 0.4s ease;            
                box-shadow: 2px 2px black; 
                font-family:NewRocker;
                font-weight: bold;                
            }
            #FindButton:hover
            {
                background-color: black;
                box-shadow: 4px 4px whitesmoke;
                color: whitesmoke;
            }
            #FindButton:active
            {
                background-color: red;
                box-shadow: 4px 4px grey;
                color: black;
                font-size: 28px;
            }
            
            
            // For styling the profile dropdown menu
            ul {
                font-family: WC_Wunderbach_Rough_Bta;
                font-size: 30px;
                
                margin: 0;
                padding: 0;
                list-style: none;
            }
            ul li {
                font-family: WC_Wunderbach_Rough_Bta;
                display: block;
                position: relative;
                float: left;
            }
            li ul {
                display: none;
            }
            ul li a {
                display: block;
                text-decoration: none;
                color: #000;
                font-size: 21px;
                border-bottom: 1px solid activecaption;
                padding: 5px 15px 5px 15px;
                background: none;
                margin-left: 1px;
                white-space: nowrap;
            }
            ul li a:hover {
            background: #ffffff;
            opacity: .5;
            font-size: 24px;
            border: 1px solid appworkspace;
            transition: all 0.4s ease;            
            box-shadow: 2px 1px black;            
            color: black;
           
            }

            
            li:hover ul {
                display: inline;
                position: absolute;
            }
            li:hover li {
                float: none;
                font-size: 15px;
            }
            li:hover a { 
                background: none; 
            }
            li:hover li a:hover {
                background: #ffffff;
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
                   echo "<a href=UserMain.php?id=$Id id=TitleBarLOGO>"."<center id=TitleBarLOGOText>". "FOOD PALACE"."</center>"."</a>"; ?>
                        
                </center>  
        </div>
        
        
        <ul>
                <li><a href="#">My Account: <?php echo $name ?></a>
                    <ul id="menu">
                        <li ><a href="UserProfile.php">* My Profile</a></li>
                        <li ><a href="Main.php">* Logout</a></li>
                    </ul>
                </li>
        </ul>
        
        
                  
        <div id="SearchDiv">
            <form   action="SearchRestaurants.php" method="post" > 
             <?php //   <strong id="Text">AREA:</strong><input id="SearchRes"  type="text" name="SearchArea"  size="30"  required/> ?>
                <select name="SearchArea" id="SearchRes">
                    <option value="DHANMONDI">DHANMONDI</option>
                    <option value="GULSHAN">GULSHAN</option>
                    <option value="BANANI">BANANI</option>
                </select>
                <input id="FindButton" type="submit" name="submit" id="submit" value="FIND RESTAURANTS">
            </form>
        </div>
        
    </body>
    </html>
    