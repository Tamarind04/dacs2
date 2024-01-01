<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "website_quinndemo";

    if(!$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
    {
        die("Connection failed");
    }
?>  