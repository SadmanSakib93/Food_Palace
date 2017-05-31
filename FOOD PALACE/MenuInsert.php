<!doctype html>
<style>
    #FormAtributes
    {
        height: 100px;
    }
</style>
<?php
    include ('ConnectDB.php');
    $Query=  mysql_query("SELECT * FROM restaurantstable ORDER BY ResID DESC");
?>
<h1> INSERT ITEM </h1>
        <div id="RegDiv">
            
            <form id="InsertForm" action="MenuInsertDB.php" method="post" > 
                <p >ITEM NAME:  <input type="text" name="NAME" size="40"  required/>  </p>
                <p >ITEM PRICE:<input type="text" name="PRICE" size="70"  /> </p>
                <p >ITEM TYPE:<input type="text" name="TYPE" size="40"  required/></p>
                
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


