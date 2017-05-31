<?php

include ('ConnectDB.php');
        if(isset($_GET['SubmitReviewButton'])){
            $rvwmsg = $_GET['Review'];
            $UID = $_GET['UID'];
            $RID = $_GET['RID'];

            if(mysql_query("INSERT INTO reviewtable (ReviewMessage,UserID, ResID ) VALUES ('$rvwmsg', '$UID', '$RID')"))
               print '<script type="text/javascript">'; 
               print 'alert("Review Inserted. Thanks for your opinion.")'; 
               print '</script>';
               header("refresh:0; url=Review.php?id=$RID");
            mysql_close();

        }
