<!doctype html>

<html>
    <head>
       <title> 
           Sign Up
       </title>
        
        <link rel="stylesheet" type="text/css" href="MainStyle.css"/>
        
        <style>
            body 
            {
                background-color: beige;
                background-image: url(images/food11.jpg);
            }
            @font-face
            {
                font-family: RAPSCALL;
                src:url(fonts/RAPSCALL.ttf);
            }
            @font-face
            {
                font-family: RAPSCALL;
                src:url(fonts/umbrage2.ttf);
            }

            #RegForm
            {
                background-color:  antiquewhite;
                opacity: .65;
                width: 45%;
                font-family:RAPSCALL;
                font-weight: bold;
                font-size: 25px;
                border: 2px solid black;
                margin-top: 20px;
                box-shadow: 2px 2px 2px 2px gray;
                border-radius: 5px;
            }

            
            #FormAtributes
            {
                position: relative;
                width: 300px;
                height: 60px;
                padding: 20px;
                margin: 20px;
                border: 2px solid #555555;
                box-shadow: 4px 3px 3px 3px slategrey;
                border-radius: 5px;                
                font-weight: bolder;
            }
            #submit
            {
                width: 150px;
                height: 40px;
                border-radius:3px;
                font-size:25px;
                margin: 10px;
                font-family: umbrage2;
                transition: all 0.4s ease;            
                box-shadow: 2px 2px darkgray; 
                border: 1px solid black;   
            }
            #submit:hover
            {
                cursor: pointer;
                opacity: 1;
                font-size:30px;
                background-color: darkslategrey;     
                
            }
            #input
            {
                
                border: 2px solid black;
                width: 80%;
                height: 40%;
                background-color: #A6A5A9;
                color:#aa0000;
                transition: all 0.5s ease;   
            }
            #input:hover
            {
                background-color: white;
                width: 83%;
                
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
                <center><div id="TitleBarLOGO"><center id="TitleBarLOGOText"> FOOD PALACE</center></div></center>  
        </div>         
        
    <center>
        <div id="RegDiv">
            
            <form id="RegForm" action="RegFormDB.php" method="post" > 
                <div id="FormAtributes"><center>NAME:</center>  <input id="input" type="text" name="NAME"  size="30"  required/>  </div>
                <div id="FormAtributes">ADDRESS:<input id="input" type="text" name="ADDRESS" size="30"  /> </div>
                <div id="FormAtributes"><center>E-MAIL:</center><input id="input" type="text" name="E_MAIL" size="30"  required/></div>
                <div id="FormAtributes">MOBILE NO:<input id="input" type="text" name="MOBILE_NO" size="30"  required/> </div>
                <div id="FormAtributes">PASSWORD:<input id="input" type="text" name="PASSWORD" size="30"  required/> </div>
                <input type="submit" name="submit" id="submit" value="SUBMIT">             
            </form>
            
            
        </div>
    </center>
        
    </body>
</html>
