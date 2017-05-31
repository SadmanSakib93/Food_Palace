<!doctype html>
<?php
if(isset($_POST['Rid'])){
    include ('ConnectDB.php');
$ID = $_POST['RESI'];
echo $ID;
$Query=  mysql_query("SELECT * FROM restaurantstable ORDER BY ResID DESC");
}
?>
<h1> UPDATE RESTAURANT MENU </h1>
        <div id="RegDiv">
            
            <form id="InsertForm" action="MenuUpdateDB.php" method="post" > 
                <p >ITEM NAME:  <input type="text" name="NAME" size="40"  required/>  </p>
                <p >ITEM PRICE:<input type="text" name="PRICE" size="70"  /> </p>
                <p >ITEM TYPE:<input type="text" name="TYPE" size="40"  required/></p>
                <input type=hidden name="ITMID" value=$ID ><?php
                echo "<input type=hidden name=ITMID value=$ID >" ?>
                
                
                
                <select name="RestID" id="SearchRes"><?php
                while($row = mysql_fetch_assoc($Query)) { 
                    $ResI=$row['ResID'];
                    echo "<option value=$ResI>"  .$row['ResName']; "</option>" ?><?php
                    
                }
                ?>
                </select></br></br>
                <input type="submit" name="submit" id="submit" value="SUBMIT">             
            </form>
            
            
        </div>