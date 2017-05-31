<!doctype html>
<style>
    #FormAtributes
    {
        height: 100px;
    }
</style>
<?php
if(isset($_POST['UID'])){
$ID = $_POST['UID'];
echo $ID;
}
?>
<h1> UPDATE RESTAURANT </h1>
        <div id="RegDiv">
            
            <form id="InsertForm" action="ResUpdateDB.php" method="post" > 
                <p >RESTAURANT NAME:  <input type="text" name="NAME" size="40"  required/>  </p>
                <p >RESTAURANT ADDRESS:<input type="text" name="ADDRESS" size="70"  /> </p>
                <p >RESTAURANT AREA:<input type="text" name="AREA" size="40"  required/></p>
                <input type="submit" name="submit" id="submit" value="SUBMIT">    <?php
                echo "<input type=hidden name=hiddenID value=$ID  />" ?> 
            
            
        </div>

