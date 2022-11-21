<?php

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

    if(isset($_POST['Login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sampledb";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

 
    $sql = "INSERT INTO in login (email, password, ) VALUES ('0', '$email', '$password')";
  
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    mysqli_close($con);

?>