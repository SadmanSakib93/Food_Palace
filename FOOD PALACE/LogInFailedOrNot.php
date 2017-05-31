<?php

// Grab User submitted information
$email = $_POST['E_MAIL'];
$pass = $_POST['PASSWORD'];


include ('ConnectDB.php');

$qry="SELECT * FROM usertable WHERE E_MAIL='$email' AND PASSWORD='$pass'";
$result = mysql_query($qry);
$ResArray=  mysql_fetch_assoc($result);
$id=$ResArray['ID'];

session_start();
$_SESSION["UserID"] = $id;


if($result) 
    {
	if(mysql_num_rows($result) > 0)
            {
               $LoginORnot=TRUE;
               header("location:UserMain.php?id=$id");
            }
        else
            {

               $LoginORnot=FALSE;
               print '<script type="text/javascript">'; 
               print 'alert("Sorry, your credentials dont match, Please try again.")'; 
               print '</script>';
               header('refresh:0; url=Main.php');

               
            }
    
    }

else
{
    

     $LoginORnot=FALSE;
     print '<script type="text/javascript">'; 
     print 'alert("Sorry, your credentials dont match, Please try again.")'; 
     print '</script>';     
     header('refresh:0; url=Main.php');

}

?>