<?php

        require_once "connection.php";

        if($_GET){

            
            $Ref = $_GET['Reference'];
            $tit = $_GET['title'];
            $cns = $_GET['cn'];
            $Emails = $_GET['Emailsss'];
           

            $sql="INSERT INTO `characterse`(`Reference`, `title`, `comapnyname`, `Email`) VALUES ('$Ref','$tit','$cns','$Emails')";
            $res = $con->query($sql);
                if($res)
                        header("Location:expr.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>