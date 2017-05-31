<!doctype html>

<html>
    <head>
       <title> 
            FOOD PALACE 
       </title>
        
       <link rel="stylesheet" type="text/css" href="MainStyle.css"/>


       <style>
        body
            {
                background-color: whitesmoke;

            }


            #RegText
            {
                position: relative;
                overflow: visible;
                backface-visibility:  visible;
                font-family:umbrage2;
                font-weight: 100;
                font-size: 25px;
                color: lightslategrey;
                margin-left: 15px;
                margin-bottom: 15px;
                box-shadow: 3px 3px 3px slategrey;
                border-radius: 5px;
                background-color: lightgrey;
                left: 32%;
               
                
            }

            #RegText:hover
            {
                color: white;
                font-size: 28px;
                background-color:  #333;
                
            }
            #RegText:active
            {
                color: red;
                font-size: 28px;
                background-color: black;
                
            }
            #SlideBody
            { 
                margin-top: 7px;
                width: 100%;
                height: 90%;
            }
            .ws_images
            {
                margin-top:8px; 
            }

             


       </style>
       
<?php 
$_SESSION['ResturantID']=-1;
?>

       
    </head>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
    
    
    
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
        
        <div id="SlideBody">


            
            


<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
           <a id="RegText" href="RegistrationForm.php"> CREATE AN ACCOUNT </a>
                <a id="RegText" href="LogInForm.php"> CLICK TO LOGIN </a>

<div class="ws_images">
                <ul>
		<li><img src="data1/images/food1.jpg" alt="WELCOME TO FOOD PALACE !" title="WELCOME TO FOOD PALACE !" id="wows1_0"/></li>
		<li><img src="data1/images/food2.jpg" alt="WE PROVIDE THE BEST ONLINE FOOD ORDERING !" title="WE PROVIDE THE BEST ONLINE FOOD ORDERING !" id="wows1_1"/></li>
		<li><img src="data1/images/food3.jpg" alt="WE BELIEVE IN QUALITY !" title="WE BELIEVE IN QUALITY !" id="wows1_2"/></li>
		<li><img src="data1/images/food4.jpg" alt="ORDER NOW AND ENJOY EATING !" title="ORDER NOW AND ENJOY EATING !" id="wows1_3"/></li>
		<li><img src="data1/images/food5.jpg" alt="OUR GOAL IS TO MAKE YOUR MEAL PLEASANT !" title="OUR GOAL IS TO MAKE YOUR MEAL PLEASANT !" id="wows1_4"/></li>
		<li><img src="data1/images/food7.jpg" alt="HAPPY EATING WITH FOOD PALACE !" title="HAPPY EATING WITH FOOD PALACE !" id="wows1_5"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/food9.jpg" alt="slider jquery free download" title="SEARCH YOUR FAVORITE FOOD !" id="wows1_6"/></a></li>
		<li><img src="data1/images/food10.jpg" alt="food10" title="SO ORDER NOW !" id="wows1_7"/></li>
                
	</ul></div>

</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

        </div>
        
        
    </body>
</html>
