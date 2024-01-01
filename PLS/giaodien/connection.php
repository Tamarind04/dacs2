<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "website_quinndemo";

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
    {
        die("Connection failed");
    }
    
    
?>  