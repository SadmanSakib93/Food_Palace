<!doctype html>
<link rel="stylesheet" type="text/css" href="MainStyle.css"/>
<style>
            body
            {
                background-color: beige;
                background-image: url(images/food13.jpg);
                width: 100%;

            }
            @font-face
            {
                font-family: zero_and_zero_is;
                src:url(fonts/zero_and_zero_is.ttf);
            }
            @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            }
            @font-face
            {
                font-family: MAXIMUMSECURITY;
                src:url(fonts/MAXIMUMSECURITY.ttf);
            }            
            #MenuButton
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
                font-family:NewRocker;
                font-weight: bold;                
            }
            #MenuButton:hover
            {
                background-color: black;
                box-shadow: 3px 3px #A6A5A9;
                color: whitesmoke;
            }
            #MenuButton:active
            {
                background-color: slateblue;
                box-shadow: 3px 3px darkgrey;
                color: black;
                font-size: 28px;
            }
            #Table
            {
                text-align: center;
                position: relative;
                height: 100%;
                top: 25px;
                left: 37%;
                font-family:zero_and_zero_is;
                font-weight: bold;
                background-color: white;
                color:#7c7d7e;
                font-size: 25px;
                border:1px solid #A6A5A9;
                box-shadow: 4px 3px 3px #A6A5A9; 
                border-radius: 4px;
                
            }
            #TbHeader
            {
                font-family:old_stamper;
                font-weight: bold;
                font-size:20px;
                color: midnightblue;
                
            }
            #TabRowImages
            {
                border:1px solid #A6A5A9;
                padding: 10px;
                margin: 15px;
            }
            #TabRowName
            {
                broder:1px solid black;
            }
            #NumOfRes
            {
                text-align:center;
                padding-top: 15px;
                padding-bottom: 15px;
                font-family:MAXIMUMSECURITY;
                font-weight: bold;
                font-size:40px;
            }
</style>
<?php

// Grab User submitted information
$SearchRes = $_POST['SearchArea'];
session_start();
$UsrID=$_SESSION["UserID"];


include ('ConnectDB.php');

$qry="SELECT * FROM restaurantstable WHERE ResArea='$SearchRes'";
$result = mysql_query($qry);

$NumOfRows=mysql_num_rows($result);
 
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

if ($NumOfRows > 0) {
    ?>
<div id="NumOfRes"><?php
    echo " You can order from ".$NumOfRows." restaurants in ".$SearchRes. " . </br></br>";
    ?> </div> <?php
echo "<table id=Table >
<tr>
<th id=TbHeader>Image</th>
<th id=TbHeader>Name</th>
</tr>";
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
       /* $RestaurantIDarray[$NumOfRows-$NumOfRows]=$row["ResID"];  
        echo $RestaurantIDarray[$NumOfRows-$NumOfRows];
        $NumOfRows=$NumOfRows-1;
        $id=$row["ResID"]; 
        

        $_SESSION["RestaurantID"] = $RestaurantIDarray[$NumOfRows-$NumOfRows];
        
        echo "<div>";
        echo "Name: " . $row["ResName"].  "<br>"; ?>
        <img  src="<?php echo $row["ResImageLogoPath"]; ?>" id="ResLogoImage" height="100" width="100" >
        
        <input  type="submit" name="Resid" value="MENU"> MENU </a>
        <?php 
        
        echo "</div>";
*/


        
        
        echo "<form action=index.php method=post >";  
        echo "<tr >";       
        echo "<td id=TabRowImages>" .  "<img  src=".$row["ResImageLogoPath"]; ?> height="100" width="100" > <?php " </td>";
        echo "<td id=TabRowName>" . $row["ResName"].   "</td>";
        echo "<td>" . "<input type=hidden name=hiddenRname value=" . $row["ResID"] . " </td>";
        echo "<td id=TabRowName>" . "<input  type=submit name=Rid value=MENU id=MenuButton  ". " </td>";
        echo"</tr>";
        echo"</form>";
        }


        echo"</table>";
}
 else {
        print '<script type="text/javascript">'; 
        print 'alert("Sorry, No match found")'; 
        print '</script>';     
        header("location:UserMain.php?id=$UserID");

}

?>