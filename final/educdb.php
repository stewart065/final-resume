<?php

        require_once "connection.php";

        if($_GET){

            
            $yr = $_GET['Year'];
            $schl = $_GET['school'];
            $awts = $_GET['title'];

            $sql="INSERT INTO `educ`( `title`,`year`, `school`) VALUES ('$yr','$schl','$awts')";
            $res = $con->query($sql);
                if($res)
                        header("Location:crtf.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>