<?php
    //Config connection
    $host       = "localhost";
    $port       = "5432";
    $dbname     = "rso";
    $user       = "postgres";
    $password   = "UNICESMAG";
   


    //Create connection
    $conn = pg_connect("
        host=$host
        port=$port
        dbname=$dbname
        user=$user
        password=$password
    ");

    if(!$conn){
        die("Connection error: " . pg_last_error());
    }else{
        echo "Success connection";
    }
    pg_close();
?>